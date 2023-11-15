<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <link rel="stylesheet" href="{{ asset('mdbFree/css/bootstrap.min.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <style>
        .font {
            font-family: 'Rubik', sans-serif;
        }
    </style>
    <title>
        OTP
        {{-- @yield('title') --}}
    </title>

</head>

<body>
    <div>
        <div>
            {{-- @yield('mailContent') --}}

            <div style=" width:580px; margin:auto">

                <div>
                    <img src="https://onlinelearning.starfishedumm.com/img/starfish_logo.png" style=" width: 250px">
                </div>
                <hr style=" border:1px solid rgb(235, 231, 231)">
                <div style="margin: 40px auto 40px">
                    <p class="font">Hi User,</p>
                    <p class=" font" style=" margin-bottom: 35px">Your Register OTP code is :</p>
                    <code
                        style=" letter-spacing: 2px; background-color: rgb(233, 233, 233); border:1px solid rgb(255, 153, 0); padding: 15px 20px ; font-size: 35px; font-weight: bold;  border-radius:8px">
                        {{ $otp }}
                    </code>
                    <p class="font" style=" margin-top: 35px">Enter this verification code to continue your
                        account. This code will expire in
                        3
                        minutes.</p>
                </div>
                <hr style=" border:1px solid rgb(235, 231, 231)">
                <div style="margin-top: 30px; text-align: center">
                    <small class=" font">This message was sent to you by</small><br>
                    <span class="font" style=" color:orangered; font-weight:bold">StarFish
                    </span>
                </div>


            </div>
        </div>
    </div>

    {{-- <script src="{{ asset('mdbFree/js/bootstrap.bundle.min.js') }}"></script> --}}

</body>

</html>
