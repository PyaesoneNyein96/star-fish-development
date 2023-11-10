<?php

namespace App\Http\Traits;


use Illuminate\Support\Facades\Mail;

trait globalVarTraits{

    public function sendOtp($mail,$otp){

        Mail::to($mail)->send(new OTPMail($otp));

    }



}
