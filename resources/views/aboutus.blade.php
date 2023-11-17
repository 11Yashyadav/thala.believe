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
        .button-container1 {
            position: fixed;
            bottom: 30px; /* Adjust the top distance as needed */
            left: 20px; /* Adjust the right distance as needed */
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
        <button class="my-button" onclick="window.location.href='/career'">Next Page</button>
    </div>
    <div class="button-container1">
        <button class="my-button" onclick="window.location.href='/'">Previous Page</button>
    </div>

<section id="achievement">
<div class="image-container">
<p>
<b>Personal Life:</b><br>

    •Dhoni is married to Sakshi Singh Rawat, and they have a daughter named Ziva.<br>
    •He is known for his calm and humble personality both on and off the field.<br>
    •Apart from cricket, Dhoni has shown interest in various ventures, including business and the military. He holds the honorary rank of Lieutenant Colonel in the Territorial Army.<br>

<br><br>Mahendra Singh Dhoni, the former captain of the Indian cricket team:<br><br>
<b>•Full Name:</b> Mahendra Singh Dhoni<br>
<b>•Date of Birth:</b> July 7, 1981<br>
<b>•Place of Birth:</b> Ranchi, Bihar (now in Jharkhand), India<br>
<b>•Nicknames:</b> Captain Cool, Mahi ,Thala<br><br>
</p>

        <img src="https://caughtatpoint.com/wp-content/uploads/2018/07/The-Dhoni-enigma.jpg" width="500" height="350">
    </div>
    <div>
        <b>Playing Style:</b><br><br>

•Dhoni was known for his cool and composed demeanor on the field, earning him the nickname "Captain Cool."<br>
•He was a powerful and innovative batsman, known for his ability to finish matches under pressure.<br>
•Dhoni was also an accomplished wicketkeeper, known for his quick reflexes and agile glove work.<br><br><br>

    </div>
    <div>
    @include('layout.footer')
    </div>
    </section>
</body>
</html>