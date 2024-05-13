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
use App\Jobs\MakeCertificate;
use App\Models\AssessmentEachRecordFinishData;
use App\Models\AssessmentFinishData;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\PdfToImage\Pdf as Png;
use Illuminate\Support\Facades\Storage;

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
            'assess_id' => (int)$id,
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

    // record each game
    public function recordEachGame(Request $request)
    {
        $token =  $request->header('token');
        $assessGameId = $request->header('assess_game_id');

        if (!$token || !$assessGameId) return response()->json(['message' => 'Token or Point or Assessment id is required.'], 403);

        $studentId = Student::where("token", $token)->first();
        if (!$studentId) return response()->json(['message' => 'Stduent Not Found.'], 404);

        $assess = Assessment::where(
            'id',
            $assessGameId
        )->first();
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
        if ($toValidate && ($toValidate->grade_id !== $assess->grade_id || $toValidate->assess_name != $assess->name)) return response()->json(['message' => "didn't submit assessment."], 403);

        $AddData = [
            "student_id" => $studentId,
            "assess_id" => $assessGameId,
            "assess_name" => $assess->name,
            "grade_id" => $assess->grade_id
        ];

        AssessmentEachRecordFinishData::create($AddData);
        return response()->json(["message" => "assessment data added"]);
    }

    // finish game
    public function endGame(Request $request)
    {
        $token =  $request->header('token');
        $point = $request->header('point');

        if (!$token) return response()->json(['message' => 'Token is required.'], 403);

        $student = Student::where("token", $token)->first();
        if (!$student) return response()->json(['message' => 'Stduent Not Found.'], 404);

        $studentId = $student->id;
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
                if (!count($data)) return response()->json(['message' => 'Grade Id and Lesson Id not match.'], 403);

                if ($point) {
                    $oldPoint = $student;
                    $newPoint = $oldPoint->point + (int)$point;
                    $newFixPoint = $oldPoint->fixed_point + (int)$point;

                    $level = $newFixPoint / 10;

                    if ($level <= 50) {
                        $board = 'silver';
                    }
                    if ($level >= 51 && $level <= 100) {
                        $board = 'platinum';
                    }
                    if ($level >= 101 && $level <= 200) {
                        $board = 'gold';
                    }
                    if ($level >= 201) {
                        $board = 'diamond';
                    }

                    $newFixPoint = $newFixPoint > 3000 ? 3000 : $newFixPoint;
                    $newPoint = $newPoint > 3000 ? 3000 : $newPoint;

                    if ($newFixPoint >= 0 && $newFixPoint <= 3000) {
                        $level = floor($newFixPoint / 10);
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

                    $assessGrade = Assessment::select("total_assess_ques", "name")
                        ->where("grade_id", $assessment->grade_id)
                        ->groupby("name")
                        ->groupby("total_assess_ques")
                        ->get();

                    $isfinish = AssessmentFinishData::where("student_id", $studentId)->where("grade_id", $assessment->grade_id)->where("assess_name", count($assessGrade))->first();

                    if ($isfinish != null) {
                        $sum_point = 0;
                        $total_grade_point = 0;
                        $total_point = AssessmentFinishData::where("student_id", $studentId)->where("grade_id", $assessment->grade_id)->get();

                        foreach ($total_point as $tp) $sum_point += (int)$tp->point;
                        foreach ($assessGrade as $ag) $total_grade_point += (int)$ag->total_assess_ques;

                        $total_percentage = floor(($sum_point / $total_grade_point) * 100);

                        $certi = [
                            "student_id" => $studentId,
                            "grade_id" => $assessment->grade_id,
                            "total_percentage" => $total_percentage,
                        ];

                        $certificate = Certificate::create($certi);

                        $certificate["name"] = $student->name;
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


    // make new certificate
    public function makeCertificate($data)
    {
        $stu = $data['student_id'];
        $percentage = $data['total_percentage'];
        $id = $data['grade_id'];

        $certificate_path = Certificate::where("student_id", $stu)->where("grade_id", $id)->first();

        if ($certificate_path && !$certificate_path->pdf_path) {
            $Stu = Student::where("id", $stu)->first();

            $certi = [
                "name" => $Stu->name,
                "student_id" => $Stu->id,
                "grade_id" => $id,
                "total_percentage" => $percentage,
                "certificate_num" =>  str_pad($certificate_path->id, 7, '0', STR_PAD_LEFT),
                "date" => Carbon::now()->format('d M Y')
            ];

            $customPaper = array(0, 0, 975, 1364);

            // convert pdf
            $pdf = Pdf::loadView('certificate', $certi)->setPaper($customPaper, 'landscape');
            Storage::put("public/certificate_pdf/$Stu->name.pdf", $pdf->output());
            $certi["pdf_path"] = app('domain') . "/storage/certificate_pdf/$Stu->name.pdf";
            Certificate::where('id', $certificate_path->id)->update(["pdf_path" => $certi["pdf_path"]]);
        }
    }

    public function callCertificate(Request $request)
    {
        $token = $request->header('token');
        $grade = $request->header('grade_id');

        if (!$token) return response()->json(['message' => "token is required"], 403);

        $stu = Student::where('token', $token)->first();
        $certificate = Certificate::where("student_id", $stu->id)
            ->where("grade_id", $grade)
            ->first();

        if (!$certificate) return response()->json(['message' => "You don't have certificate."], 403);

        return response()->json($certificate);
    }
}
