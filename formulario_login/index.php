<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST){

    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if($usuario != "" && $clave != ""){
        header("location: acceso-confirmado.php");
    } else {     
        $mensaje = "Válido para usuarios registrados";
    }
    
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container"></div>
    <div class="row">
        <div class="col-12">
            <h1 class="text-center py-3">Formulario</h1>

        </div>
        <div class="row">
            <div class="col-12">
                <?php if(isset ($mensaje)): ?>

                    <div class="alert alert-danger text-center" role="alert">
                        
                        <?php echo $mensaje; ?>


                    </div>

                <?php endif; ?>
            <form method="POST" action="">

                <div class="py-3 ps-2 text-center">
                    <label for="txtUsuario">Usuario:</label>
                    <input type="text" name="txtUsuario" id="txtUsuario">
                </div> 
                
                <div class="py-3 ps-4 text-center">
                    <label for="txtClave">Clave:</label>
                    <input type="password" name="txtClave" id="txtClave">
                </div> 

                <div class="py-3 ps-5 text-center">
                    <button class="btn btn-primary " type="submit">ENVIAR</button>
                </div> 
                
                
            </form>
            </div>

        </div>

    </div>
    
</body>
</html>