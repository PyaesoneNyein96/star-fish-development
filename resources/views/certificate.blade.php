<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        .container {
            position: relative;
        }

        .container img {
            width: 100%;
            height: auto;
            display: block;
        }

        h1 {
            position: absolute;
            top: 42%;
            left: 50%;
            bottom: auto;
            transform: translate(-50%, -50%);
            color: #4c82fc;
            font-size: 6rem;
            text-align: center;
        }

        .grade-id {
            position: absolute;
            top: 46.2%;
            left: 49.8%;
            bottom: auto;
            font-size: 2.2rem;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .percent {
            position: absolute;
            top: 71%;
            left: 49.6%;
            bottom: auto;
            transform: translate(-50%, -50%);
            font-size: 6.8rem;
            color: white;
            text-align: center;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }

        .pass {
            position: absolute;
            top: 79%;
            left: 49.8%;
            bottom: auto;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            color: white;
            text-align: center;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }

        .certi-num {
            position: absolute;
            top: 64%;
            right: 8%;
            bottom: auto;
            font-size: 1.8rem;
            text-align: center;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }

        .date {
            position: absolute;
            top: 64%;
            left: 8%;
            bottom: auto;
            font-size: 1.8rem;
            text-align: center;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="container">
        {{-- image --}}
        <img src="https://star-fish-development.myanmargateway.net/storage/certificate_template/certificate.png"
            alt="">

        {{-- name --}}
        {{-- <h1>{{ $certi['name'] }}</h1> --}}
        <h1>{{ $name }}</h1>

        {{-- grade --}}
        {{-- <p class="grade-id">{{ $certi['grade_id'] }}</p> --}}
        <p class="grade-id">{{ $grade_id }}</p>

        {{-- percantage --}}
        {{-- <p class="percent">{{ $certi['total_percentage'] }}%</p> --}}
        <p class="percent">{{ $total_percentage }}%</p>
        <p class="pass">Pass</p>

        {{-- certi num  --}}
        {{-- <p class="certi-num">Certificate Number : {{ $certi['certificate_num'] }}</p> --}}
        <p class="certi-num">Certificate Number : {{ $certificate_num }}</p>

        {{-- date  --}}
        {{-- <p class="date">Date of Award : {{ $certi['date'] }}</p> --}}
        <p class="date">Date of Award : {{ $date }}</p>
    </div>
    {{-- <?php
    var_dump($certi);
    ?> --}}
</body>

</html>
