<?php

namespace App\Http\Traits;

use App\Mail\OTPMail;
use App\Mail\ConfirmMail;
use Illuminate\Support\Facades\Mail;

trait mailTraits{


    // Register Confirmation Code send by Email
    private function sendOtp($mail,$otp,$name){
        Mail::to($mail)->send(new OTPMail($otp, $name));
    }

    // Password Rest Confirmation Code send by Email
    private function sendConfirmationCodeByEmail($mail, $code, $name){
        Mail::to($mail)->send(new ConfirmMail($code, $name));
    }



}
