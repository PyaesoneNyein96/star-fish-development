<?php

namespace App\Http\Controllers\API\Mission;

use Carbon\Carbon;
use App\Models\Game;
use App\Models\Lesson;
use App\Models\Student;

use App\Models\DailyBonus;
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

        if(!$gradeId || $gradeId->count() == 0) return "nope";

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


            if($count == 3 || $count == 4){
                $claimUpdate->claimed_3 = 1;
            }else{
                $claimUpdate->claimed_5 = 1;
            }
            $claimUpdate->save();

            $this->point_lvl($student, $count == 3 ? 1 : 3);

            DB::commit();
            return response()->json([
                'message' => "Successfully claimed repetitive bonus."
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
        $timezone =  strval($request->student->country->timezone);



        $now = Carbon::now();
        $added15mins =  $record->first != 1 ? Carbon::parse($record->first) : null;
        $added30mins =  $record->second != 1 ? Carbon::parse($record->second) : null;
        $daily_count =  $record->daily != 1 ? Carbon::parse($record->daily) : null;


        $bonus_list = [
            'first' =>  $record->first && ($now >= $added15mins) ? true : false,
            'second' => $record->first && ($now >= $added30mins)  ? true: false,
            'daily' =>  $daily_count && ($now >= $daily_count)  ? false : true,
        ];

        return $bonus_list;


    }

    // Daily Bonus claim
    public function dailyBonusClaim(Request $request){

        $record = DailyBonus::where('student_id', $request->student->id)->first();

        $timezone =  strval($request->student->country->timezone);


        $now = Carbon::now();

        $first_claim = $request->header('first');
        $second_claim = $request->header('second');
        $daily_claim = $request->header('daily');


        $record->update([
            'first' => $first_claim && $record->first != 1 ? 1 : $added15mins,
            'second' =>  $second_claim && $record->second  != 1 ? 1 : $record->second,
            'daily' => $daily_claim && $record->daily  != 1 ? 1 : $record->daily,
        ]);

        return "success";

    }







    ////////////
}
