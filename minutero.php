<?php


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

    echo "La hora es: $hr:$min hs. <br>";
}
?>
