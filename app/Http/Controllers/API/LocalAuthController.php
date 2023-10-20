<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\Country;
use App\Models\Student;
use Twilio\Rest\Client;
use Tzsk\Otp\Facades\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LocalAuthController extends Controller
{

    // REGISTER

    public function Register(Request $request){

        $validation =  $this->RegisterValidation($request);


        if($validation->fails()){
            return $validation->errors();
        }

        // return $request;

            DB::beginTransaction();

            try {

               Student::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'age' => $request->age,
                'country_id' => $request->country_id,
                'city_id' => $request->city_id,
                'agreeToPolicy' => $request->agreeToPolicy,
                'deviceId' => $request->deviceId,
                'isLocal' => 1,
                'password' => Hash::make($request->password),
                ]);

            $user = Student::where('phone', $request->phone)->first();

            $token = $this->tokenGenerator($user);

            $OTP = Otp::digits(6)->expiry(3)->create($user->phone);

            Student::where('phone', $user->phone)->update([
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);


            DB::commit();

            return response()->json([
                'message' => 'success.',
                'token'  => $token,
                'Otp' => "$OTP.from sms",
            ], 200);


            } catch (\Throwable $th) {
                DB::rollback();
                return $th;
            }

    }

    // ===============================
    // Request OTP Process
    // ===============================

    public function Request_otp(Request $request){

        $isAuthUser = Student::where('phone',$request->phone)
        ->where('token',$request->token)
        ->first();


        if(!$isAuthUser){
               return response()->json([
                'message' => "User Not Match with our database records."
                ], 401);
        }
        // else if($isAuthUser->isAuth == 1) {
        //     return response()->json([
        //         'message' => "Your phone number is already registered !"
        //         ], 401);
        // }

        $OTP = Otp::digits(6)->expiry(3)->create($isAuthUser->phone);

        return response()->json([
            'message'=> 'success',
            'OTP'=>  $OTP,
        ], 200);

    }

    // =========================
    // Check OTP
    // =========================

    public function Submit_otp(Request $request){

        $user = Student::where('phone',$request->phone)
        ->where('token',$request->token)->first();

        $isAuth = Otp::digits(6)->expiry(3)->check($request->otp, $request->phone);



        if($isAuth){
            $user->update([
                'isAuth' => 1,
                'status' => 1,
                'created_at' => Carbon::now('Asia/Yangon'),
            ]);

            return response()->json([
              'message'  => "success",
              'auth' => true
            ], 200);


        }

        // 401 || 408
        return response()->json([
        'message' => "Wrong OTP code or User Not Match our DB records,Please try again."
        ], 401);

    }

    // =============================
    // Logout
    // =============================

    public function logout(Request $request){

        $user = Student::where('deviceId', $request->deviceId)->first();


        if($user && $user->isAuth == 1){
            Student::where('deviceId',$request->deviceId)->where
            ('deviceId', $request->deviceId)->update(['isAuth' => 0]);

             return response()->json([
                'message'  => "You've been logged out",
                'auth' => false
              ], 400);

        }else{
            return response()->json([
                'message'  => "something wrong.",
                'auth' => true
              ], 400);
        }



    }


    // ==============================
    // Login
    // ==============================


    public function login(Request $request){

        $loginStudent = Student::where('name', $request->name)->first();


        if(!$loginStudent){
            return response()->json([
                'message' => "User name or Email Not Match our DB records.",
                'auth' => false
            ], 401);
        }

        $deviceCheck = $loginStudent->where('deviceId',$request->deviceId)->exists();
        $AuthCheck = $loginStudent->where('isAuth',1)->exists();


        if( $AuthCheck !== 1) {  //logged in or not (Any Device)
             $dbPassword = $loginStudent->password;
             $inputPassword = $request->password;

             $passCheck = Hash::check($inputPassword, $dbPassword);

            if($passCheck == 1) {
                $loginStudent->update([
                   'isAuth' => 1
               ]);

            return response()->json([
              'message' => "welcome",
              'auth' => true
            ], 200);

            }else{
                return response()->json([
                'message' => "wrong password",
                'auth' => false
                ], 401);
            }

        }
        else if ($AuthCheck == 1 && $deviceCheck == 0 ){

            return response()->json([
                'message' => "One Account per device Allowed.",
                'auth' => false
            ], 401);

        }

        return response()->json([
            'message' => "Reject",
            'auth' => false
          ], 401);


    }


    // =============================
    // Startup Countries
    // =============================

    public function startUpData(){
            return Country::with('cities')->get();
    }


    // =====================================================================
    // =====================================================================
    // Private Functions
    // =====================================================================
    // =====================================================================

    private function tokenGenerator($request){
        return $request->createToken(Carbon::now())->plainTextToken;
    }


    private function sendOTP($number,$otp){
        return $otp;
    }


    // ==================================
    // Validation
    // ==================================

    private function RegisterValidation($request){

     return  Validator::make($request->all(), [
            'name' =>'required|string|unique:students,name|max:20',
            'phone' =>'required|unique:students,phone|max:15',
            'email' =>'nullable',
            // 'phone' =>['required_without:email','unique:students,phone|max:15'],
            // 'email' =>['required_without:phone','unique:students,email,'],
            'agreeToPolicy' => 'required|numeric|same_one' ,
            'password' => 'required|min:6',
            'age' => 'required|numeric',
            'country_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'deviceId' => 'required|unique:students,deviceId',
        ],[
            'phone.unique' => "An account is already registered with your phone",
            'agreeToPolicy.same_one' => "You must agree to the policy by setting."
        ]);

    }


    // private function LoginValidation($request){

    // return  Validator::make($request->all(), [
    //         'name' =>'required|string',
    //         'phone' =>'required|unique:students,phone',
    //         'password' => 'required|min:6',
    //         'age' => 'required',
    //         'country' => 'required',
    //         'city' => 'required',
    //         'deviceId' => 'required|string',
    //     ],[
    //         'phone.unique' => "An account is already registered with your phone",
    //     ]);

    // }


    // public function userTesting(){
    //     return LocalStudent::with('country','city')->get();
    // }



}
