<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    // get all students
    public function getAllStudents()
    {
        $students = Student::get();

        return inertia('Dashboard', [
            'user' => Auth::user(),
            'students' => $students,
        ]);
    }
}
