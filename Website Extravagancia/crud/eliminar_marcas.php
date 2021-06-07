<?php 

session_start(); 

require('../connection.php');
require('../functions.php');

$id = verificaLogin();

$query = "DELETE FROM marcas WHERE id=$id";
$resultado = mysqli_query($conexion, $query);

if(!$resultado){
	die();
}

header('Location: crud_marcas.php');

 ?>