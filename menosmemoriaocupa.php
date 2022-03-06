<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//abre archivo solo en modo lectura
$archivo = fopen("padron.txt", "r"); 

// si el archivo es muy grande se usa fgets lee linea por linea.

if($archivo){

    while (($fila = fgets($archivo)) == true){ 

        echo $fila;
    }
}

fclose($archivo);
?>