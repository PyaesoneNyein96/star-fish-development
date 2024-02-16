<?php

namespace App\Http\Controllers\API\Assessment;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\AssessmentAnsNQues;
use App\Models\AssessmentCategory;
use App\Models\AssessmentFinishData;
use App\Models\Student;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    // get all games from assessmemt
    public function getAllAssess(Request $request)
    {
        $lessonId = $request->header('lesson_id');
        $gradeId = $request->header('grade_id');
        $studentId = $request->header('student_id');

        if (!$lessonId || !$gradeId) return response()->json(['message' => 'Lesson ID or Grade ID is required'], 403);

        if ($lessonId >= 1 && $lessonId <= 8) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 1)->get();
            $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                ->where("grade_id", $gradeId)
                ->where("assess_name", 1)->first();
        } elseif ($lessonId >= 9 && $lessonId <= 16) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 2)->get();
            $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                ->where("grade_id", $gradeId)
                ->where("assess_name", 2)->first();
        } elseif ($lessonId >= 17 && $lessonId <= 24) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 3)->get();
            $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                ->where("grade_id", $gradeId)
                ->where("assess_name", 3)->first();
        } elseif ($lessonId >= 25 && $lessonId <= 32) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 4)->get();
            $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                ->where("grade_id", $gradeId)
                ->where("assess_name", 4)->first();
        } elseif ($lessonId >= 33 && $lessonId <= 40) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 5)->get();
            $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                ->where("grade_id", $gradeId)
                ->where("assess_name", 5)->first();
        }

        foreach ($data as $key => $d) {

            $d['disable'] = 1;
            $data[0]['disable'] = 0;

            if ($checkStatus) {
                $key + 1;
                if ($d->name == $checkStatus->assess_name && $checkStatus["game_" . $key] != 0 && $key < count($data)) $data[$key]['disable'] = 0;
            }
        }
        return response()->json(["assessment" => $data]);
    }


    // enter game
    public function enterGame(Request $request)
    {
        $id = $request->header("id");
        if (!$id) return response()->json(['message' => 'Game ID is required'], 403);

        $assess = Assessment::where("id", $id)->first();
        $game = AssessmentAnsNQues::where("assess_id", $id)->get();

        $roundExist = array_key_exists('round', $game[0]->toArray());

        $data = [
            'assess_id' => $id,
            'assess_name' => $assess->name,
            'category' => $assess->assess_category_id
        ];

        if ($roundExist) {
            $data['rounds'] = $game->groupBy('round')->values();
            if (count($data['rounds'][0]) == 1) $data["rounds"] = $game;
        } else {
            $data['data'] = $game;
        }
        return $data;
    }


    // finish game
    public function endGame(Request $request)
    {
        $studentId = $request->header('student_id');
        $lessonId = $request->header('lesson_id');
        $gradeId = $request->header('grade_id');
        $assessGameId = $request->header('assess_game_id');
        $point = $request->header('point');

        if (!$studentId || !$lessonId || !$gradeId || !$assessGameId || !$point) return response()->json(['message' => 'Some Fields are required. Please check!!'], 403);

        if ($lessonId >= 1 && $lessonId <= 8) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 1)->get();
        } elseif ($lessonId >= 9 && $lessonId <= 16) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 2)->get();
        } elseif ($lessonId >= 17 && $lessonId <= 24) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 3)->get();
        } elseif ($lessonId >= 25 && $lessonId <= 32) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 4)->get();
        } elseif ($lessonId >= 33 && $lessonId <= 40) {
            $data = Assessment::where("grade_id", $gradeId)->where("name", 5)->get();
        }

        foreach ($data as $key => $value) {
            $index = null;
            if ($value['id'] == $assessGameId) {
                $index = $key + 1;
                break;
            }
        }

        $checkStatus = AssessmentFinishData::where("student_id", $studentId)
            ->where("assess_name", $data[0]->name)->where("grade_id", $gradeId)->first();


        if ($checkStatus) {
            $addData = [
                "game_" . $index => (int)$checkStatus["game_" . $index] + 1
            ];
            AssessmentFinishData::where("student_id", $studentId)
                ->where("assess_name", $data[0]->name)->update($addData);
            $recorded = $addData;
        } else {
            $addData = [
                "student_id" => $studentId,
                "grade_id" => $gradeId,
                "assess_name" => $data[0]->name,
                "game_" . $index => 1,
            ];
            $recorded = AssessmentFinishData::create($addData);
        }


        $oldPoint = Student::where('id', $studentId)->first();
        $newPoint = $oldPoint->point + (int)$point;
        $newFixPoint = $oldPoint->fixed_point + (int)$point;

        if ($oldPoint->level >= 1 && $oldPoint->level <= 50) {
            $board = 'silver';
        }

        if ($oldPoint->level >= 51 && $oldPoint->level <= 100) {
            $board = 'platinum';
        }
        if ($oldPoint->level >= 101 && $oldPoint->level <= 200) {
            $board = 'gold';
        }
        if ($oldPoint->level >= 201 && $oldPoint->level <= 300) {
            $board = 'diamond';
        }

        if ($newFixPoint >= 0 && $newFixPoint <= 3000) {
            $level = ceil($newFixPoint / 10);
            Student::where('id', $studentId)->update([
                'point' => $newPoint,
                'fixed_point' => $newFixPoint,
                'level' => $level,
                'board' => $board
            ]);
        } else {
            Student::where('id', $studentId)->update([
                'point' => $newPoint,
                'fixed_point' => $newFixPoint,
                'board' => $board
            ]);
        }


        return response()->json($recorded);
    }
}
