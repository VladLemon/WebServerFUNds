<?php
$raw = `./bme280`; 
    $deserialized = json_decode($raw, true);  
    var_dump($deserialized); 
    echo Temperature = $deserialized["temperature"] 
    echo Pressure = $deserialized["pressure"] 
    echo Altitude = $deserialized["altitude"] 
?>