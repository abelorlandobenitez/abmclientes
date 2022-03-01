<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function promediar($aNumeros)
{
    $suma = 0;
    foreach($aNumeros as $Numero){

        $suma += $Numero;
    }
    return  $suma / count($aNumeros);


}
    
function maximo($aNumeros)
{
    $maximo = 0;
    foreach ($aNumeros as $Numero) {
        if($Numero > $maximo){
            $maximo = $Numero;
        }
    }
    return $maximo;

}
?>











