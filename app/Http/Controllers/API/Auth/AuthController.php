<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\Country;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function logout(Request $request){

        $user = Student::where('deviceId', $request->deviceId)->first();

        if($user && $user->isAuth == 1){
            Student::where('deviceId',$request->deviceId)
            ->update([
                'isAuth' => 0,
                'deviceId' => null,
                ]);

             return response()->json([
                'message'  => "You've been logged out",
                'auth' => 0
              ], 200);

        } else {
            return response()->json([
                'message'  => "something wrong.",
                'auth' => 1
              ], 401);
        }

    }


    // ==============================
    // Login
    // ==============================


    public function login(Request $request){

        // return $request;

        $student = Student::where('name',$request->name)->first();

        if(!$student){
            return response()->json([
                'message' => "User name is not match our DB records.",
                'auth' => false
            ], 401);
        }

        if($student->isAuth !== 1 && $student->deviceId == null) {

            $pw = Hash::check($request->password, $student->password);

            if($pw == 1){
                $student->update([
                    'isAuth' => 1,
                    'deviceId' => $request->deviceId
                ]);

                return response()->json([
                    'message' => 'login success',
                    'auth' => true,
                    'local' => $student->isLocal,
                ], 200);

            }else{
                return response()->json([
                    'message' => 'wrong password!',
                    'auth' => false
                ], 401);
            }

        }

        if($student->isAuth == 1 && $student->deviceId == null) {

            return response()->json([
                'message' => "One Account per device allowed!",
                'auth' => false
            ], 200);

        }

        return response()->json([
            'message' => "something wrong",
            'auth' => false
        ], 401);

    }

    // =====================
    //  Countries and cities
    // =====================

    public function startUpData(){
            return Country::with('cities')->get();
    }


    // =====================
    // Name Check
    // =====================

    public function nameCheck(Request $request){

        $isAllowed = Student::where('name', $request->name)->exists();

        if($isAllowed){
            return response()->json([
                'message' =>  "name is already taken.",
                 'status' => false
            ], 401);
        }

          return response()->json([
                'status' => true
            ], 200);


    }




}
