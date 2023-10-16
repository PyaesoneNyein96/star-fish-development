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



        $validation = $this->RegisterValidation($request);

        if($validation->fails()){
            return $validation->errors();
        }

        GlobalStudent::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user = GlobalStudent::where('email',$request->email)->first();
        $token = $user->createToken(Carbon::now())->plainTextToken;

        GlobalStudent::where('email', $request->email)
        ->update([
            'token' => $request->token,
            'created_at' => Carbon::now('')
        ]);


        return $request;

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
