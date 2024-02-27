<?php

namespace App\Http\Controllers\API\Auth;

use Carbon\Carbon;
use App\Models\Country;
use App\Models\Student;
use Tzsk\Otp\Facades\Otp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Traits\mailTraits;



class GlobalAuthController extends Controller
{

    use mailTraits;

    //=====================
    // Register
    //=====================

    public function Register(Request $request){

        $tryAgain = Student::where('deviceId', $request->deviceId)->where('status',0)->where('name',$request->name)->where('email', $request->email)->exists();

        if($tryAgain  == 1 && $request->token !== null ){
           return $this->Request_otp($request);
        }

        $validation =  $this->RegisterValidation($request);
        if($validation->fails()){
            return response()->json([
                "message" => $validation->errors(),
            ], 401);

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

            logger('ready to send');
            // OTP Send from Traits
            $this->sendOtp($request->email, $OTP, $request->name);

            return response()->json([
                'message' => 'success.',
                'token'  => $token,
                'local' => 0
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
                'auth' => 1
            ], 401);
        }

        $OTP = Otp::digits(6)->expiry(5)->make($student->email);

        // Otp send process with Email
        $this->sendOtp($request->email, $OTP);

        return response()->json([
            'message'=> 'Otp request success',
        ], 200);

    } // end of Request OTP


    // =======================
    // OTP Submit
    // =======================

    public function Submit_otp(Request $request){

        $student = Student::where('email', $request->email)
        ->where('token',$request->token)->first();

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
                'local' => 0,
                'auth' => 1,
                'data' => $student,
              ], 200);

        }

        return response()->json([
            'message' => "Wrong OTP code or User Not Match our DB records,Please try again."
            ], 401);

    } // end of submit OTP




    // ===============================
    // Validations
    // ===============================


    private function RegisterValidation($request){

         return Validator::make($request->all(), [
            'name' =>'required|string|max:20',
            'email' =>'required|email|unique:students,email', // important validation
            'phone' => 'nullable',
            'password' => 'required|min:4',
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
