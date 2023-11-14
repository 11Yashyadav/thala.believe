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
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.S. Dhoni - Captain Cool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 1em;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 1em;
        }

        section {
            padding: 2em;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#biography">Biography</a>
        <a href="#achievements">Achievements</a>
        <a href="#records">Records</a>
        <a href="#gallery">Gallery</a>
        <a href="#contact">Contact</a>
    </nav>

    <section id="biography">
        <h2>Biography</h2>
        <!-- Add content about M.S. Dhoni's life and career -->
    </section>

    <section id="achievements">
        <h2>Achievements</h2>
        <!-- Add content about M.S. Dhoni's notable achievements -->
    </section>

    <section id="records">
        <h2>Records</h2>
        <!-- Add content about M.S. Dhoni's records in cricket -->
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <!-- Add a photo gallery of M.S. Dhoni -->
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <!-- Add a contact form or contact details -->
    </section>

    <div>
    @include('layout.footer')
    </div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
</body>
</html>