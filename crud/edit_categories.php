<?php 

session_start();

require('../connection.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "SELECT * FROM categorias WHERE id=$id";
	$resultado = mysqli_query($conexion, $query);

	if(mysqli_num_rows($resultado) == 1){
		$row = mysqli_fetch_array($resultado);
		$nombre = $row['nombre'];
		$foto = $row['foto'];
	}
}

if(isset($_POST['editar'])){
	$nombre = ucwords(strtolower($_POST['titulo']));
	if(!empty($_FILES['foto']['tmp_name'])){
		$carpeta_destino = '../fotos/categorias/';
		$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);

		$foto = $_FILES['foto']['name'];
	}

	$query = "UPDATE categorias SET nombre = '$nombre', foto = '$foto' WHERE id = $id";
	$resultado = mysqli_query($conexion, $query);
	header('Location: crud_categories.php');
}

require('edit_categories.view.php');

 ?>