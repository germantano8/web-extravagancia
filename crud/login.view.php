<?php require('crud_header.php') ?>

<body style="background: #444;">
	
	<div class="card col-11 col-md-6 col-lg-4 ml-auto mr-auto mt-4">
		<article class="card-body">
			<h4 class="card-title text-center mb-4 mt-1">Iniciar Sesión</h4>
			<hr>
			<p class="text-success text-center">Sistema de Gestión del sitio web de Extravagancia</p>
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> Usuario </span>
				 </div>
				<input name="usuario" class="form-control" placeholder="Usuario" type="text">
			</div> <!-- input-group.// -->
			</div> <!-- form-group// -->
			<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> Contraseña </span>
				 </div>
			    <input name="password" class="form-control" placeholder="******" type="password">
			</div> <!-- input-group.// -->
			</div> <!-- form-group// -->
			
			<?php if(!empty($errores)){ ?>
				<div class="alert alert-warning" role="alert">
					Datos incorrectos
				</div>
			<?php } ?>

			<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block"> Ingresar  </button>
			</div> <!-- form-group// -->
			</form>
		</article>
	</div> <!-- card.// -->

</body>
</html>