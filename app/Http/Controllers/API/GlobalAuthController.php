<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\GlobalStudent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GlobalAuthController extends Controller
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
                'age' => $request->age,
                'country' => $request->country,
                'city' => $request->city,
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
    // Validations
    // ===============================


    private function RegisterValidation($request){

         return Validator::make($request->all(), [
            'name' =>'required|string',
            'email' =>'required|email|unique:mysql_2.global_students,email', // important validation
            'password' => 'required|min:6'
        ]);

    }

}
