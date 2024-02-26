<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\Country;
use App\Models\Student;
use Tzsk\Otp\Facades\Otp;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Traits\mailTraits;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    use mailTraits;

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


        // $isEmail = Str::contains($request->emailOrPhone, '@');
        $isEmail = preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/", $request->emailOrPhone);


        if($isEmail == 1) {
            $student = Student::where('email',$request->emailOrPhone)->first();
        }else{
            $student = Student::where('phone',$request->emailOrPhone)->first();
        }


        if(!$student){
            return response()->json([
                'message' => "User not found.",
                'auth' => 0
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
                    'auth' => 1,
                    'local' => $student->isLocal,
                    'data' => $student,
                ], 200);

            }else{
                return response()->json([
                    'message' => 'wrong password!',
                    'auth' => 0
                ], 401);
            }

        }

        if($student->isAuth == 1 && $student->deviceId == null) {

            return response()->json([
                'message' => "One Account per device allowed!",
                'auth' => 0
            ], 200);

        }

        return response()->json([
            'message' => "something wrong",
            'auth' => 0
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


    public function userData(Request $request){
        $token = $request->header('token');
        $userData = Student::where('token', $token)->first();

        if(!$userData) return response()->json(["status" => "User Not found !!!"], 404);
        return $userData;
    }



    ///////////////////////// Auth Setting ////////////////////////////


    public function checkUser(Request $request){

        $emailOrPhone = $request->emailOrPhone;
        // return $emailOrPhone;

        $student = Student::where('email',$emailOrPhone)
        ->orWhere('phone',$emailOrPhone)
        ->first();

        if(!$student || $student->isAuth == 1) return response()->json(['message' => "something wrong"], 403);

        $code = Otp::digits(6)->expiry(3)->create($student->phone);

        if($student->isLocal == 1){
            $this->sendConfirmationCodeByPhone($student->phone,$code);
            return  [$student->phone,$code];
        }else{
            $this->sendConfirmationCodeByEmail($student->phone,$code,$student->name);
            return  "email ok";
        }



    }













    ////////////////// Private and reusable functions /////////////////////


      private function sendConfirmationCodeByPhone($number,$code){

      $token = "2fgPBEjl53tg2FYT2XaoTe6t97XVtIwQW-lGnbVWA9duOb7P4zEcnc2Kt0z1Nerp";

        // Prepare data for POST request
        $data = [
            "to"        =>      $number,
            "message"   =>      "StarfishApp: Do Not Share with Anyone. Your Confirmation code is ".$code ,
            "sender"    =>      "StarfishApp"
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





}
