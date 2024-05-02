<?php

namespace App\Http\Controllers\API\Mission;

use Carbon\Carbon;
use App\Models\Game;
use App\Models\Lesson;
use App\Models\Student;

use App\Models\DailyBonus;
use App\Models\LoginBonus;
use App\Models\StudentGame;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Models\LoginDailyBonus;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Traits\PointAddingTrait;


class MissionController extends Controller
{
    //
    use PointAddingTrait;



    //===============================================================//
    // REPETITIVE LESSON -
    //===============================================================//

    // Repetitive Lesson List
    public function repetitiveLessonList(Request $request){

        $repeat = StudentLesson::where('student_id',$request->student->id)
        ->get();

        $repetitiveRecords =  StudentLesson::where('student_id',$request->student->id)
        ->where('count','<=',5)
        ->get();

        $gradeId = Student::find($request->student->id)->grades->pluck('id');

        if(!$gradeId || $gradeId->count() == 0) return response()->json(["message" => "You must be a subscriber for this feature."], 200);

        $rawLessons = Lesson::where('grade_id', $gradeId)->get();


        /// ====================== 3 times

        $mappingForThreeTimes = $rawLessons->map(function ($raw) use($repetitiveRecords) {
            $repeat = $repetitiveRecords->where('lesson_id',$raw->id)->first();
            return [
                'lesson_id' => $raw->id,
                'name' => "Lesson ". $raw->name,
                'allowed' => optional($repeat)->count == 3 || optional($repeat)->count == 4 ,
                'claimed' => (optional($repeat)->count >= 3 && optional($repeat)->count < 5) && optional($repeat)->claimed_3 == 0 && true,
                'count' => optional($repeat)->count,
                // 'point' => (optional($repeat)->count >= 3 && optional($repeat)->count < 5) && optional($repeat)->claimed_3 == 0 ? 1 : null,
            ];
        });

        /// ====================== 5 times

        $mappingForFiveTimes = $rawLessons->map(function ($raw) use($repetitiveRecords){
            $repeat = $repetitiveRecords->where('lesson_id',$raw->id)->first();
            return [
                'lesson_id' => $raw->id,
                'name' => "Lesson ". $raw->name,
                'allowed' => optional($repeat)->count == 5,
                'claimed' => optional($repeat)->count == 5 && optional($repeat)->claimed_5 == 1 && true,
                'count' => optional($repeat)->count,
                // 'point' =>  optional($repeat)->count == 5 && optional($repeat)->claimed_5 == 0 ? 3 : null ,
            ];
        });


        return response()->json([
            "repetitive_3" => $mappingForThreeTimes,
            "repetitive_5" => $mappingForFiveTimes,
        ], 200);

    }

    // Repetitive Bonus Claim
    public function repetitiveClaimLesson(Request $request){

            $student = $request->student;
            $count = $request->header('count');
            $lesson_id = $request->header('lesson_id');

            DB::beginTransaction();
            try {

            $claimUpdate = StudentLesson::where('lesson_id',$lesson_id)
            ->where('student_id', $request->student->id)->first();

            $sms = null;
            if($claimUpdate->claimed_3 == 0 && ($count == 3 || $count == 4)){
                $claimUpdate->claimed_3 = 1;
                $sms = 3;
                $this->point_lvl($student, 1);

            }else if ($claimUpdate->claimed_5 == 0 && $count == 5){
                $claimUpdate->claimed_5 = 1;
                $sms = 5;
                $this->point_lvl($student,3);
            }

            $claimUpdate->save();


            DB::commit();
            return response()->json([
                'message' => $sms == null ? "Already Claimed this bonus!" : "Successfully claimed ".$sms." repetitive bonus."
            ], 200);

           } catch (\Throwable $th) {
            DB::rollback();
            return $th;
            return response()->json($th, 200);
           }


    }



    // ===============================================================//
    // Daily Bonus -
    // ===============================================================//

    // Daily Bonus list
    public function dailyBonusList(Request $request){

        $record = DailyBonus::where('student_id',$request->student->id)->first();

        $now = Carbon::now()
        // ->addMinutes(35)
        ;
        $added15mins =  ($record->first != 1 && $record->day_count <= 5 ) ? Carbon::parse($record->first) : null;
        $added30mins =  $record->second != 1 && $record->day_count <= 5 ? Carbon::parse($record->second) : null;
        $daily_count =  $record->daily != 1 && $record->day_count <= 5 ? Carbon::parse($record->daily) : null;

        $bonus_list = [
            'first' =>  $added15mins && $now >= $added15mins,
            'second' => $added30mins && $now >= $added30mins,
            'daily' =>  $daily_count && $now <= $daily_count,
        ];

        return $bonus_list;


    }

    // Daily Bonus claim
    public function dailyBonusClaim(Request $request){

        $record = DailyBonus::where('student_id', $request->student->id)->first();

        $now = Carbon::now()
        // ->addMinutes(30)
        ;

        $first_claim = $request->header('first');
        $second_claim = $request->header('second');
        $daily_claim = $request->header('daily');

        DB::beginTransaction();
        try {

            $msg;
            $day_count = $record->created_at->diffInDays(Carbon::now());


            if($first_claim && $record->first != 1){
                $record->update([
                    'first' =>  Carbon::parse($record->first) <= $now ? 1 : $record->first
                ]);
                $msg = "15 minutes";
            }


            if($second_claim && $record->second != 1) {
                $update = $record->update([
                    'second' => Carbon::parse($record->second) <= $now ? 1 : $record->second
                ]);
                $msg = "30 minutes";
            }

            if($daily_claim && $record->daily != 1 && Carbon::parse($record->daily) >= $now) {
                $record->update([
                    'daily' =>  Carbon::parse($record->daily) >= $now  ? 1 : $record->daily
                ]);
                $msg = "1 day";
            }

            if($day_count <= 5){
                $this->point_lvl($request->student, 1);
            }

            DB::commit();

            return response()->json([
            'message' => isset($msg) ? "Successfully claimed daily rewards $msg." : "Already claimed bonus for today."
            ], 200);



        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json([
                'errors' => $th
            ], 500);
        }

    }



    // ===============================================================//
    // Login Bonus -
    // ===============================================================//

    public function loginBonusList(Request $request){

        $loginRecord = LoginBonus::where('student_id', $request->student->id)->first();

        $range = [7,15,30,60,90,180,365];



      $result = array_map(function ($r)use($loginRecord){
        return [
            'days' => $r,
            'allowed' => $r <= $loginRecord->day_count,
            'claim' => $r <= $loginRecord->day_count && $r >= $loginRecord->claim,
        ];
      }, $range);

        return $result;



    }


    // Login bonus claim
    public function loginBonusClaim (Request $request){


        $days = $request->header('days');

        $record = LoginBonus::where('student_id', $request->student->id)->first();

        $record->update([
            'claim' => $days
        ]);

        return "success";

    }






    ////////////
}
