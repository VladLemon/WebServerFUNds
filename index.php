<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home Monitoring System</title>
    <link rel="icon" type="image/x-icon" href="SHMS.ico" />
    <style>
        body,html {
            height: 100%;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .bg-image {
            /* The image used */
            background-image: url("https://static.vecteezy.com/system/resources/previews/014/703/703/non_2x/smart-home-system-concept-phone-controls-works-safety-of-smart-devices-in-house-smartphone-app-of-monitoring-setting-of-algorithm-autonomous-works-of-household-appliances-internet-of-things-iot-vector.jpg");

            /* Add the blur effect */
            filter: blur(8px);
            -webkit-filter: blur(8px);

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        nav.center {
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        nav a {
            position: relative;
            font-size: 1.1em;
            font-weight: 500;
            color: #294586;
            text-decoration: none;
            padding: 6px 20px;
            transition: 0.5s;
        }

        nav a span {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            border-bottom: 2px solid #bef;
            border-radius: 15px;
            transform: scale(0) translateY(50px);
            opacity: 0;
            transition: 0.5s;
        }

        nav a:hover {
            color: #8ef;
        }

        nav a:hover span {
            transform: scale(1) translateY(0);
            opacity: 1;
        }

        .hidden {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="/layouts/side-menu/styles.css">

    <script>
        function hideAll() {
            var lightS = document.getElementById("hiddenLight");
            var tempS = document.getElementById("hiddenTemp");
            var doorS = document.getElementById("hiddenDoor");
            var aboutS = document.getElementById("hiddenAbout");

            lightS.style.display = "none";
            tempS.style.display = "none";
            doorS.style.display = "none";
            aboutS.style.display = "none";

        }
        function showLight() {
            hideAll()
            var page = document.getElementById("hiddenLight");
            page.style.display = "block";
        }
        function showTemp() {
            hideAll()
            var page = document.getElementById("hiddenTemp");
            page.style.display = "block";
        }
        function showDoor() {
            hideAll()
            var page = document.getElementById("hiddenDoor");
            page.style.display = "block";
        }
        function showAbout() {
            hideAll()
            var page = document.getElementById("hiddenAbout");
            page.style.display = "block";
        }
    </script>

</head>

<body>
    <div class="bg-image"></div>

    <h4>
        <nav class="center">
            <a onclick="showLight()">Light<span></span></a>
            <a onclick="showTemp()">Temperature<span></span></a>
            <a onclick="showDoor()">Door <span></span></a>
            <a onclick="showAbout()">About <span></span></a>
        </nav>
    </h4>

    <div id="hiddenLight" class="hidden">
        Light module

    </div>

    <div id="hiddenTemp" class="hidden">
        temp module
    </div>

    <div id="hiddenDoor" class="hidden">
        door module
    </div>

    <div id="hiddenAbout" class="hidden">
        about module
    </div>
</body>

</html>