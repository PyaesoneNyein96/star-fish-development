<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- <h1>hello</h1> --}}
    <input type="hidden" name="reurl" id="reurl" value="{{ $redirectUrl }}?{{ $params }}">

    <script type="text/javascript">
        const reurl = document.getElementById('reurl').value;
        top.location.href = reurl;
    </script>
</body>

</html>
