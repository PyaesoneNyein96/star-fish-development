<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // get all
    public function getDashboard()
    {
        $students = Student::get();
        $rewards = Reward::get();
        $rewards_name = Reward::select('name')->orderBy('name')->distinct()->get();


        return inertia('Dashboard', [
            'user' => Auth::user(),
            'rewards_name' => $rewards_name,
            'rewards' => $rewards,
            'students' => $students,
        ]);
    }
}
