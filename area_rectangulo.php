<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function calcularAreaRect($base, $altura){
    return  $base*$altura;
}

echo "El Area es :" . calcularAreaRect(20,10) . "<br>";
echo "El Area es :" . calcularAreaRect(120,10) . "<br>";
?>