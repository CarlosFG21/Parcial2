<?php

require_once '../Model/Ofertas.php';
//subir la imagen al servidor

move_uploaded_file($_FILES["imagen"]["tmp_name"], "../View/imagenes".$_FILES["imagen"]["name"]);

$titulo = $_POST['titulo'];
$imagen = $_FILES['imagen']['name'];
$descripcion = $_POST['descripcion'];

try{
$clase = new Ofertas("",$titulo,$imagen,$descripcion);
$clase->insertar();
header("Location: index.php");
}
catch(Exception $ex){

    echo("No se ha podido guardar la infromacion en el sistema");

}


?>