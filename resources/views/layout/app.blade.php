<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captain cool</title>
    <style>
        .image-container {
            display: flex;
            align-items: center;
        }

        .image-container img {
            margin-right: 15px; 
        }
        body {
            font-size: 22px;
        }

        .button-container {
            position: fixed;
            bottom: 30px; /* Adjust the top distance as needed */
            right: 20px; /* Adjust the right distance as needed */
            z-index: 1000; /* Set a high z-index to ensure the button is above other elements */
        }
        .my-button {
            padding: 10px;
            background-color: #b2d3c2; /* Set your desired background color */
            color: #3d3d3d; /* Set your desired text color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
        @include('layout.header')
        @yield('appContents')
    </div>
    <div class="button-container">
        <button class="my-button" onclick="window.location.href='/aboutus'">Next Page</button>
    </div>
<section id="achievement">
<div class="image-container">
        <img src="https://garhwalpost.in/wp-content/uploads/2020/08/MS-Dhoni-copy.jpg" width="500" height="350">

        <p>Born on July 7, 1981, in Ranchi, India, Mahendra Singh Dhoni, or M.S. Dhoni, is a cricketing legend celebrated for his leadership and skill. His journey from a small-town enthusiast to India's captain is inspiring.

Dhoni's cricketing prowess emerged when he led India to victory in the 2007 ICC World T20. Appointed captain in 2007, he achieved unparalleled success, notably winning the 2011 ICC Cricket World Cup and the 2013 ICC Champions Trophy.<br>

Known as "Captain Cool," Dhoni's calm demeanor, strategic brilliance, and innovative captaincy left an indelible mark. His lightning-quick wicketkeeping and aggressive batting, including the iconic "helicopter shot," made him a cricketing icon.

Dhoni retired from international cricket, leaving behind a legacy of leadership and cricketing excellence. Beyond the field, his humility, philanthropy work, and service in the Territorial Army showcase a multifaceted personality that transcends cricket.</p>
    </div>
    <div>
    @include('layout.footer')
    </div>
    </section>
</body>
</html>