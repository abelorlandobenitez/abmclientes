<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//si es un array lo recorro
function print_f($variable){
    $archivo = fopen("datos.txt", "a+");

    if(is_array($variable)){
        foreach ($variable as $item) {
            
        fwrite($archivo, $item. "\n");
        }

    }else {
        
        fwrite($archivo , $variable . "\n");
    
  
}
}
$msg = "Este es un mensaje para vos abel";

print($msg);
?>