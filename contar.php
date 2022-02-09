<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[]=array("Nombre"=>"Smart Tv 55\"4KUHD",
            "Marca"=>"Hitachi",
            "Modelo"=>"554KS20",
            "Stock"=>60,
            "Precio"=>5800
);
 
$aProductos[]=array("Nombre"=>"Samsung galaxy A30 Blanco",
"Marca"=>"Samsung",
"Modelo"=>"Galaxy A30",
"Stock"=>0,
"Precio"=>2200
);

$aProductos[]=array("Nombre"=>"Cpu Gamer",
"Marca"=>"Amd",
"Modelo"=>"Ryzen 5",
"Stock"=>0,
"Precio"=>70000
);


$aProductos[]=array("Nombre"=>"Aire acondicionado Split inverter frio/calor Surrey 2900F",
"Marca"=>"Surrey",
"Modelo"=>"553AIQ1201E",
"Stock"=>5,
"Precio"=>45000
);
 

$aPacientes = array();
$aPacientes[] = array( //defino el array con corchetes posicion 0 []
"Dni" =>"33.765.012", 
"Nombre y Apellido" => "Ana Acuña",
"Edad" => "45",
"Peso" => "81.5"
);
$aPacientes[] = array(
"Dni" => "23.684.385",
"Nombre y Apellido" => "Gonzalo Bustamante",
"Edad" => "66",
"Peso" => "79"
);
$aPacientes[] = array(
"Dni" => "23.684.385",
"Nombre y Apellido" => "Juan Arraola",
"Edad" => "28",
"Peso" => "79"
);
$aPacientes[] = array(
"Dni" => "23.684.385",
"Nombre y Apellido" => "Beatriz Ocampo",
"Edad" => "50",
"Peso" => "79"
);
$aPacientes[] = array(
    "Dni" => "23.684.385",
    "Nombre y Apellido" => "Jose Acosta",
    "Edad" => "40",
    "Peso" => "77"
    );
$aPacientes[] = array(
    "Dni" => "26.142.686",
    "Nombre y Apellido" => "Abel Benitez",
    "Edad" => "44",
    "Peso" => "77"
    );
$aPacientes[] = array(
    "Dni" => "26.142.686",
    "Nombre y Apellido" => "Juan Perez",
    "Edad" => "48",
    "Peso" => "77"
    );  

$aNotas = array();
$aNotas = array(9, 8 , 9.50, 4, 7 ,8 ,10);

    
function contar($array){
    $contador = 0;
foreach ($array as $pos){
    $contador++;
}
return $contador;
} 



 
echo "Las cantidad de productos es :" . contar($aProductos) . "<br>";
echo "Las cantidad de notas es :" . contar($aNotas) . "<br>";
echo "Las cantidad de pacientes es :" . contar($aPacientes) . "<br>";


