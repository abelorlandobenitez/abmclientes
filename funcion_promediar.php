<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



function promediar($aNumeros){
    $suma = 0;
    foreach($aNumeros as $numero){

        $suma += $numero;
    }
    return $suma / count($aNumeros);


}


