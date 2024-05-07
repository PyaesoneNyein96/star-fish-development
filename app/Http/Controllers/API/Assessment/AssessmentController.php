<?php

namespace App\Http\Controllers\API\Assessment;

use Carbon\Carbon;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Assessment;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Models\StudentLesson;
use App\Models\AssessmentAnsNQues;
use App\Models\AssessmentCategory;
use App\Http\Controllers\Controller;
use App\Models\AssessmentEachRecordFinishData;
use App\Models\AssessmentFinishData;
use Illuminate\Support\Facades\Http;

class AssessmentController extends Controller
{
    // get all games from assessmemt
    public function getAllAssess(Request $request)
    {
        $token =  $request->header('token');
        if (!$token) return response()->json(['message' => 'Token is required.'], 403);

        $studentId = Student::where("token", $token)->first();
        if (!$studentId) return response()->json(['message' => 'Student Not Found.'], 404);

        $lessonId = StudentLesson::where("student_id", $studentId->id)->orderBy('lesson_id', 'desc')->first();
        if (!$lessonId) return response()->json(["message" => "didn't complete any lessons"], 403);

        $gradeId = $lessonId->grade_id;
        $lessonId = $lessonId->lesson_id;

        $isfinishassess = AssessmentFinishData::where("student_id", $studentId->id)->where("grade_id", $gradeId)->where("assess_name", 5)->first();

        $assesLessArray = [
            // Grade 1
            8, 16, 24, 32, 40,

            // Grade 2
            48, 56, 64, 72, 80,

            // Grade 3
            88, 96, 104, 112, 120,

            // Grade 4
            128, 136, 144, 152, 160
        ];

        if (in_array($lessonId, $assesLessArray) && !$isfinishassess) {

            $data = Assessment::select("assessments.*", "assessment_categories.name as assess_category_name")
                ->rightJoin('assessment_categories', 'assessments.assess_category_id', 'assessment_categories.id')
                ->where("assessments.grade_id", $gradeId)
                ->where("assessments.name", $lessonId / 8)->get();

            if (!$data->toArray()) return response()->json(['message' => 'Assessment not found.'], 404);

            $isfinish = AssessmentEachRecordFinishData::where("student_id", $studentId->id)->where("grade_id", $gradeId)->pluck("assess_id");
            foreach ($data as $dt) $dt["status"] = in_array($dt->id, $isfinish->toArray()) ? 1 : 0;

            return response()->json(["assessment" => $data]);
        } else if ($isfinishassess) {
            return response()->json(["message" => "assessment game completed"], 403);
        }

        return response()->json(["message" => "please finish lessons"], 403);
    }

    // enter game
    public function enterGame(Request $request)
    {
        $id = $request->header("assess_game_id");

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
            'assess_game_name' => $assess->assess_game_name,
            'grade_id' => $assess->grade_id,
            'total_point' => $assess->total_point,
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
        $point = $request->header('point');

        if (!$token) return response()->json(['message' => 'Token is required.'], 403);

        $studentId = Student::where("token", $token)->first();
        if (!$studentId) return response()->json(['message' => 'Stduent Not Found.'], 404);


        $studentId = $studentId->id;
        $lessonId = StudentLesson::where("student_id", $studentId)->get();
        if (!$lessonId[0]) return response()->json(['message' => "didn't complete any lessons"], 403);

        $finishDataCount = AssessmentEachRecordFinishData::where("student_id", $studentId)->get();
        if (count($finishDataCount)) {
            $assessDataCount = Assessment::where('name', $finishDataCount[0]->assess_name)->where("grade_id", $finishDataCount[0]->grade_id)->get();
            if (count($finishDataCount) !== count($assessDataCount)) return response()->json(['message' => "didn't complete assessment lessons"], 403);
        } else {
            return response()->json(['message' => "didn't complete assessment lessons"], 403);
        }

        $assesLessArray = [
            // Grade 1
            8, 16, 24, 32, 40,

            // Grade 2
            48, 56, 64, 72, 80,

            // Grade 3
            88, 96, 104, 112, 120,

            // Grade 4
            128, 136, 144, 152, 160
        ];

        foreach ($lessonId as $lesId) {
            if (in_array($lesId->lesson_id, $assesLessArray)) {

                $assessment = AssessmentEachRecordFinishData::where("student_id", $studentId)->first();
                $data = Assessment::where("grade_id", $assessment->grade_id)->where("name", $assessment->assess_name)->get();

                $isExistAssessFinish = AssessmentFinishData::where("student_id", $studentId)
                    ->where("grade_id", $assessment->grade_id)
                    ->where("assess_name", $data[0]->name)
                    ->where("finish", 1)->first();

                if ($isExistAssessFinish) return response()->json(['message' => 'completed assessment.'], 403);
                if (!$data->toArray()) return response()->json(['message' => 'Grade Id and Lesson Id not match.'], 403);

                // foreach ($data as $key => $value) {
                //     if ($value['id'] == $assessGameId) {
                //         if (count($data) != $key + 1) return response()->json(['message' => "didn't complete assessment lessons"], 403);
                //     }
                // }

                if ($point) {
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


                    // AssessmentFinishData::where("student_id", $studentId)
                    //     ->where("assess_name", $data[0]->name)->update([
                    //         "point"=> ,
                    //         "finish" => 1
                    //     ]);
                    $addData = [
                        "student_id" => $studentId,
                        "grade_id" => $assessment->grade_id,
                        "assess_name" => $data[0]->name,
                        "point" => $point,
                        "finish" => 1
                    ];

                    AssessmentFinishData::create($addData);

                    AssessmentEachRecordFinishData::where("student_id", $studentId)
                        ->where("assess_name", $data[0]->name)
                        ->where("grade_id", $assessment->grade_id)
                        ->delete();

                    $recorded = [
                        "grade" => $assessment->grade_id,
                        "assess_name" => $data[0]->name,
                        "percentage" => $point
                    ];

                    $assessGradeCheck = Assessment::select("name")->where("grade_id", $assessment->grade_id)->groupby("name")->get();
                    $isfinish = AssessmentFinishData::where("student_id", $studentId)->where("grade_id", $assessment->grade_id)->where("assess_name", count($assessGradeCheck))->first();

                    if ($isfinish != null) {
                        $sum_point = 0;
                        $total_point = AssessmentFinishData::where("student_id", $studentId)->where("grade_id", $assessment->grade_id)->get();
                        foreach ($total_point as $tp) $sum_point += (int)$tp->point;

                        $Stu = Student::find($studentId);
                        $domain = app('domain');
                        Http::get($domain . "");
                        $certi = [
                            "student_id" => $Stu->id,
                            "grade_id" => $assessment->grade_id,
                            "total_percentage" => $sum_point,
                            "pdf_path" => ""
                        ];
                        $certificate = Certificate::create($certi);

                        $certificate["name"] = $Stu->name;
                        $certificate["certificate_num"] =  str_pad($certificate->id, 7, '0', STR_PAD_LEFT);
                        $certificate["date"] = Carbon::now()->format('d M Y');

                        $recorded["certificate"] = $certificate;

                        // Del lessons =========================================
                        // StudentLesson::where('student_id', $Stu->id)
                        //     ->whereIn('lesson_id', Lesson::where('grade_id',$assessment->grade_id)->pluck('id'))
                        //     ->where('grade_id', $assessment->grade_id)
                        //     ->delete();


                    };
                } else  return response()->json(['message' => 'Point field is required.'], 403);

                return response()->json($recorded);
            }
        }
        return response()->json(['message' => "please finish lessons"], 403);
    }

    // record each game
    public function recordEachGame(Request $request)
    {
        $token =  $request->header('token');
        $assessGameId = $request->header('assess_game_id');

        if (!$token || !$assessGameId) return response()->json(['message' => 'Token or Point or Assessment id is required.'], 403);

        $studentId = Student::where("token", $token)->first();
        if (!$studentId) return response()->json(['message' => 'Stduent Not Found.'], 404);

        $assess = Assessment::where('id', $assessGameId)->first();
        if (!$assess) return response()->json(['message' => 'Assessment Not Found.'], 404);

        $studentId = $studentId->id;
        $isExistData = AssessmentEachRecordFinishData::where("student_id", $studentId)
            ->where("assess_id", $assessGameId)
            ->where("assess_name", $assess->name)
            ->where("grade_id", $assess->grade_id)
            ->first();

        $completedData = AssessmentFinishData::where("student_id", $studentId)
            ->where("assess_name", $assess->name)
            ->where("grade_id", $assess->grade_id)
            ->where("finish", 1)
            ->first();

        $toValidate = AssessmentEachRecordFinishData::where("student_id", $studentId)->first();

        if ($isExistData || $completedData) return response()->json(['message' => 'completed assessment.'], 403);
        if ($toValidate && ($toValidate->grade_id !== $assess->grade_id || $toValidate->assess_name !== $assess->name)) return response()->json(['message' => "didn't submit assessment."], 403);

        $AddData = [
            "student_id" => $studentId,
            "assess_id" => $assessGameId,
            "assess_name" => $assess->name,
            "grade_id" => $assess->grade_id
        ];

        AssessmentEachRecordFinishData::create($AddData);
        return response()->json(["message" => "assessment data added"]);
    }
}
