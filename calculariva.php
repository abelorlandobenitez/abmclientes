<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 0;
$resprecioSiniva = 0;
$resprecioCiva = 0;
$resIvacantidad = 0;

if($_POST){

    $iva = $_REQUEST["txtIva"];
    $precioSiniva = $_REQUEST["txtSiva"];
    $precioCiva = $_REQUEST["txtCiva"];
   
    //si viene el precio sin iva
    if($precioSiniva > 0 && $precioCiva == ""){
        //Precio con Iva = importe * (21/100+1)
        $resprecioCiva = $precioSiniva * ($iva/100+1);
        $resprecioSiniva = $precioSiniva;
        $resIvacantidad = $resprecioCiva - $resprecioSiniva;



    }

    //si viene el precio con iva
    if($precioCiva > 0 && $precioSiniva == ""){

        //precio sin iva =importe / (21/100+1)
        $resprecioSiniva = $precioCiva / ($iva/100+1);
        $resprecioCiva = $precioCiva;
        $resIvacantidad = $resprecioCiva - $resprecioSiniva;
    }
}   
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Iva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container"></div>
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Calculadora de IVA</h1>

        </div>
        <div class="row">
            <div class="col-6 my-4">
            <form action="" method="post">

            <label class="ps-3" for="">IVA
            <select name="txtIva" id="txtIva" class="form-control">
                <option value="21">21</option>
                <option value="10.5">10.5</option>
                <option value="27">27</option>

            </select>
            </label>

            <div class="my-1 ps-3">
                <label for="">Precio sin Iva:</label>
                 <input type="text" name="txtSiva" id="txtSiva" class="form-control">

            </div>

            <div class="my-1 ps-3">
                <label for="">Precio con Iva:</label>
                 <input type="text" name="txtCiva" id="txtCiva" class="form-control">

            </div>

            <div class="my-1 text-center">
                <button class="btn btn-primary">CALCULAR</button>
            </div>

            </div>
            </form>


            
                <div class="col-6 py-5">
                    <table class="table border border-hover">
                        <tr>
                            <th>IVA:</th>
                            <td>$<?php echo $iva; ?></td>
                        </tr>

                        <tr>
                            <th>Precio sin IVA:</th>
                            <td>$<?php echo $resprecioSiniva ?></td>
                        </tr>

                        <tr>
                            <th>Precio con IVA:</th>
                            <td>$<?php echo $resprecioCiva ?></td>
                        </tr>

                        <tr>
                            <th>IVA Cantidad:</th>
                            <td>$<?php echo $resIvacantidad ?></td>
                        </tr>

                    </table>
                </div>
            </div>
        
        </div>

    </div>
</body>
</html>