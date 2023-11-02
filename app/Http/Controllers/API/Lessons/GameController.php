<?php

namespace App\Http\Controllers\API\Lessons;

use stdClass;
use App\Models\Grade;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class GameController extends Controller
{

    public function grade(Request $request){

        $token = $request->header('token');


        // return Cache::rememberForever($token, function () use($token) {

        //     $grades = Grade::with(['students' => function ($q) use($token){
        //     $q->where('token', $token)->select('name','token','student_grades.status');
        //     }])->select('name','id')->get();


        //     foreach ($grades as $g) {
        //         if($g->students !== null){
        //             foreach ($g->students as $s) {
        //                 $g->student = $s;
        //             }
        //             unset($g->students);
        //         }
        //     };

        //     return $grades;

        //      });


        $grades = Student::with('grades')->where('token', $token)
        // ->select('students.name','age')
        ->get();

        return $grades;



    }


    public function lesson(Request $request){

        $token = $request->header('token');
        $grade = $request->header('grade');

        // $studentLessons = Lesson::with(['students' => function ($q) {
        //      $q->select('name','students.id','token');
        // }])->where('grade_id', $grade)->get();


        $studentLessons = Student::where('token', $token)
        ->with(['lessons' => function ($q) use($grade) {
            $q->where('grade_id',$grade)->select('name','grade_id','lessons.id');
        }])->select('id','name','token')->get();


        // $studentLessons = Lesson::with(['students' => function ($q) use($token) {
        //     $q->where('token', $token)->select();
        // }])
        // ->select('id','name','token')->get();



        return $studentLessons;

        // return response()->json([
        //     'studentLessons' => $studentLessons
        // ], 200);
    }


    public function game(Request $request){
        $games = Grade::with('games')->where('')->get();

        return response()->json([

        ], 200);
    }


}
