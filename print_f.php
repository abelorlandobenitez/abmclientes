<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//si es un array lo recorro
function print_f($variable) {
    $archivo = fopen("datos.txt", "w+"); //escribe o lee un archivo sino crea uno nuevo

    if(is_array($variable)){
    foreach ($variable as $pos) {
            
    fwrite($archivo, $pos. "\n");
        
    }
    } else {
        // guardo el contenido en el archivo datos.txt 
    file_put_contents("datos.txt", $variable);
    
  

}
}
$msg = "mensaje para vos abel 44 vamos";

printf($msg); //print o printf para imprimir mostrar algo en pantalla

?>