<?php 

session_start(); 

require('../connection.php');

if(isset($_SESSION['usuario'])){
	require('crud_marcas.view.php');
}else{
	header('Location: login.php');
}

if(isset($_POST['agregar'])){

	// $carpeta_destino = '../fotos/marcas/';
	// $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
	// move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
	
	$nombre = $_POST['nombre'] ;
	// $foto = $_FILES['foto']['name'];

	$query = "INSERT INTO marcas(nombre) VALUES ('$nombre')";
	$resultado = mysqli_query($conexion, $query);
	
	header('Location: crud_marcas.php');

}

?>