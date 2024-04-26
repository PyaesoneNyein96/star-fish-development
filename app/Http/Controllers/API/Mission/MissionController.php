<?php

namespace App\Http\Controllers\API\Mission;

use App\Models\Game;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\StudentGame;

use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Models\LoginDailyBonus;
use App\Http\Controllers\Controller;
use App\Http\Traits\PointAddingTrait;
use App\Models\DailyBonus;


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

        $mappingForThreeTimes = $rawLessons->map(function ($raw) use($repetitiveRecords) {
            $repeat = $repetitiveRecords->where('lesson_id',$raw->id)->first();
            return [
                'lesson_id' => $raw->id,
                'name' => "Lesson ". $raw->name,
                'allowed' => optional($repeat)->count == 3 || optional($repeat)->count == 4 ,
                'claimed' => (optional($repeat)->count >= 3 && optional($repeat)->count < 5) && optional($repeat)->claimed_3 == 1 && true,
                'count' => optional($repeat)->count,
                'point' => (optional($repeat)->count >= 3 && optional($repeat)->count < 5) && optional($repeat)->claimed_3 == 0 ? 1 : null,
            ];
        });

        /// ======================

        $mappingForFiveTimes = $rawLessons->map(function ($raw) use($repetitiveRecords){
            $repeat = $repetitiveRecords->where('lesson_id',$raw->id)->first();
            return [
                'lesson_id' => $raw->id,
                'name' => "Lesson ". $raw->name,
                'allowed' => optional($repeat)->count == 5,
                'claimed' => optional($repeat)->count == 5 && optional($repeat)->claimed_5 == 1 && true,
                'count' => optional($repeat)->count,
                'point' =>  optional($repeat)->count == 5 && optional($repeat)->claimed_5 == 0 ? 3 : null ,
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
            $point = $request->header('point');
            $count = $request->header('count');
            $lesson_id = $request->header('lesson_id');

            $claimUpdate = StudentLesson::where('lesson_id',$lesson_id)
            ->where('student_id', $request->student->id)->first();

            // return $claimUpdate;

            // $claimUpdate->claimed = $count == 3 || $count == 4 ? 1 : 3;

            if($count == 3 || $count == 4){
                $claimUpdate->claimed_3 = 1;
            }else{
                $claimUpdate->claimed_5 = 1;
            }
            $claimUpdate->save();

            $this->point_lvl($student, $point);

    }



    // ===============================================================//
    // Daily Bonus -
    // ===============================================================//

    // Daily Bonus list
    public function dailyBonusList(Request $request){

        $bonus = DailyBonus::where('student_id',$request->student->id)->first();

        $bonus_list = [
            '15_min' => $bonus->fifteen == null && true,
            '15_daily' => $bonus->daily,
            '30_min' => $bonus->fifteen !== null && true,
        ];

        return $bonus_list;


    }

    // Daily Bonus claim
    public function dailyBonusClaim(Request $request){

        $record = DailyBonus::where('student_id', $request->student->id)->first();


        $dailyBonus = $record->daily == 0 ? 1 : 2;

        $record->update(['daily' => $dailyBonus]);

        return "success";

    }







    ////////////
}
