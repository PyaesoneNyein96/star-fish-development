@extends('Emails.mail-tp')

@section('title', 'SmS OTP')

@section('mailContent')

    <div class="col-12" style="text-center">

        <h1>Star Fish</h1>
        <div class="img-wrap" style="margin: 20px; padding:20px">
            <img src="https://t4.ftcdn.net/jpg/03/12/62/41/360_F_312624115_GBdbzBnBVaRdUt2Ky2EBoKv0OLueYc1f.jpg"
                style="width: 30%; height:30%; object-fit:cover">
        </div>
        <h4>Your Register OTP code for StarFish.</h4>
        <code style="font-weight: bolder; font-size:30px">
            - {{ $otp }}
        </code>

    </div>

@endsection
