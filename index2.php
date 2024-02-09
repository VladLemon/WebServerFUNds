<!DOCTYPE html>
<html>
<head>
    <title>Smart Home Monitoring System</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: white;
        }
        
        .button {
            padding: 10px 20px;
            margin: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        
        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Smart Home Monitoring System</h1>
        <button class="button">Light</button>
        <button class="button">Door Lock/Alarm</button>
        <button class="button">Temperature</button>
        <button class="button">About</button>
    </div>
</body>
</html>
