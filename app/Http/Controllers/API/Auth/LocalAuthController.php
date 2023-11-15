<?php

namespace App\Http\Controllers\API\Auth;

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

        $tryAgain = Student::where('deviceId', $request->deviceId)->where('status',0)->where('name',$request->name)->where('phone', $request->phone)->exists();

        if($tryAgain  == 1 && $request->token !== null ){
           return $this->Request_otp($request);
        }


        $validation =  $this->RegisterValidation($request);
        $deviceValidation = Student::where('deviceId',$request->deviceId)
        ->where('isAuth',1)->exists();

        if($validation->fails()){
            return response()->json([
                "message" => $validation->errors(),
            ], 401);

        }

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

                $this->sendOTP($user->phone, $OTP);

                return response()->json([
                    'message' => 'success.',
                    'token'  => $token,
                    'local' => 1,
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
                'message' => "User Not Match with our database records.",
                'auth' => 0
                ], 401);
        }

        $OTP = Otp::digits(6)->expiry(3)->create($isAuthUser->phone);

        // Otp sending process here .....
        $this->sendOTP($isAuthUser->phone,$OTP);

        return response()->json([
            'message'=> 'otp request success',
        ], 200);

    }

    // =========================
    // Check OTP
    // =========================

    public function Submit_otp(Request $request){

        $user = Student::where('phone',$request->phone)
        ->where('token',$request->token)->first();

        $isAuth = Otp::digits(6)->expiry(3)->check($request->otp, $request->phone);

        if($isAuth && $user){
            $user->update([
                'isAuth' => 1,
                'status' => 1,
                'created_at' => Carbon::now('Asia/Yangon'),
                'update_at' => Carbon::now('Asia/Yangon'),
            ]);

            return response()->json([
              'message'  => "success",
              'auth' => 1,
              'data' => $user,
              'local' =>1
            ], 200);

        }

        // 401 || 408
        return response()->json([
        'message' => "Wrong OTP code or User Not Match our DB records,Please try again.",

        'auth' => 0,
        ], 401);

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

      $token = "2fgPBEjl53tg2FYT2XaoTe6t97XVtIwQW-lGnbVWA9duOb7P4zEcnc2Kt0z1Nerp";

        // Prepare data for POST request
        $data = [
            "to"        =>      $number,
            "message"   =>      "Little Star: Do Not Share with Anyone. Your Registration OTP is ".$otp ,
            "sender"    =>      "Little Star"
        ];


        $ch = curl_init("https://smspoh.com/api/v2/send");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . $token,
                'Content-Type: application/json'
            ]);

        $result = curl_exec($ch);


    }


    // ==================================
    // Validation
    // ==================================

    private function RegisterValidation($request){

     return  Validator::make($request->all(), [
            'name' =>'required|string|max:20',
            'phone' =>'required|unique:students,phone|max:15',
            'email' =>'nullable',
            'agreeToPolicy' => 'required|numeric|same_one' ,
            'password' => 'required|min:4',
            'age' => 'required|numeric',
            'country_id' => 'required|numeric',
            'city_id' => 'required|numeric',
            'deviceId' => 'required|unique:students,deviceId',
        ],[
            'phone.unique' => "An account is already registered with your phone",
            'agreeToPolicy.same_one' => "You must agree to the policy by setting."
        ]);

    }









}


