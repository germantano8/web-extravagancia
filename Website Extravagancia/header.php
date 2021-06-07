<?php require('connection.php') ?>
<?php require('functions.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Extravagancia</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="css/fa-all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">

</head>
<body>
	
	<header>

		<div class="container mt-1">
			<div class="row justify-content-between">
				<h1 class="titulo-principal"><a href="index.php">Extravagancia</a></h1>
				<button class="menu" id="menu"> 🞬 </button>
				<ul class="navbar col-12 col-md-5 col-lg-4 col-xl-3">
					<?php 

					$consulta = "SELECT * FROM menu"; // NOMBRE DE LA TABLA

					$resultado = mysqli_query( $conexion, $consulta );

					while ($columna = mysqli_fetch_array( $resultado )){ ?>

						<li><a href="<?php echo($columna['link'] . '.php') ?>"> <?php echo($columna['nombre']) ?> </a></li>

					<?php } ?>
				</ul>
			</div>
		</div>

	</header>