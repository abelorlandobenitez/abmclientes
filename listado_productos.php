<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
   
    .btn{
        
        background-color:#00aae4 !important;
        color: white !important; 
        margin: 5px;
             

    }   
    
</style>

<?php
$aProductos=array();
            
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

$aProductos[]=array("Nombre"=>"Aire acondicionado Split inverter frio/calor Surrey 2900F",
"Marca"=>"Surrey",
"Modelo"=>"553AIQ1201E",
"Stock"=>5,
"Precio"=>45000
);
?>

<body>
   <main class="container">
   <div class="row">
       <div class="col-12 py-3 text-center">
           <h1 strong>Listado de Productos</h1>
       </div>
       <div class="col-12">
       <table class="table border table-hover">
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
               <td><?php echo $aProductos[0]["Stock"] <=10? "sin stock" : ($aProductos[0]["Stock"] >0 && $aProductos[0]["Stock"] >10? "hay stock": "poco stock"); ?></td>
               <td><?php echo $aProductos[0]["Precio"] ?></td>
               <td class="btn">comprar</td>
            </tr>
           <tr>
               <td><?php echo $aProductos[1]["Nombre"] ?></td>
               <td><?php echo $aProductos[1]["Marca"] ?></td>
               <td><?php echo $aProductos[1]["Modelo"] ?></td>
               <td><?php echo $aProductos[1]["Stock"] <=10? "sin stock" : ($aProductos[1]["Stock"] >0 && $aProductos[1]["Stock"] >10? "hay stock": "poco stock"); ?></td>
               <td><?php echo $aProductos[1]["Precio"] ?></td>
               <td class="btn">comprar</td>
           </tr>
           <tr>
               <td><?php echo $aProductos[2]["Nombre"] ?></td>
               <td><?php echo $aProductos[2]["Marca"] ?></td>
               <td><?php echo $aProductos[2]["Modelo"] ?></td>
               <td><?php echo $aProductos[2]["Stock"] <=10? "sin stock" : ($aProductos[2]["Stock"] >0 && $aProductos[2]["Stock"] >10? "hay stock": "poco stock"); ?></td>
               <td><?php echo $aProductos[2]["Precio"] ?></td>
               <td class="btn">comprar</td>
            </tr>
        </table>   
        </html>
</body>    
        
   
   
        
           
          
    
