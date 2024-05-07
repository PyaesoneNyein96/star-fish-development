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

                    $input = [
                        "name" => $data->name,
                        "grade_id" => $data->grade_id,
                        "percentage" => $i . "%",
                        "point" => $i / 10,
                        "allowed" => (int)$allowed === (int)$i ? 1 : 0,
                        "claimed" => (int)$claimed === (int)$i ? 1 : 0,
                    ];
                    array_push($assess, $input);
                }
            }
        }

        return $assess;
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

        return response()->json(['message' => "already claimed"]);
    }
}
