<?php require('crud_header.php') ?>

<style>
	
.foto-producto-crud{
	position:relative;
    display:inline-block;
	width: 150px; 
	height: 150px; 
	padding:0;
}
.boton-foto-producto-crud{
	position:absolute;
	top:10px;
    right:10px;
    width:30px;
    height:30px;
}

</style>

<body style="background: #444">
	
	<div class="card col-11 col-md-6 col-lg-4 ml-auto mr-auto mt-4">
		<article class="card-body">
			<h4 class="card-title text-center mb-4 mt-1">Editar Producto</h4>
			<hr>
			<form method="POST" enctype="multipart/form-data" action="edit_productos.php?id=<?php echo $_GET['id'] ?>">
				<div class="form-group">
					<label for="titulo">Titulo</label>
					<br>
					<input name="titulo" id="titulo" class="form-control" type="text" value="<?php echo $titulo ?>">
				</div> <!-- form-group// -->

				<!-- <div class="form-group">
				    <label for="categories">Categoría</label>
				    <select class="form-control" id="categories" name="categories">
						
						<?php 

						$query = "SELECT * FROM categorias ORDER BY id";
						$resultado = mysqli_query($conexion, $query);

						while($row = mysqli_fetch_array($resultado)){ ?>
								

							<option><?php echo $row['id'] . " - " . $row['nombre'] ?></option>

						<?php } ?>

				    </select>
			  	</div>

			  	<div class="form-group">
				    <label for="marcas">Marca</label>
				    <select class="form-control" id="marcas" name="marcas">

						<?php 

						$query = "SELECT * FROM marcas ORDER BY id";
						$resultado = mysqli_query($conexion, $query);

						while($row = mysqli_fetch_array($resultado)){ ?>

							<option><?php echo $row['id'] . " - " . $row['nombre'] ?></option>

						<?php } ?>

				    </select>
			  	</div> -->

				<div class="form-group form-check">
			    	<input type="checkbox" class="form-check-input" id="destacado" name="destacado" value="1" <?php if($checked==1){echo 'checked';} ?>>
			    	<label class="form-check-label" for="destacado">¿Es destacado?</label>
			  	</div>

				<div class="form-group">
					<label for="texto">Descripción</label>
					<br>
				    <textarea class="col-12" name="texto" id="texto" rows="3"><?php echo $texto ?></textarea>
				</div> <!-- form-group// -->

				<div class="form-group">
			    	<label for="foto">Subir Foto</label>
			    	<input type="file" class="form-control-file" id="foto" name="foto[]" multiple>
			  	</div>

				<div class="form-group">
					<label for="texto">Fotos</label>
					<br>
					<div class="row justify-content-around">

						<?php 
						$query = "SELECT * FROM imagenes WHERE id_prod = $id";
						$resultado = mysqli_query($conexion, $query);

						while($row = mysqli_fetch_array($resultado)){
						?>

						<div class="col-6 col-lg-3 mr-1 mb-2 foto-producto-crud">
					    	<img src="../fotos/<?php echo $row['imagen']?>" alt="" width="100%" height="100%">
							<a href="eliminar_producto_foto.php?id=<?php echo $row['id']?>" class="btn btn-danger text-center boton-foto-producto-crud" type="submit" name="borrar_foto">X</a>
						</div>

						<?php } ?>

					</div>
				</div>

				<div class="form-group">
				<button type="submit" class="btn btn-success btn-block" name="editar" value="Editar producto">Editar Producto</button>
				</div> <!-- form-group// -->
				<h6 class="text-center"><a href="crud_productos.php">Volver</a></h6>
			</form>
		</article>
	</div> <!-- card.// -->