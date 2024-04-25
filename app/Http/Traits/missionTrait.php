<?php


namespace App\Http\Traits;

use App\Models\Game;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\StudentGame;
use Illuminate\Http\Request;
use App\Models\StudentLesson;

trait missionTrait{


    // public function repetitiveGameList(Request $request){

    //     $repetitiveRecords = StudentGame::where('student_id',$request->student->id)
    //     ->where('count', '>=', 3)
    //     ->get();



    //     $records = $repetitiveRecords->map(function ($rp_data) {
    //         return [
    //             'game_id' => $rp_data->game_id,
    //             'name' => Game::find($rp_data->id)->name,
    //             'count' => $rp_data->count,
    //             'point' => $rp_data->count == 3 ? 1 : 3
    //         ];
    //     });


    //     return response()->json([
    //         "repetitiveBonus-games" => $records,
    //     ], 200);

    // }

    // public function repetitiveLessonList(Request $request){

    //     $repeat = StudentLesson::where('student_id',$request->student->id)
    //     ->get();

    //     $repetitive_records =  StudentLesson::where('student_id',$request->student->id)
    //     ->whereIn('count', [3,5])
    //     ->get();


    //     $gradeId = Student::find($request->student->id)->grades->pluck('id');

    //     if(!$gradeId || $gradeId->count() == 0) return "nope";

    //     $rawLessons = Lesson::where('grade_id', $gradeId)->get();


    //     $records = $rawLessons->map(function ($raw) use($repeat, $repetitive_records) { // Map function

    //         $repeat_count = $repeat->where('lesson_id',$raw->id)->first();


    //         if($repeat_count){
    //             if($repeat_count->count == 3 || $repeat_count->count == 5){
    //                $point = $repeat_count->count - 2;
    //             }else if($repeat_count->count == 3 || $repeat_count->count == 5){
    //                 $point = null;
    //             }
    //         }else{
    //             $point =null;
    //         }

    //         return [
    //             'lesson_id' => $raw->id,
    //             'name' => $raw->name,
    //             'count' => $repeat_count ? $repeat_count->count : null,
    //             'allowed' => $repetitive_records->contains('lesson_id',$raw->id),
    //             'claim_3' => $repeat_count ? ($repeat_count->claimed == 0 && ($repeat_count->count >= 3 && $repeat_count->count < 5 )) && true : false,
    //             'claim_5' => $repeat_count ? ((($repeat_count->claimed == 0 || $repeat_count->claimed == 3  ) && $repeat_count->count == 5)  && true) : false,
    //             'point' => $point,

    //         ];


    //     });


    //     return response()->json([
    //         "repetitive_lessons_bonus" => $records,
    //     ], 200);

    // }


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
                'allowed' => optional($repeat)->count >= 3,
                'claim' => (optional($repeat)->count >= 3 && optional($repeat)->count <= 5) && optional($repeat)->claimed_3 == 0 && true,
                'count' => optional($repeat)->count,
                'point' => (optional($repeat)->count >= 3 && optional($repeat)->count <= 5) && optional($repeat)->claimed_3 == 0 ? 1 : null,
            ];
        });

        /////////////////

        $mappingForFiveTimes = $rawLessons->map(function ($raw) use($repetitiveRecords){
            $repeat = $repetitiveRecords->where('lesson_id',$raw->id)->first();
            return [
                'lesson_id' => $raw->id,
                'name' => "Lesson ". $raw->name,
                'allowed' => optional($repeat)->count >= 3,
                'claim' => optional($repeat)->count == 5 && optional($repeat)->claimed_5 == 0 && true,
                'count' => optional($repeat)->count,
                'point' =>  optional($repeat)->count == 5 && optional($repeat)->claimed_5 == 0 ? 3 : null ,
            ];
        });


        return response()->json([
            "repetitive_3" => $mappingForThreeTimes,
            "repetitive_5" => $mappingForFiveTimes,
        ], 200);

    }




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



    private function point_lvl($student,$point){

        $oldPoint = $student->point;
        $newPoint = $oldPoint + (int)$point;
        $newFixPoint = $student->fixed_point + (int)$point;

        $lvl = $newFixPoint / 10 ;

        if ($lvl >= 1 && $lvl <= 50) {
            $board = 'silver';
        }else if
        ($lvl > 50 && $lvl <= 100) {
            $board = 'platinum';
        }
        else if
        ($lvl > 100 && $lvl <= 200) {
            $board = 'gold';
        }
        else if
        ($lvl > 200 && $lvl <= 300) {
            $board = 'diamond';
        }


        $data = [
            'point' => $newPoint,
            'fixed_point' => $newFixPoint,
            'board' => $board
        ];

            if ($newFixPoint >= 0 && $newFixPoint <= 3000) {
                    $level = floor($newFixPoint / 10);
                    $data['level'] = $level;
                    Student::where('id', $student->id)->update($data);
            } else {
                    Student::where('id', $student->id)->update($data);
            }

    }


//////////

}
