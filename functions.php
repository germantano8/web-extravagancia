<?php 

function mostrarProductos($row){
	require('connection.php');
	$id = $row['id'];
	$query = "SELECT imagen FROM imagenes WHERE id_prod = $id ORDER BY id ASC LIMIT 1";
	$resultado = mysqli_query($conexion, $query);

	while($row = mysqli_fetch_array($resultado)) {
	    $imagen = $row['imagen'];
	}
	return $imagen;
}

function verificaLogin(){
	if(isset($_SESSION['usuario'])){
		header('Location: crud.php');
	}else{
		header('Location: login.php');
	}

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	
	return $id;
}

function subirFotos($id){
	require('connection.php');
	$carpeta_destino = '../fotos/';
	$i = 0;
	foreach ($_FILES['foto']['name'] as $foto){
		if(!empty($foto)){

			$archivo_subido = $carpeta_destino . $foto;
			move_uploaded_file($_FILES['foto']['tmp_name'][$i], $archivo_subido);

			$query = "INSERT INTO imagenes(id_prod, imagen) VALUES ('$id' ,'$foto')";
			$resultado = mysqli_query($conexion, $query);
			$i++;

		}
	}
}


 ?>