<?php

session_start();

require('../connection.php');

// if(isset($_SESSION['usuario'])){
// 	header('Location: crud.php');
// }else{
// 	header('Location: login.php');
// }

if($_SERVER['REQUEST_METHOD'] == 'POST'){


	// Esto es para registrar usuarios
	
	// $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	// $password = $_POST['password'];

	// $password = hash('sha512', $password);

	// $query = "INSERT INTO usuarios(usuario , password) VALUES ('$usuario', '$password')";
	// $resultado = mysqli_query($conexion, $query);
	
	// Esto es para loguear

	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = hash('sha512', ($_POST['password']));

	$query = "SELECT * FROM usuarios WHERE usuario  = '$usuario' AND password = '$password'";
	$resultado = mysqli_query($conexion, $query) or die(mysql_error());
	$rows=mysqli_num_rows($resultado);

	if($rows==1){
		$_SESSION['usuario'] = $usuario;
		header('Location: crud.php');
	}else{
		$errores = '<div></div>';
	}
}

require('login.view.php');

?>