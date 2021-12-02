<?php 

session_start();

require('../connection.php');
require('../functions.php');

$id = verificaLogin();

$query = "DELETE FROM productos WHERE id = $id"; //también se borran las imágenes de la db por el ON DELETE CASCADE
$resultado = mysqli_query($conexion, $query);

if(!$resultado){
	die();
}

header('Location: crud_productos.php');

 ?>