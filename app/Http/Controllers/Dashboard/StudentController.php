<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    // delete student
    public function removeStudent($id)
    {
        Student::where('id', $id)->delete();
    }

    // logout student
    public function logoutStudent($id)
    {
        Student::where('id', $id)->update(["isAuth" => 0, "deviceId" => null]);
    }
}
