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

    public function repetitiveLessonList(Request $request){

        $repeat = StudentLesson::where('student_id',$request->student->id)
        ->whereIn('count', [3,5])
        // ->where('claimed', 3)
        ->get();

        // return $repeat;

        $gradeId = Student::find($request->student->id)->grades->pluck('id');

        if(!$gradeId || $gradeId->count() == 0) return "nope";

        $rawLessons = Lesson::where('grade_id', $gradeId)->get();


        $records = $rawLessons->map(function ($raw) use($repeat) {

            $repeat_count = $repeat->where('lesson_id',$raw->id)->first();

            return [
                'lesson_id' => $raw->id,
                'name' => $raw->name,
                'claimed' => false,
                'completed' => $repeat->contains('lesson_id',$raw->id),
                'repetitive_count' => $repeat_count ? $repeat_count->count : null,
            ];
        });


        return response()->json([
            "repetitiveBonus-lessons" => $records,
        ], 200);

    }





    public function repetitiveClaimGame(Request $request){

            $student = $request->student;
            $point = $request->header('point');
            $game_id = $request->header('game_id');

            $claimUpdate = StudentGame::where('game_id',$game_id)
            ->where('student_id', $student)->first();


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
