<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if(!isset($_SESSION["array"])){ //guarda datos en memoria session_start()
   $_SESSION["array"] = array();
}

if($_POST){
    $_SESSION["array"][] = array( //[] array vacio
        
    "nombre" => $_REQUEST["txtNombre"],
    "dni" => $_REQUEST["txtDni"],
    "telefono" => $_REQUEST["txtTelefono"],
    "edad" => $_REQUEST["txtEdad"]
    );
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container"></div>
    <div class="row">
        <div>
            <h1 class="text-center my-3">Tabla de Clientes</h1>
        </div>
        <div class="row">
            <div class="col-6">
               <form action="" method="post">
                   <div class="ps-3">
                    <label for="txtNombre"><strong>Nombre:</strong></label>
                    <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                    </div>

                    <div class="ps-3">
                    <label for="txtDni"><strong>Dni:</strong></label>
                    <input type="text" name="txtDni" id="txtDni" class="form-control">
                    </div>

                    <div class="ps-3">
                    <label for="txtTelefono"><strong>Telefono:</strong></label>
                    <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                    </div>

                    <div class="ps-3">
                    <label for="txtEdad"><strong>Edad:</strong></label>
                    <input type="text" name="txtEdad" id="txtEdad" class="form-control">
                    </div>

                    <div class="my-3 text-center">
                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                    </div>

               </form>

            </div>
            

            <div class="col-6 my-4">
                <table class="table border border-hover">
                    <tr>
                        <th>Nombre:</th>
                        <th>Dni:</th>
                        <th>Telefono:</th>
                        <th>Edad:</th>
                        
                    </tr>

                    <?php foreach($_SESSION["array"] as $cliente): ?>
                        <tr>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["dni"]; ?></td>
                            <td><?php echo $cliente["telefono"]; ?></td>
                            <td><?php echo $cliente["edad"];?></td>


                        </tr>
                    <?php endforeach; ?>    


                      
                    
                    

                </table>

            </div>

        </div>

    </div>
    
</body>
</html>