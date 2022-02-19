<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$empleados = array();
$empleados [] = array (
"Dni" =>"33300123",
"Nombre" =>"David Garcia",
"Sueldo" =>"85000.30"
);
$empleados [] = array (
"Dni" =>"40874456",
"Nombre" =>"Ana del Valle",
"Sueldo" =>"900.00"
);
$empleados [] = array (
"Dni" =>"67567565",
"Nombre" =>"Andres Perez",
"Sueldo" =>"1000.00"
);
$empleados [] = array (
"Dni" =>"75744545",
"Nombre" =>"Victoria Luz",
"Sueldo" =>"700.00"
);
function calcularneto($sueldo) { 
    return $sueldo -($sueldo * 0.17);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center py-3" strong>Listado de empleados</h1>

        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <tr>
                        <th>Dni</th>
                        <th>Nombre</th>
                        <th>Sueldo</th>
                    </tr>
                     
                    <?php foreach ($empleados as $empleado) { ?>
                        
                    
                    <tr>
                        <td><?php echo $empleado["Dni"] ?> </td>
                        <td><?php echo $empleado["Nombre"] ?> </td>
                        <td><?php echo $empleado["Sueldo"] ?> </td>  
                        
                                                                                
                    </tr>
                                        
                    <?php   } ?>
                    
                                           
                    <?php  echo  "El sueldo neto es :  $" . calcularneto(50000); ?>
                    
                                        
                   
                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>