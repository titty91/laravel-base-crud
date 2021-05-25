<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    <div>
        @include('containers.header')
        @yield('content')
        @include('containers.footer')
    </div>
</body>
</html>