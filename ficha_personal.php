<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$fecha = date("d/m/y");
$NombreyApellido = "Abel Orlando Benitez";
$Edad = 44;
$aPeliculas = array("Terminator", "Kickboxer", "El gran dragon blanco");
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-2">
                <h1 strong class="text-center">Ficha Personal</h1>
                <div class="row">
                    <div class="col-12 py-5">
                        <table class="table border table-hover">
                            <tr>
                                <th>Fecha:</th>
                                <td><?php echo $fecha; ?></td>
                            </tr>
                            <tr>
                                <th>Nombre y Apellido:</th>
                                <td><?php echo $NombreyApellido; ?></td>

                            </tr>
                            <tr>
                                <th>Edad:</th>
                                <td><?php echo $Edad; ?></td>
                            </tr>
                            <tr>

                                <th>Peliculas Favoritas:</th>
                            <td><?php echo $aPeliculas[0]; ?><br>
                                <?php echo $aPeliculas[1]; ?><br>
                                <?php echo $aPeliculas[2]; ?><br>
                            </td>
                            </tr>
                        </table>

                    </div>

                </div>

            </div>

        </div>
    </main>
    
</body>
</html>