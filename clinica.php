<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array(); //defino el array
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


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center py-3" strong>Listado de Pacientes</h1>
        </div>
        <div class="row">
        <div class="col-12">
        <table class="table border table-hover">
            <tr>
                <th strong>Dni</th>
                <th strong>Nombre y Apellido</th>
                <th strong>Edad</th>
                <th strong>Peso</th>
            </tr>  

                    
            <?php foreach ($aPacientes as $aPacientes) { ?>
        
            <tr> 
                <td><?php echo $aPacientes["Dni"]; ?></td>
                <td><?php echo $aPacientes["Nombre y Apellido"]; ?></td>
                <td><?php echo $aPacientes["Edad"]; ?></td>
                <td><?php echo $aPacientes["Peso"]; ?></td>
            </tr>
            
            <?php } ?>
            
            
           

        </table>
        
        
    </div>
    
</body>
</html>