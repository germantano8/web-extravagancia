<?php 

session_start();

require('../connection.php');
require('../functions.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query = "SELECT * FROM productos WHERE id=$id";
	$resultado = mysqli_query($conexion, $query);

	if(mysqli_num_rows($resultado) == 1){
		$row = mysqli_fetch_array($resultado);
		$id = $row['id'];
		$titulo = $row['titulo'];
		$texto = $row['texto'];
		$checked = $row['es_destacado'];
	}
}

if(isset($_POST['editar'])){

	$titulo = $_POST['titulo'];
	$texto = $_POST['texto'];
	isset($_POST['destacado']) ? $es_destacado = 1 : $es_destacado=0;

	$query = "UPDATE productos SET titulo = '$titulo', texto = '$texto', es_destacado = '$es_destacado' WHERE id = $id";
	$resultado = mysqli_query($conexion, $query);

	subirFotos($id);
	
	header('Location: crud_productos.php');

}

require('edit_productos.view.php');

 ?>