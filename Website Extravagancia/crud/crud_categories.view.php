<?php require('crud_header.php') ?>

<body style="background: #444">
	
	<div class="card col-11 col-md-6 col-lg-4 ml-auto mr-auto mt-4">
		<article class="card-body">
			<h4 class="card-title text-center mb-4 mt-1">Agregar Categoría</h4>
			<hr>
			<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="form-group">
				<label for="nombre">Nombre de la Categoría</label>
				<br>
				<input name="nombre" id="nombre" class="form-control" type="text">
			</div> <!-- form-group// -->

			<div class="form-group">
		    	<label for="foto">Subir Foto</label>
		    	<input type="file" class="form-control-file" id="foto" name="foto">
		  	</div>

			<div class="form-group">
			<button type="submit" name="subir" class="btn btn-primary btn-block">Agregar</button>
			</div> <!-- form-group// -->
			<h6 class="text-center"><a href="crud.php">Volver</a></h6>
			</form>
		</article>
	</div> <!-- card.// -->

	<div class="container mt-3 text-center">
		<table class="table table-dark">
		  	<thead>
		    <tr>
				<th scope="col">ID</th>
				<th scope="col">Foto</th>
				<th scope="col">Nombre de la Categoría</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
		    </tr>
		 	</thead>
		  	<tbody>

				<?php 

				$query = "SELECT * FROM categorias ORDER BY nombre";
				$resultado = mysqli_query($conexion, $query);

				while($row = mysqli_fetch_array($resultado)){ ?>
			
					<tr>
						<th scope="row"><?php echo($row['id']) ?></th>
						<td><img src="../fotos/categorias/<?php echo($row['foto']) ?>" alt="" width="100px" height="100px"></td>
						<td><?php echo($row['nombre']) ?></td>
						<td><a href="edit_categories.php?id=<?php echo $row['id']?>">Editar</a></td>
						<td><a href="eliminar_categorias.php?id=<?php echo $row['id']?>" type="submit" value="Delete" class="alert-link">Eliminar</a></td>
				    </tr>
				
				<?php } ?>

		  	</tbody>
		</table>
	</div>

</body>
</html>