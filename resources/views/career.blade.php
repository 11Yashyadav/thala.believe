<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        @include('layout.header')
        @yield('appContents')
        <h2>Career details</h2>
    </div>
<section id="achievements">
        <!-- Add content about M.S. Dhoni's notable achievements -->
    <div>
    <a href = "/">Home</a>
    @include('layout.footer')
    </div>
    </section>
</body>
</html>