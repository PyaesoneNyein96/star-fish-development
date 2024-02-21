<?php

namespace App\Http\Controllers\API\Assessment;

use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\AssessmentAnsNQues;
use App\Models\AssessmentCategory;
use App\Models\AssessmentFinishData;
use App\Models\Student;
use App\Models\StudentLesson;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    // get all games from assessmemt
    public function getAllAssess(Request $request)
    {

        $token =  $request->header('token');
        $studentId = Student::where("token", $token)->first();

        if (!$token) return response()->json(['message' => 'Token is required.'], 403);
        if (!$studentId) return response()->json(['message' => 'Stduent Not Found.'], 404);
        $lessonId = StudentLesson::where("student_id", $studentId->id)->get();


        $assesLessArray = [8, 16, 24, 32, 40];
        foreach ($lessonId as $lesId) {

            return $lessonId;
            if (in_array($lesId->lesson_id, $assesLessArray)) {
                $gradeId = StudentLesson::where("student_id", $studentId->id)->where("lesson_id", $lesId->lesson_id)->first();
                $data = Assessment::where("grade_id", $gradeId->grade_id)->where("name", $lesId->lesson_id / 8)->get();

                if (!$data->toArray()) return response()->json(['message' => 'Assessment not found.'], 404);
                return response()->json(["assessment" => $data]);
            } else {
                return response()->json(["message" => "didn't complete lessons"], 403);
            }
        }
    }




    // enter game
    public function enterGame(Request $request)
    {
        $id = $request->header("id");

        if (!$id) return response()->json(['message' => 'Game ID or Other fields are required.'], 403);

        $assess = Assessment::where("id", $id)->first();
        $game = AssessmentAnsNQues::where("assess_id", $id)->get();
        $cate = AssessmentCategory::where("id", $assess->assess_category_id)->first();

        if (!$assess || !$game->toArray()) return response()->json(['message' => 'Assessments not Found'], 404);
        if (!$cate) return response()->json(['message' => 'Category not Found'], 404);

        $roundExist = array_key_exists('round', $game[0]->toArray());

        $data = [
            'assess_id' => $id,
            'assess_name' => $assess->name,
            'category' => $cate->name
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
        $token =  $request->header('token');
        $assessGameId = $request->header('assess_game_id');
        $point = $request->header('point');
        $studentId = Student::where("token", $token)->first();

        if (!$studentId) return response()->json(['message' => 'Stduent Not Found.'], 404);
        if (!$token  ||  !$assessGameId) return response()->json(['message' => 'Token or Assessment id is required.'], 403);

        $studentId = $studentId->id;
        $lessonId = StudentLesson::where("student_id", $studentId)->get();

        $assesLessArray = [8, 16, 24, 32, 40];
        foreach ($lessonId as $lesId) {
            if (in_array($lesId->lesson_id, $assesLessArray)) {

                $assessment = Assessment::where("id", $assessGameId)->first();
                $data = Assessment::where("grade_id", $assessment->grade_id)->where("name", $assessment->name)->get();

                if (!$data->toArray()) return response()->json(['message' => 'Grade Id and Lesson Id not match.'], 403);

                foreach ($data as $key => $value) {
                    $index = null;
                    if ($value['id'] == $assessGameId) {
                        $index = $key + 1;
                        break;
                    }
                }

                $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                    ->where("assess_name", $data[0]->name)->where("grade_id", $assessment->grade_id)->first();


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
                        "grade_id" => $assessment->grade_id,
                        "assess_name" => $data[0]->name,
                        "game_" . $index => 1,
                    ];
                    $recorded = AssessmentFinishData::create($addData);
                }

                if ($point != null) {
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

                    AssessmentFinishData::where("student_id", $studentId)
                        ->where("assess_name", $data[0]->name)->update(["finish" => 1]);

                    $recorded["point"] = $newPoint;


                    $assessGradeCheck = Assessment::select("name")->where("grade_id", $assessment->grade_id)->groupby("name")->get();
                    $isfinish = AssessmentFinishData::where("student_id", $studentId)->where("grade_id", $assessment->grade_id)->where("assess_name", count($assessGradeCheck))->first();

                    if ($isfinish["game_" . count($data) - 1] == 1 && $isfinish["game_" . count($data)] == 0) {
                        $certificate = [
                            "grade" => $assessment->grade_id,
                            "total_point" => $point
                        ];
                        $recorded["certification"] = $certificate;
                    };
                }


                return response()->json($recorded);
            }
        }
    }
}
