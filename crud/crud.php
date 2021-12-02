<?php

session_start();

if(isset($_SESSION['usuario'])){
	require('crud.view.php');
}else{
	header('Location: login.php');
}

?>