<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//si el archivo existe
if(file_exists("archivo.txt")){
    //leer el archivo y guardar el contenido json en una variable
    $strjson = file_get_contents("archivo.txt");

    //convertir el json en un array $aclientes
    $aClientes = json_decode ($strjson , true);
} else {      
    //array vacio de aclientes
    $aClientes = array();
    
}


$id = isset($_GET["id"])? $_GET["id"] : "";

if(isset($_GET["do"]) && $_GET["do"] == "eliminar"){
    //elimino la posicion $aclientes[$id]
    unset($aClientes[$id]);

    //convertir el array en json
    $strjson = json_encode($aClientes);

    //actualizar archivo con el nuevo array $aClientes
    file_put_contents("archivo.txt", $strjson);

} 

    if($_POST) {   
    $dni = trim ($_POST["txtDni"]);
    $nombre = trim ($_POST["txtNombre"]);
    $telefono = trim ($_POST["txtTelefono"]);
    $correo = trim ($_POST["txtCorreo"]);

    //si viene una imagen adjunta la guardo
    if($_FILES["archivo"]["error"] === UPLOAD_ERR_OK){
        $nombreAleatorio = date("Ymdhmsi");
        $archivo_tmp = $_FILES["archivo"]["tmp_name"];
        $nombreArchivo = $_FILES["archivo"]["name"];
        $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
        $imagen = "$nombreAleatorio.$extension";
        move_uploaded_file($archivo_tmp, "imagenes/$imagen");
    } else {
        //sino imagen es vacio
        $imagen = "";
    }
     
    //crear un array con todos los datos
    if($id >=0 ){   
        //actualizo
    $aClientes[$id] = array ("dni" => $dni,
                           "nombre" => $nombre,
                           "telefono" => $telefono,
                           "correo" => $correo,
                           "imagen" => $imagen);
    } else { 
        //nuevo
        $aClientes [] = array ("dni" => $dni,
        "nombre" => $nombre,
        "telefono" => $telefono,
        "correo" => $correo,
        "imagen" => $imagen);  
    }
    //convertir el array a json
    $strjson = json_encode($aClientes);
     
    //guardar el json en un archivo.txt
    file_put_contents("archivo.txt", $strjson);
   
    
    
   
    
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
    <script src="https://kit.fontawesome.com/40e341f8f7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    
    
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Registro de Clientes</h1>

            </div>
           <div class="row">
               <div class="col-6">
                   <form action="" method="POST" enctype="multipart/form-data">
                       <div>
                           <label for="">Dni: *</label>
                           <input type="text" name="txtDni" id="txtDni" class="form-control" required value="<?php echo isset($aClientes[$id]["dni"])? $aClientes[$id]["dni"] : ""; ?>">
                       </div>
                       <div>
                           <label for="">Nombre: *</label>
                           <input type="text" name="txtNombre" id="txtNombre" class="form-control" required value="<?php echo isset($aClientes[$id]["nombre"])? $aClientes[$id]["nombre"] : ""; ?>">
                       </div>
                       <div>
                           <label for="">Telefono:</label>
                           <input type="text" name="txtTelefono" id="txtTelefono" class="form-control" value="<?php echo isset($aClientes[$id]["telefono"])? $aClientes[$id]["telefono"] : ""; ?>"> 
                       </div>
                       <div>
                           <label for="">Correo: *</label>
                           <input type="text" name="txtCorreo" id="txtCorreo" class="form-control" required value="<?php echo isset($aClientes[$id]["correo"])? $aClientes[$id]["correo"] : ""; ?>">
                       </div>
                       <div>
                           <label for="">Archivo adjunto</label> 
                           <input type="file" name="archivo" id="archivo" accept=".jpg, .jpeg, .png"> 
                           <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                       </div>
                       <div>
                           <button type="submit" class="btn btn-primary">Guardar</button>
                           <a href="index.php" class="btn btn-danger">NUEVO</a>

                       </div>
                    </form>
                </div>
                

                <div class="col-6 ">
                    
                    <table class="table border table-hover">
                        <tr>
                            <th>Imagen</th>
                            <th>Dni</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>

                        <?php foreach ($aClientes as $pos => $cliente): ?>                                
                            <tr>
                                <td><img src="imagenes/<?php echo $cliente["imagen"]; ?>" class="img-thumbnail"></td>
                                <td><?php echo $cliente["dni"]; ?></td>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["correo"]; ?></td>
                                <td>
                                    <a href="?id=<?php echo $pos; ?>"><i class="fas fa-edit"></i></a> 
                                    <a href="?id=<?php echo $pos ?>&do=eliminar"><i class="fas fa-trash-alt"></i></a>
                                </td>
                               
                            </tr>
                        <?php endforeach;  ?>
                        
                    </table>
                    
                </div>
            </div>
        </div>
    </div>    
    
   </body>
</html>
                        

