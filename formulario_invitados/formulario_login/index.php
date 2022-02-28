<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_POST) { //si el usuario hace clik

    $usuario = $_REQUEST["txtusuario"]); // request respueta devuelve usuario tipeado
    $clave = $_REQUEST["txtclave"];

    //si usuario es distinto de vacio y clave es distinto de vacio sino : muestra mensaje

    if($usuario != "" && $clave != ""){

        header("location: acceso-confirmado.php"); // redirecciona a acceso-confirmado
    } else {
        $mensaje = "Válido para usuarios registrados.";

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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Formulario</h1>

            </div>

        </div>

    <div class="row">
        <div class="col-12">
            <?php if (isset($mensaje)) : ?>
                <div class="alert alert-danger" role="alert">
            <?php echo $mensaje; ?> 
        </div>
        <?php endif ?>
        <form method="POST" action="">
            <div class="my-3">
                <label for="">Usuario: <input type="text" id="txtUsuario" name="txtUsuario"></label>

            </div>
            <div class="my-3">
                <label for="">Clave: <input type="password" id="txtClave" name="txtClave"></label>

            </div>
            <div class="my-3">
                <button class="btn btn-primary" type="submit">ENVIAR</button>
            </div>

        </form>

        </div>

    </div>
    </div>
    
</body>
</html>