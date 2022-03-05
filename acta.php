<?php
ini_set ( 'mostrar_errores' , 1 );
ini_set ( 'display_startup_errors' , 1 );
error_reporting ( E_ALL );

//definicion de array de alumnos
$Alumnos = array();
$Alumnos[] = array("nombre" => "Juan Perez", "Notas" => array(5,10,3));
$Alumnos[] = array("nombre" => "Ana Valle", "Notas" => array(10,3,4));
$Alumnos[] = array("nombre" => "Gonzalo Roldan", "Notas" => array(7,8,8));




function  promediar ($Numeros){
    $suma = 0;
    $resultado = 0;
    foreach ($Numeros  as  $Numero){
        $suma += $Numero;
    }
    return   $suma / count ($Numeros);
}
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container"></div>
    <div class="row">
        <div class="col-12">
            <h1 class="text-center my-3">Actas</h1>

        </div>
        <div class="row">
            <div class="col-12 ps-4">
                <table class="table border border-hover">
                    <th>ID</th>
                    <th>Alumno</th>
                    <th>Nota 1</th>          
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th>Promedio</th>
                    <?php
                    $pos = 0;
                    $sumpromedios = 0;
                    foreach($Alumnos as $Alumno):

                        $pos++;
                        $promedio = promediar($Alumno["Notas"]);
                        $sumpromedios += $promedio;
                    ?>
                        <tr>

                            <td><?php echo $pos; ?></td>
                            <td><?php echo $Alumno["nombre"]; ?></td>
                            <td><?php echo $Alumno["Notas"][0]; ?></td>
                            <td><?php echo $Alumno["Notas"][1]; ?></td>
                            <td><?php echo $Alumno["Notas"][2]; ?></td>
                            <td><?php echo number_format($promedio, 2 , ",", "."); ?> </td> 
                        </tr>
                        
                    <?php endforeach; ?> 
                </table>

            </div>
            <div class="row">
                <div class="col-12">
                    <h5 class="ps-3">El Promedio de la cursada es: <?php echo number_format($sumpromedios / count($Alumnos), 2 , ",", "."); ?> </h5>

                </div>

            </div>

        </div>


    </div>
    
</body>
</html>