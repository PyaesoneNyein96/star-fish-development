<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\Country;
use Twilio\Rest\Client;
use Tzsk\Otp\Facades\Otp;
use App\Models\LocalStudent;
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

            DB::beginTransaction();
            try {

               LocalStudent::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'age' => $request->age,
                'country_id' => $request->country_id,
                'city_id' => $request->city_id,
                'agreeToPolicy' => $request->agreeToPolicy,
                'deviceId' => $request->deviceId,
                'password' => Hash::make($request->password),
                ]);

            $user = LocalStudent::where('phone', $request->phone)->first();



            $token = $this->tokenGenerator($user);

            LocalStudent::where('phone', $user->phone)->update([
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);


            DB::commit();

            return response()->json([
                'message' => 'success.',
                'token'  => $token
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

        $isAuthUser = LocalStudent::where('phone',$request->phone)
        ->where('token',$request->token)
        ->first();

        if(!$isAuthUser){
               return response()->json([
                'message' => "User Not Match with our database records."
                ], 401);
        }else if($isAuthUser->isAuth == 1) {
            return response()->json([
                'message' => "Your phone number is already registered !"
                ], 401);
        }

        $OTP = Otp::digits(6)->expiry(3)->create($isAuthUser->phone);

        // send SMS process / Functions
        // return $this->sendOTP($isAuthUser->phone, $OTP);

        return response()->json([
            'message'=> 'success',
            'OTP'=>  $OTP,
        ], 200);

    }

    // =========================
    // Check OTP
    // =========================

    public function Submit_otp(Request $request){

        $user = LocalStudent::where('phone',$request->phone)
        ->where('token',$request->token)->first();

        $isAuth = Otp::digits(6)->expiry(3)->check($request->otp, $request->phone);

        if($isAuth && $user){
            $user->update(['isAuth' => 1]);

            return response()->json([
              'message'  => "success",
            ], 200);

        }else if($user->isAuth == 1){
             return response()->json([
            'message' => "already registered."
            ], 200);

        }
        else{
            // $user->delete();

            return response()->json([
            'message' => "Wrong OTP code or User Not Match our DB records,Please try again."
            ], 401);
        }



    }


    // =============================
    // Startup
    // =============================

    public function startUpData(){
        $countryAndCities = Country::with('cities')->get();

        return $countryAndCities;
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
            'name' =>'required|string',
            'phone' =>'required|unique:local_students,phone',
            'agreeToPolicy' => 'required|numeric' ,
            'password' => 'required|min:6',
            'age' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'deviceId' => 'required|string',
        ],[
            'phone.unique' => "An account is already registered with your phone",
        ]);

    }


    // public function userTesting(){
    //     return LocalStudent::with('country','city')->get();
    // }



}
