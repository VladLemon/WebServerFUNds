<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Home Monitoring System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('https://static.vecteezy.com/system/resources/previews/014/703/703/non_2x/smart-home-system-concept-phone-controls-works-safety-of-smart-devices-in-house-smartphone-app-of-monitoring-setting-of-algorithm-autonomous-works-of-household-appliances-internet-of-things-iot-vector.jpg');
            background-size: cover;
            background-position: center;
        }
        
        nav {
            display: flex;
            justify-content: center;
            /* Adjust as needed */
            align-items: flex-start;
            width: 50%;
            /* Adjust the width of the navigation bar */
            margin: 0 auto;
            /* Center the navigation bar */
            padding-left: 0px;
            /* Adjust left padding as needed */
            padding-bottom: 900px;
            
        }

        nav a {
            position: relative;
            font-size: 1.1em;
            font-weight: 500;
            color: #303030;
            text-decoration: none;
            padding: 6px 20px;
            transition: 0.5s;
            margin: 0 10px;
            /* Adjust the margin between buttons */
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
    </style>
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="/layouts/side-menu/styles.css">
</head>

<body>
    <nav>
        <a href="#">Light<span></span></a>

        <a href="#">Temperature<span></span></a>
        <a href="#">Door <span></span></a>
        <a href="#">About <span></span></a>
    </nav>

</body>

</html>