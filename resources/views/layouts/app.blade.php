<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
</head>
<body>

    <header>

        {{-- <h1 class="main-title">RTP System</h1> --}}
    </header>
    <div class="main">
        @yield('content')
    </div>
</body>
</html>
