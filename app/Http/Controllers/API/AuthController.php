<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function local_Register(Request $request){


            $validation =  $this->RegisterValidation($request);

            if($validation->fails()){
                return $validation->errors();
            }

            User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'token' => $request->token
            ]);

            return response()->json([
                'status' => 'Register Done',
                'token'  => $request->token
            ], 200);

    }


    public function local_request_otp(Request $request){

        $isAuth = User::where('phone', $request->phone)->where('token',$request->token)->first();
        $OTP = $this->OTP();

        if($isAuth){
            $isAuth->update([
                'otp' => $OTP
            ]);

            return $OTP;
        }

        return response()->json([
            'status' => "User Not Match with our database records."
        ], 200);

    }


    public function local_submit_otp(Request $request){



    }





    // =====================================================================
    // Private Functions
    // =====================================================================

    private function tokenGenerator($request){
        return $request->createToken(Carbon::now())->plainTextToken;
    }

    private function OTP(){
        return rand(1234,9999);
    }

    private function RegisterValidation($request){

     return  Validator::make($request->all(), [
            'name' =>'required|string',
            'phone' =>'required|unique:users,phone',
            'password' => 'required|min:6'
        ],[
            'phone.unique' => "An account is already registered with your phone",
        ]);

    }



}