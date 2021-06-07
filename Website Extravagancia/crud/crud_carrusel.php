<?php 

session_start(); 

require('../connection.php');

if(isset($_SESSION['usuario'])){
	require('crud_carrusel.view.php');
}else{
	header('Location: login.php');
}

if(isset($_POST['subir'])){

	$carpeta_destino = '../fotos/carrusel/';
	$archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
	move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
	
	$nombre = $_POST['nombre'];
	$foto = $_FILES['foto']['name'];

	$query = "INSERT INTO slider(nombre , foto) VALUES ('$nombre', '$foto')";
	$resultado = mysqli_query($conexion, $query);

	if(!$resultado){
		die();
	}

header('Location: crud_carrusel.php');

}

?>