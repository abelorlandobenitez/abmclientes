<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//si es un array lo recorro
function print_f($variable) {
    $archivo = fopen("datos.txt", "w+");

    if(is_array($variable)){
    foreach ($variable as $pos) {
            
    fwrite($archivo, $pos. "\n");
        
    }
    } else {
        
    file_put_contents("datos.txt", $variable);
    
  

}
}
$msg = "mensaje para vos abel 44";

print($msg);

?>