<?php

namespace App\Http\Traits;

use App\Models\Assessment;
use App\Models\AssessmentFinishData;
use App\Models\Student;
use Illuminate\Http\Request;

trait AssessmentMissionTrait
{
    public function assessmentList(Request $request)
    {
        $stud_id = $request->student->id;
        $assessFinishData = AssessmentFinishData::where("student_id", $stud_id)
            ->where("claim", 0)
            ->get();

        $claimedAssessFinishData = AssessmentFinishData::where("student_id", $stud_id)
            ->where("claim", 1)
            ->get();

        $assess = [];
        $res = Assessment::select("name", "grade_id", "total_assess_ques")->get();
        $id = 1;
        foreach ($res as $index => $data) {

            if ($index < count($res) - 1 && $data->name !== $res[$index + 1]->name) {
                for ($i = 100; $i >= 50; $i -= 10) {
                    $isExistData = $assessFinishData
                        ->where('grade_id', $data->grade_id)
                        ->where('assess_name', $data->name)
                        ->first();

                    $isExistClaimedData = $claimedAssessFinishData
                        ->where('grade_id', $data->grade_id)
                        ->where('assess_name', $data->name)
                        ->first();

                    if ($isExistData) {
                        $percentage = ($isExistData->point / $data->total_assess_ques) * 100;
                        $allowed = floor($percentage / 10) * 10;
                    } else $allowed = 0;

                    if ($isExistClaimedData) {
                        $percentage = ($isExistClaimedData->point / $data->total_assess_ques) * 100;
                        $claimed = floor($percentage / 10) * 10;
                    } else $claimed = 0;

                    switch ($data->grade_id) {
                        case 1:
                            $gradename = 'one';
                            break;
                        case 2:
                            $gradename = 'two';
                            break;
                        case 3:
                            $gradename = 'three';
                            break;
                        case 4:
                            $gradename = 'four';
                            break;
                        case 5:
                            $gradename = 'five';
                            break;
                        case 6:
                            $gradename = 'six';
                            break;
                        case 6:
                            $gradename = 'seven';
                            break;
                        case 5:
                            $gradename = 'eight';
                            break;
                        case 5:
                            $gradename = 'nine';
                            break;
                        case 5:
                            $gradename = 'ten';
                            break;
                        case 5:
                            $gradename = 'eleven';
                            break;
                        case 5:
                            $gradename = 'twelve';
                            break;
                        default:
                            $gradename = 'unknown';
                    }


                    $input = [
                        "id" => $id,
                        "name" => $data->name,
                        "grade_id" => $data->grade_id,
                        "grade" => $gradename,
                        "percentage" => $i . "%",
                        "point" => $i / 10,
                        "allowed" => (int)$allowed === (int)$i ? true : false,
                        "claimed" => (int)$claimed === (int)$i ? true : false,
                    ];
                    array_push($assess, $input);
                    $id++;
                }
            }
        }
        $result = $this->sort($assess);
        // foreach ($assess as $as) {
        //     if()
        // }

        return $result;
    }

    public function assessmentClaim(Request $request)
    {
        $name = $request->header("name");
        $gradeId = $request->header("grade_id");
        $point = $request->header("point");
        $stud_id = $request->student->id;

        if (!$name || !$gradeId || !$point) return response()->json(['message' => 'Name or Point or Grade id is required.'], 403);

        $toUpdate = AssessmentFinishData::where("student_id", $stud_id)
            ->where("assess_name", $name)
            ->where("grade_id", $gradeId)
            ->where("finish", 1)
            ->where("claim", 0)->first();

        if ($toUpdate) {
            $toUpdate->update(["claim" => 1]);

            $oldPoint = Student::where('id', $stud_id)->first();
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
                Student::where('id', $stud_id)->update([
                    'point' => $newPoint,
                    'fixed_point' => $newFixPoint,
                    'level' => $level,
                    'board' => $board
                ]);
            } else {
                Student::where('id', $stud_id)->update([
                    'point' => $newPoint,
                    'fixed_point' => $newFixPoint,
                    'board' => $board
                ]);
            }

            return response()->json(['message' => "claimed"]);
        }

        return response()->json(['message' => "nothing to claim"]);
    }


    private function sort($arr)
    {
        if (count($arr) <= 1) return $arr;
        $mid = floor(count($arr) / 2);
        $left = $this->sort(array_slice($arr, 0, $mid));
        $right = $this->sort(array_slice($arr, $mid));
        return $this->mergeTwoArr($left, $right);
    }

    private function mergeTwoArr($left, $right)
    {
        $result = [];
        while (!empty($left) && !empty($right)) {
            // if ($left[0]["claimed"] === true && $left[0]["allowed"] === false) {
            //     array_push($result, array_shift($left));
            // } elseif ($left[0]["claimed"] === false && $left[0]["allowed"] === true) {
            //     array_push($result, array_shift($left));
            // } elseif ($right[0]["claimed"] === true && $left[0]["allowed"] === false) {
            //     array_push($result, array_shift($right));
            // } elseif ($right[0]["claimed"] === false && $left[0]["allowed"] === true) {
            //     array_push($result, array_shift($right));
            // } elseif ($left[0]["claimed"] <= $right[0]["claimed"]) {
            //     array_push($result, array_shift($left));
            // } else {
            //     array_push($result, array_shift($right));
            // }

            if ($left[0]['claimed'] === true) {
                array_push($result, array_shift($left));
            } elseif ($right[0]['claimed'] === true) {
                array_push($result, array_shift($right));
            } elseif ($left[0]['allowed'] === true) {
                array_push($result, array_shift($left));
            } elseif ($right[0]['allowed'] === true) {
                array_push($result, array_shift($right));
            } elseif ($left[0]["claimed"] <= $right[0]["claimed"]) {
                array_push($result, array_shift($left));
            } else {
                array_push($result, array_shift($right));
            }
        }
        return array_merge($result, $left, $right);
    }
}
