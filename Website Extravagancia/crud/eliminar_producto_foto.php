<?php 

session_start();

require('../connection.php');
require('../functions.php');

$id = verificaLogin();

$query = "SELECT id_prod FROM imagenes WHERE id = $id";
$resultado = mysqli_query($conexion, $query);
$row = mysqli_fetch_array($resultado);
$id_prod = $row['id_prod'];

$query = "DELETE FROM imagenes WHERE id = $id";
$resultado = mysqli_query($conexion, $query);

if(!$resultado){
	die();
}

header("Location: edit_productos.php?id=".$id_prod);

 ?>