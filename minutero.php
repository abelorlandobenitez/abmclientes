<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$hr = 23;
$min = 10;

echo "La hora es: $hr:$min hs. <br>";

for($i=0 ; $i < 60;$i++){
    $min++;

    if($min == 60){
        $hr++;
        $min = 0; 

    }

    if($hr == 24){
        $hr = 0;
    }

    echo "La hora es: " . (($hr >=0 && $hr<=9) ? "0$hr":$hr) . ":" . (($min>=0 && $min<=9) ? "0$min":$min) . "<br>";
}
?>
