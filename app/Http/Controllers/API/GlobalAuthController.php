<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Country;
use App\Models\Student;
use Tzsk\Otp\Facades\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GlobalAuthController extends Controller
{

    //=====================
    // Register
    //=====================

    public function Register(Request $request){

        $validation =  $this->RegisterValidation($request);

        if($validation->fails()){
            return $validation->errors();
        }


        DB::beginTransaction();
        try {

            Student::create($this->getData($request));

            $student = Student::where('email', $request->email)->first();

            $token = $this->tokenGenerator($student);

            $OTP = Otp::digits(6)->expiry(5)->create($student->email);

            $timezone = Country::where('id',$request->country_id)->pluck('timezone')->first();

            Student::where('email', $student->email)->update([
                'token' => $token,
                'created_at' => Carbon::now(strval($timezone)),
                'updated_at' => Carbon::now(strval($timezone)),
            ]);

            DB::commit();

            return response()->json([
                'message' => 'success.',
                'token'  => $token,
                'Otp' => "$OTP.from Email",
            ], 200);


            } catch (\Throwable $th) {
                DB::rollback();
                return $th;
            }

    } // end of Register

    // =====================
    // Request OTP
    // =====================


    public function Request_otp(Request $request) {

        $student = Student::where('email',$request->email)->where('token', $request->token)->first();

        if(!$student){
            return response()->json([
                'message' => "User Not Match with our database records.",
                'auth' => false
            ], 401);
        }

        $OTP = Otp::digits(6)->expiry(5)->make($student->email);

        // Otp send process

        return response()->json([
            'message'=> 'Otp request success',
            'OTP'=>  $OTP,
        ], 200);

    } // end of Request OTP


    // =======================
    // OTP Submit
    // =======================

    public function Submit_otp(Request $request){

        $student = Student::where('email', $request->email)->where('token',$request->token)->first();

        $isAuth = Otp::digits(6)->expiry(5)->check($request->otp, $request->email);

        if($isAuth && $student){

            $timezone = Country::where('id',$student->country_id)->pluck('timezone')->first();

            $student->update([
                'isAuth' => 1,
                'status' => 1,
                'created_at' => Carbon::now(strval($timezone)),
                'update_at' => Carbon::now(strval($timezone)),
            ]);

            return response()->json([
                'message'  => "success",
                'auth' => true
              ], 200);

        }

        return response()->json([
            'message' => "Wrong OTP code or User Not Match our DB records,Please try again."
            ], 401);

    } // end of submit OTP


    // ==================
    // Login
    // ==================

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
                    'auth' => true
                ], 200);

            }else{
                return response()->json([
                    'message' => 'wrong password!',
                    'auth' => false
                ], 401);
            }

        }

        if($student->isAuth == 1 && $student->deviceId == null){

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




    // ========================
    // Logout
    // ========================

    public function logout(Request $request){

        $student = Student::where('deviceId',$request->deviceId)->first();

        if($student && $student->isAuth == 1) {
            $student->update(['isAuth'=> 0, 'deviceId' => null]);
            return response()->json([
                'message' => "You've been logged out",
                'isAuth' => false,
            ], 200);
        }

        return response()->json([
            'message' => 'something wrong!',
            'auth' =>false
        ], 401);




    }


    // ===============================
    // Validations
    // ===============================


    private function RegisterValidation($request){

         return Validator::make($request->all(), [
            'name' =>'required|string|unique:students,name|max:20',
            'email' =>'required|email|unique:students,email', // important validation
            'phone' => 'nullable',
            'password' => 'required|min:6',
            'agreeToPolicy' => 'required|numeric|same_one',
            'country_id' =>'required|numeric',
            'city_id' =>'required|numeric',
            'deviceId' => 'required|string|unique:students,deviceId',
            ],[

            'email.unique' => 'An account is already registered with your email.',
            'agreeToPolicy.same_one' => "You must agree to the policy by setting."
            ]);

    }

    private function getData($request){
        return [
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
            'age'=> $request->age,
            'agreeToPolicy' => $request->agreeToPolicy,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'deviceId'=> $request->deviceId,
            'isLocal'=> 0,
        ];
    }

    private function tokenGenerator($request){
        return $request->createToken(Carbon::now())->plainTextToken;
    }






}
