<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Captain cool</title>
</head>
<body>
    <div class="container">
        @include('layout.header')
        @yield('appContents')
        
    </div>
    <div>
        body (contain info and img)
    </div>
    <div>
    @include('layout.footer')
    </div>
</body>
</html>