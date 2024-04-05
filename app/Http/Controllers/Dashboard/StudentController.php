<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{

    // ===========
    // Students
    // ===========

    public function students()
    {
        $students = Student::get();

        return inertia('Students/Index', [
            'user' => Auth::user(),
            'students' => $students,
        ]);
    }




      public function postEditStudent(Request $request)
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
        if ($request->isAuth == 0) {
            $update["deviceId"] = null;
            $update["isAuth"] = $request->isAuth;
        }

        if ($request->hasFile('profile_picture')) {
            $allowedMimeTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/webp'];
            $mimeType = $request->file('profile_picture')->getMimeType();

            if (in_array($mimeType, $allowedMimeTypes)) {
                $oldProfile = Student::where('id', $request->id)->first();
                $oldProfile = $oldProfile['profile_picture'];

                $oldProfile != null ? Storage::delete('public/', $oldProfile) : "";

                $newProfile = uniqid() . "_" . $request->file('profile_picture')->getClientOriginalName();
                $request->file('profile_picture')->storeAs('public', $newProfile);

                $update['profile_picture'] = $newProfile;
            }
        }

        Student::where('id', $request->id)->update($update);
        return redirect()->route('students');
    }



    public function profilePicRemove($id)
    {
        $oldProfile = Student::where('id', $id)->first();
        $oldProfile = $oldProfile['profile_picture'];

        $oldProfile != null ? Storage::delete('public/', $oldProfile) : "";

        Student::where('id', $id)->update([
            "profile_picture" => null
        ]);

        return redirect()->route('students');
    }

    public function removeStudent($id)
    {
        Student::where('id', $id)->delete();
        return redirect()->route('students');
    }




}
