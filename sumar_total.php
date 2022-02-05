<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body>
</head>
<style>
    .btn{
        border: 1px solid;
        background-color: #00aae4 !important;
        color: white !important;
        margin: 7px;
       
    }
</style>
<?php
$aProductos=array();
            
$aProductos[]=array("Nombre"=>"Smart Tv 55\"4KUHD",
            "Marca"=>"Hitachi",
            "Modelo"=>"554KS20",
            "Stock"=>" Hay Stock",
            "Precio"=>58000
);
 
$aProductos[]=array("Nombre"=>"Samsung galaxy A30 Blanco",
"Marca"=>"Samsung",
"Modelo"=>"Galaxy A30",
"Stock"=>"No hay Stock",
"Precio"=>22000
);

$aProductos[]=array("Nombre"=>"Aire acondicionado Split inverter frio/calor Surrey 2900F",
"Marca"=>"Surrey",
"Modelo"=>"553AIQ1201E",
"Stock"=>"Hay Stock",
"Precio"=>45000
);

$aProductos[]=array("Nombre"=>"Impresora Hp Laser",
"Marca"=>"HP",
"Modelo"=>"P1102w",
"Stock"=>"Hay Stock",
"Precio"=>20000
);



?>

<main class=container>
    <div class="row">
        <div class="col-12">
            <table class="table border table-hover">
                <div class="py-2 "></div>
                <h1 class="text-center" strong>Listado de Productos</h1>
            <div class="row">
                <div class="col-12">
                    <tr>
                        <th strong>Nombre</th>
                        <th strong>Marca</th>
                        <th strong>Modelo</th>
                        <th strong>Stock</th>
                        <th strong>Precio</th>
                        <th strong>Acción</th>
                        
                    </tr>
                    
                    <tr>
                        <td><?php echo $aProductos[0]["Nombre"] ?></td>
                        <td><?php echo $aProductos[0]["Marca"] ?></td>
                        <td><?php echo $aProductos[0]["Modelo"] ?></td>
                        <td><?php echo $aProductos[0]["Stock"] ?></td>
                        <td><?php echo $aProductos[0]["Precio"] ?></td>
                        <td class="btn">Comprar</td>
                    </tr>

                    <tr>
                        <td><?php echo $aProductos[1]["Nombre"] ?></td>
                        <td><?php echo $aProductos[1]["Marca"] ?></td>
                        <td><?php echo $aProductos[1]["Modelo"] ?></td>
                        <td><?php echo $aProductos[1]["Stock"] ?></td>
                        <td><?php echo $aProductos[1]["Precio"] ?></td>
                        <td class="btn">Comprar</td>
                    </tr>

                    <tr>
                        <td><?php echo $aProductos[2]["Nombre"] ?></td>
                        <td><?php echo $aProductos[2]["Marca"] ?></td>
                        <td><?php echo $aProductos[2]["Modelo"] ?></td>
                        <td><?php echo $aProductos[2]["Stock"] ?></td>
                        <td><?php echo $aProductos[2]["Precio"] ?></td>
                        <td class="btn">Comprar</td>
                    </tr>

                    <tr>
                        <td><?php echo $aProductos[3]["Nombre"] ?></td>
                        <td><?php echo $aProductos[3]["Marca"] ?></td>
                        <td><?php echo $aProductos[3]["Modelo"] ?></td>
                        <td><?php echo $aProductos[3]["Stock"] ?></td>
                        <td><?php echo $aProductos[3]["Precio"] ?></td>
                        <td class="btn">Comprar</td>        
                    
                </div>

            </div>  

        </table>
        </div>
    </div>
    
    </body>
</html>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$contador=0;
for($i=0 ;$i< count($aProductos); $i++){
    echo "<tr>";
    echo "<td>" . $aProductos[$i]["Nombre"] . "</td>";"<br>";
    echo "<td>" . $aProductos[$i]["Marca"] . "</td>";"<br>";
    echo "<td>" . $aProductos[$i]["Modelo"] . "</td>";"<br>";
    echo "<td>" . $aProductos[$i]["Stock"] . "</td>";"<br>";
    echo "<td> $" . $aProductos[$i]["Precio"] . "</td>";"<br>";
    echo "<td><button class=\"btn btn-primary\">Comprar</button></td>";
    echo"</tr>";
    $contador += $aProductos[$i]["Precio"];
    
}
    
?>
<div class="row">
    <div class="col-12">
        <h3>El Subtotal es: $ <?php echo $contador; ?></h3>

    </div>

</div>



