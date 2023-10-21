<?php

namespace App\Http\Traits;

use App\Mail\OTPMail;
use Illuminate\Support\Facades\Mail;

trait mailTraits{

    public function sendOtp($mail,$otp){

        Mail::to($mail)->send(new OTPMail($otp));

    }



}
