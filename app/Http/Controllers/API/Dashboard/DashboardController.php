<?php

namespace App\Http\Controllers\API\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Reward;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $students = Student::orderBy('created_at', 'desc')->take(5)->get();
        $chat = Chat::select('chats.*', 'students.name', 'students.nickName', 'students.profile_picture')
            ->leftJoin('students', 'chats.student_id', 'students.id')
            ->where('chats.created_at', '>=', now()->subHours(4))
            ->get();
        $rewards_name = Reward::select('name')->distinct()->take(4)->get();
        $rewards = Reward::get();

        return inertia('Main', [
            'students' => $students,
            'chat' => $chat,
            'rewards' => $rewards,
            'rewards_name' => $rewards_name,
        ]);
    }


    // ===========
    // Students
    // ===========

    public function students()
    {
        $students = Student::orderBy('created_at', 'desc')->paginate();

        return inertia('Students/Index', [
            'students' => $students,
        ]);
    }


    // ===========
    // Rewards
    // ===========

    public function rewards()
    {
        $rewards = Reward::get();
        $rewards_name = Reward::select('name')->distinct()->get();

        return inertia('Rewards/Index', [
            'rewards_name' => $rewards_name,
            'rewards' => $rewards,
        ]);
    }


    // ===========
    // Chat
    // ===========

    public function chat()
    {
        $chat = Chat::select('chats.*', 'students.name', 'students.nickName', 'students.profile_picture')
            ->leftJoin('students', 'chats.student_id', 'students.id')
            ->where('chats.created_at', '>=', now()->subHours(4))
            ->get();

        return inertia('Chat/Index', [
            'chat' => $chat
        ]);
    }
}
