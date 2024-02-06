<?php
    $raw = `./bme280`; 
    $deserialized = json_decode($raw, true);  
    echo "Temperature = {$deserialized["temperature"]}<br>";
    echo "Pressure = {$deserialized["pressure"]}<br>";
    echo "Altitude = {$deserialized["altitude"]}";
?>