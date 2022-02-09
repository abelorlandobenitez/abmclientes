<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function calcularneto($bruto){
    return $bruto - ($bruto * 0.17);
}

echo "El sueldo neto es: " . calcularneto(50000);
?>