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
        $gradeId = $request->header('grade_id');
        $studentId = $request->header('student_id');

        if (!$studentId || !$gradeId) return response()->json(['message' => 'Lesson ID or Grade ID is required.'], 403);
        $lessonId = StudentLesson::where("student_id", $studentId)->get();


        $assesLessArray = [8, 16, 24, 32, 40];
        foreach ($lessonId as $lesId) {


            if (in_array($lesId->lesson_id, $assesLessArray)) {
                $data = Assessment::where("grade_id", $gradeId)->where("name", $lesId->lesson_id / 8)->get();
                $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                    ->where("grade_id", $gradeId)
                    ->where("assess_name", $lesId->lesson_id / 8)->first();

                if (!$data->toArray()) return response()->json(['message' => 'Assessment not found.'], 404);

                foreach ($data as $key => $d) {
                    $d['disable'] = 1;
                    $d['finish'] = 0;

                    $data[0]['disable'] = 0;

                    if ($checkStatus) {
                        if ($d->name == $checkStatus->assess_name && $checkStatus["game_" . $key] != 0) $data[$key - 1]['finish'] = 1;
                        if ($d->name == $checkStatus->assess_name && $checkStatus["game_" . $key] != 0 && $key < count($data)) $data[$key]['disable'] = 0;
                        if ($d->name == $checkStatus->assess_name && $checkStatus["game_" . count($data)] != 0) $data[count($data) - 1]['finish'] = 1;
                    }
                }

                return response()->json(["assessment" => $data]);
            } else {
                return response()->json(["message" => "didn't complete lessons"], 403);
                // if ($lesId->lesson_id >= 1 && $lesId->lesson_id <= 8) {
                //     $data = Assessment::where("grade_id", $gradeId)->where("name", 1)->get();
                //     $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                //         ->where("grade_id", $gradeId)
                //         ->where("assess_name", 1)->first();
                // } elseif ($lesId->lesson_id >= 9 && $lesId->lesson_id <= 16) {
                //     $data = Assessment::where("grade_id", $gradeId)->where("name", 2)->get();
                //     $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                //         ->where("grade_id", $gradeId)
                //         ->where("assess_name", 2)->first();
                // } elseif ($lesId->lesson_id >= 17 && $lesId->lesson_id <= 24) {
                //     $data = Assessment::where("grade_id", $gradeId)->where("name", 3)->get();
                //     $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                //         ->where("grade_id", $gradeId)
                //         ->where("assess_name", 3)->first();
                // } elseif ($lesId->lesson_id >= 25 && $lesId->lesson_id <= 32) {
                //     $data = Assessment::where("grade_id", $gradeId)->where("name", 4)->get();
                //     $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                //         ->where("grade_id", $gradeId)
                //         ->where("assess_name", 4)->first();
                // } elseif ($lesId->lesson_id >= 33 && $lesId->lesson_id <= 40) {
                //     $data = Assessment::where("grade_id", $gradeId)->where("name", 5)->get();
                //     $checkStatus = AssessmentFinishData::where("student_id", $studentId)
                //         ->where("grade_id", $gradeId)
                //         ->where("assess_name", 5)->first();
                // }

                // if (!$data->toArray()) return response()->json(['message' => 'Assessment not match.'], 403);

                // foreach ($data as $key => $d) {
                //     $d['disable'] = 1;
                //     $d['finish'] = 0;
                // }
            }
        }
    }




    // enter game
    public function enterGame(Request $request)
    {
        $id = $request->header("id");
        $disable = $request->header("disable");

        if (!$id || $disable == null) return response()->json(['message' => 'Game ID or Other fields are required.'], 403);
        if ($disable == 1) return response()->json(['message' => 'Can not play yet.'], 403);

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
        $studentId = $request->header('student_id');
        $gradeId = $request->header('grade_id');
        $assessGameId = $request->header('assess_game_id');
        $point = $request->header('point');

        if (!$studentId  || !$gradeId || !$assessGameId) return response()->json(['message' => 'Some Fields are required. Please check!!'], 403);
        $lessonId = StudentLesson::where("student_id", $studentId)->get();

        $assesLessArray = [8, 16, 24, 32, 40];
        foreach ($lessonId as $lesId) {
            if (in_array($lesId->lesson_id, $assesLessArray)) {
                $data = Assessment::where("grade_id", $gradeId)->where("name", $lesId->lesson_id / 8)->get();

                if (!$data->toArray()) return response()->json(['message' => 'Grade Id and Lesson Id not match.'], 403);

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
                    if (count($data) == $index && $checkStatus["game_" . count($data)] == 0) $recorded["certificate"] = "Assessment Completed";
                } else {
                    $addData = [
                        "student_id" => $studentId,
                        "grade_id" => $gradeId,
                        "assess_name" => $data[0]->name,
                        "game_" . $index => 1,
                    ];
                    $recorded = AssessmentFinishData::create($addData);
                }

                if ($point != null) {

                    if ($point < 5) {
                        AssessmentFinishData::where("student_id", $studentId)
                            ->where("assess_name", $data[0]->name)->delete();
                        return response()->json(['message' => 'Lose. Try Again.']);
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

                    AssessmentFinishData::where("student_id", $studentId)
                        ->where("assess_name", $data[0]->name)->update(["finish" => 1]);

                    $recorded["point"] = $newPoint;
                }
                return response()->json($recorded);
            }
        }
    }
}
