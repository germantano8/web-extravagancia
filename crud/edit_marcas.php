<?php 

session_start();

require('../connection.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "SELECT * FROM marcas WHERE id=$id";
	$resultado = mysqli_query($conexion, $query);

	if(mysqli_num_rows($resultado) == 1){
		$row = mysqli_fetch_array($resultado);
		$nombre = $row['nombre'];
	}
}

if(isset($_POST['editar'])){
	$nombre = strtoupper($_POST['titulo']);

	$query = "UPDATE marcas SET nombre = '$nombre' WHERE id = $id";
	$resultado = mysqli_query($conexion, $query);
	header('Location: crud_marcas.php');
}

require('edit_marcas.view.php');

 ?>