<?php 

session_start(); 

require('../connection.php');
require('../functions.php');

$id = verificaLogin();

$query = "DELETE FROM slider WHERE id=$id";
$resultado = mysqli_query($conexion, $query);

if(!$resultado){
	die();
}

header('Location: crud_carrusel.php');

 ?>