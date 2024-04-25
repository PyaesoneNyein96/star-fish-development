<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Reward;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    // update students
    public function updateStudent(Request $request)
    {
        $update = [
            "name" => $request->name,
            "nickName" => $request->nickName,
            "email" => $request->email,
            "phone" => $request->phone,
            "age" => $request->age,
            "point" => $request->point,
            "level" => $request->level,
            "board" => $request->board,
            "isSubscriber" => $request->isSubscriber,
        ];

        Student::where('id', $request->id)->update($update);
    }

    // to delete component
    public function toDeleteCompo($id)
    {
        return inertia('Student/Dialogs/Delete', [
            "student" => Student::where('id', $id)->first(),
        ]);
    }

    // delete student
    public function removeStudent(Request $request, $id)
    {
        $password = $request->header("password");
        $check = Hash::check($password, Auth::user()->password);
        if ($check) {
            Student::where('id', $id)->delete();
            $students = Student::get();
            $rewards = Reward::get();
            $rewards_name = Reward::select('name')->orderBy('name')->distinct()->get();

            return inertia('Dashboard', [
                "alert" => "updated",
                'rewards_name' => $rewards_name,
                'rewards' => $rewards,
                'students' => $students,
            ]);
        } else {
            return inertia('Student/Dialogs/Delete', [
                "student" => Student::where('id', $id)->first(),
                "message" => "Wrong Password"
            ]);
        }
    }

    // logout student
    public function logoutStudent($id)
    {
        Student::where('id', $id)->update(["isAuth" => 0, "deviceId" => null]);
    }
}
