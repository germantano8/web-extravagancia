<?php require('crud_header.php') ?>

<body style="background: #444">
	
	<div class="card col-11 col-md-6 col-lg-4 ml-auto mr-auto mt-4">
		<article class="card-body">
			<h4 class="card-title text-center mb-4 mt-1">Editar Categoría</h4>
			<hr>
			<form method="POST" enctype="multipart/form-data" action="edit_categories.php?id=<?php echo $_GET['id'] ?>">
			<div class="form-group">
				<label for="titulo">Nombre</label>
				<br>
				<input name="titulo" id="titulo" class="form-control" type="text" value="<?php echo $nombre ?>">
			</div> <!-- form-group// -->

			<div class="form-group">
		    	<label for="foto">Subir Foto</label>
		    	<input type="file" class="form-control-file" id="foto" name="foto">
		  	</div>

			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block" name="editar" value="Editar categoria">Editar Categoría</button>
			</div> <!-- form-group// -->
			<h6 class="text-center"><a href="crud_categories.php">Volver</a></h6>
			</form>
		</article>
	</div> <!-- card.// -->