<?php

namespace App\Http\Controllers\API\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $students = Student::orderBy('created_at', 'desc')->take(5)->get();
        $rewards = Reward::get();

        return inertia('Main', [
            'students' => $students,
            'rewards' => $rewards
        ]);
    }

    public function students()
    {
        $students = Student::orderBy('created_at', 'desc')->paginate();

        return inertia('Students/Students', [
            'students' => $students,
        ]);
    }
}
