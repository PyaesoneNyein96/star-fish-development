@extends('Emails.mail-tp')

@section('title', 'OTP')

@section('mailContent')

    <div class="text-start" style="">

        <div style="width:150px" class="">
            <img src="https://t4.ftcdn.net/jpg/03/12/62/41/360_F_312624115_GBdbzBnBVaRdUt2Ky2EBoKv0OLueYc1f.jpg"
                class=" img-thumbnail border-0">
        </div>
        <hr>
        <p class="font">Hi User,</p>
        <p class=" mb-4 font">Your Register OTP code is :</p>
        <code style=" letter-spacing: 2px" class=" fw-bold fs-5 border border-warning  rounded-3 bg-light p-2 px-4">
            {{-- {{ $otp }} --}}
            66666
        </code>
        <p class="mt-3 font">Enter this verification code to continue your account. This code will expire in 3
            minutes.</p>
        <hr>
        <div class=" text-center mt-5">
            <small class=" font">from</small>
            <p class="font fs-6" style=" color:rgb(255, 196, 0)">StarFish</p>
        </div>
    </div>

@endsection
