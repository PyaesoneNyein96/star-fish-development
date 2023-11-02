<?php

namespace App\Http\Controllers\API\Lessons;

use App\Models\Grade;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\StudentGrade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GameController extends Controller
{

    public function grade(Request $request){

        $token = $request->header('token');

        $grades = Grade::with(['students' => function ($q) use($token){
            $q->where('token', $token)->select('name','token','student_grades.status');
        }])->select('name','id')->get();

        // $grades = Student::with('grades')->where('token', $token)->get();

        return $grades;
    }


    public function lesson(Request $request){

        $token = $request->header('token');
        $grade = $request->header('grade');

        $studentLessons = Lesson::with(['students' => function ($q) use($token) {
            $q->where('token', $token)->select();
        }])
        ->select('id','name','token')->get();

        return response()->json([
            'studentLessons' => $studentLessons
        ], 200);
    }


    public function game(Request $request){
        $games = Grade::with('games')->where('')->get();

        return response()->json([

        ], 200);
    }


}
