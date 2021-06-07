<?php

$usuario = "root";
$contrasena = ""; // PW DE LA BASE
$servidor = "localhost";
$basededatos = "extravagancia"; // NOMBRE DE LA BASE DE DATOS

// $usuario = "c1700992_extra";
// $contrasena = "BUlizavo50"; // PW DE LA BASE
// $servidor = "localhost";
// $basededatos = "c1700992_extra"; // NOMBRE DE LA BASE DE DATOS

$conexion = mysqli_connect( $servidor, $usuario, $contrasena );

$db = mysqli_select_db( $conexion, $basededatos );

mysqli_set_charset($conexion, 'utf8');
?>