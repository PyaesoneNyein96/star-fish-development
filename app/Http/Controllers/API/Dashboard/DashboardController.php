<?php

namespace App\Http\Controllers\API\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Reward;
use App\Models\Stud_reward;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        return inertia('Dashboard/Main', [
            'user' => Auth::user(),
            'students' => $students,
            'chat' => $chat,
            'rewards' => $rewards,
            'rewards_name' => $rewards_name,
        ]);
    }







    // ===========
    // Rewards
    // ===========

    public function rewards()
    {
        $rewards = Reward::get();
        $rewards_name = Reward::select('name')->orderBy('name')->distinct()->get();

        return inertia('Rewards/Index', [
            'user' => Auth::user(),
            'rewards_name' => $rewards_name,
            'rewards' => $rewards,
        ]);
    }

    public function addReward(Request $request)
    {
        $name = $request->name["_value"];

        foreach ($request->items["_value"] as $item) {
            Reward::create([
                'name' => $name,
                'item' => $item["itemName"],
                'point' => $item["stars"],
            ]);
        }

        return redirect()->route('reward');
    }

    public function removeReward($name)
    {
        $deleteReward = Reward::where('name', $name)->get();
        foreach ($deleteReward as $dr) {
            if (Stud_reward::where('reward_id', $dr->id)->first()) {
                Stud_reward::where('reward_id', $dr->id)->delete();
            }
        }
        Reward::where('name', $name)->delete();
        return redirect()->route('reward');
    }

    public function renameReward(Request $request)
    {
        $name = $request->name["_value"];
        Reward::where('name', $request->originalName)->update([
            'name' => $name
        ]);
        return redirect()->route('reward');
    }

    public function addPerReward(Request $request)
    {
        Reward::create([
            "name" => $request->name,
            "item" => $request->newItem["_value"]["item"],
            "point" => $request->newItem["_value"]["point"],
        ]);

        return redirect()->route('reward');
    }

    public function editPerReward(Request $request)
    {
        $item = $request->item["_value"];
        $point = $request->point["_value"];
        Reward::where('id', $request->id)->update([
            'item' => $item,
            'point' => $point
        ]);
        return redirect()->route('reward');
    }

    public function deletePerReward(Request $request)
    {
        Reward::where('id', $request->id)->delete();

        if (Stud_reward::where('reward_id', $request->id)->first()) {
            Stud_reward::where('reward_id', $request->id)->delete();
        }
        return redirect()->route('reward');
    }



    // ===========
    // Chat
    // ===========

    public function chat()
    {
        return inertia('Chat/Index', [
            'user' => Auth::user()
        ]);
    }

    public function axiosChat()
    {
        $chat = Chat::select('chats.*', 'students.*')
            ->leftJoin('students', 'chats.student_id', 'students.id')
            ->where('chats.created_at', '>=', now()->subHours(4))
            ->get();

        return response()->json([
            'chat' => $chat
        ]);
    }
}
