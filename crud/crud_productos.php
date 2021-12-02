<?php 

session_start(); 

require('../connection.php');
require('../functions.php');

if(isset($_SESSION['usuario'])){
	require('crud_productos.view.php');
}else{
	header('Location: login.php');
}


if(isset($_POST['subir'])){
	
	// Acá subo todo lo de producto (menos las fotos)

	$titulo = $_POST['titulo'];
	$id_categoria = $_POST['categories'];
	$id_marca = $_POST['marcas'];
	$texto = $_POST['texto'];
	// $imagen = $_FILES['foto']['name'];
	$es_destacado = $_POST['destacado'];

	$query = "INSERT INTO productos(titulo, id_categoria, id_marca, texto, es_destacado) VALUES ('$titulo', '$id_categoria', '$id_marca', '$texto', '$es_destacado')";
	$resultado = mysqli_query($conexion, $query);

	// Rescato id del último producto

	$query = "SELECT id FROM productos ORDER BY id DESC LIMIT 1";
	$resultado = mysqli_query($conexion, $query);
	$row = mysqli_fetch_array($resultado);
	$id_prod = $row['id'];

	// Loop que sube fotos a la db
	// REVISAR EL PARÁMETRO DE LA FUNCIÓN

	subirFotos($id_prod);
	
	header('Location: crud_productos.php');

}

?>
