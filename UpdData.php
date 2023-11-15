<?php
$raw = `./bme280`; 
    $deserialized = json_decode($raw, true);  
    var_dump($deserialized); 
    echo "Temperature =";
    echo $deserialized["temperature"]; 
    echo "<br>";
    echo "Pressure =";
    echo $deserialized["pressure"];
    echo "<br>";
    echo "Altitude ="
    echo $deserialized["altitude"];
?>