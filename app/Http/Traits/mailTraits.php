<?php

namespace App\Http\Traits;

use App\Mail\OTPMail;
use App\Mail\ConfirmMail;
use Illuminate\Support\Facades\Mail;

trait mailTraits{

    public function sendOtp($mail,$otp,$name){

        Mail::to($mail)->send(new OTPMail($otp, $name));

    }


    public function sendConfirmationCodeByEmail($mail, $code, $name){
        Mail::to($mail)->send(new ConfirmMail($otp, $name));
    }



}
