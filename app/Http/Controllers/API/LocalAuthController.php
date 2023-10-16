<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\User;
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
                'status' => 'success.',
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

        $isAuth = LocalStudent::where('phone',$request->phone)
        ->where('token',$request->token)
        ->first();

        // return $isAuth->isAdmin;

        if(!$isAuth){
               return response()->json([
                'status' => "User Not Match with our database records."
                ], 401);
        }else if($isAuth->isAuth == 1){

            return response()->json([
                'status' => "Your phone number is already registered !"
                ], 401);
        }

        $OTP = Otp::digits(6)->expiry(3)->create($isAuth->phone);

        // $isAuth->update(['otp' => $OTP ]);

        // send SMS process / Functions
        return $this->sendOTP($isAuth->phone, $OTP);

    }

    // =========================
    // Check OTP
    // =========================

    public function Submit_otp(Request $request){

        $user = LocalStudent::where('phone',$request->phone)->first();

        $isAuth = Otp::digits(6)->expiry(3)->check($request->otp, $request->phone);

        if($isAuth){
            $user->update(['isAuth' => 1]);

            return response()->json([
              'status' => "Register Success.",
            ], 200);

        }else{

            $user->delete();

            return response()->json([
            'status' => "Wrong OTP code or User Not Match our DB records,Please re-register again."
            ], 401);

        }



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
            'password' => 'required|min:6'
        ],[
            'phone.unique' => "An account is already registered with your phone",
        ]);

    }



}
