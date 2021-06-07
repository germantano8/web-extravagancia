<?php require('crud_header.php') ?>

<body style="background: #444">
	
	<div class="card col-11 col-md-6 col-lg-4 ml-auto mr-auto mt-4">
		<article class="card-body">
			<h4 class="card-title text-center mb-4 mt-1">Subir Producto</h4>
			<hr>
			<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div class="form-group">
					<label for="titulo">Titulo</label>
					<br>
					<input name="titulo" id="titulo" class="form-control" type="text">
				</div> <!-- form-group// -->

				<div class="form-group">
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

							<option placeholder="Selecciones una"><?php echo $row['id'] . " - " . $row['nombre'] ?></option>

						<?php } ?>

				    </select>
			  	</div>

				<div class="form-group form-check">
			    	<input type="checkbox" class="form-check-input" id="destacado" name="destacado" value="1">
			    	<label class="form-check-label" for="destacado">¿Es destacado?</label>
			  	</div>

				<div class="form-group">
					<label for="texto">Descripción</label>
					<br>
				    <textarea class="col-12" name="texto" id="texto" rows="3"></textarea>
				</div> <!-- form-group// -->

				<div class="form-group">
			    	<label for="foto">Subir Foto</label>
			    	<input type="file" class="form-control-file" id="foto" name="foto[]" multiple>
			  	</div>

				<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block" name="subir" value="Subir producto">Subir Producto</button>
				</div> <!-- form-group// -->
				<h6 class="text-center"><a href="crud.php">Volver</a></h6>
			</form>
		</article>
	</div> <!-- card.// -->

	<div class="container-fluid mt-3 text-center">
		<table class="table table-dark">
		  	<thead>
			    <tr>
					<th scope="col">ID</th>
					<!-- <th scope="col">Foto</th> -->
					<th scope="col">Titulo</th>
					<th scope="col">Descripción</th>
					<th scope="col">¿Es destacado?</th>
					<th scope="col">Categoría</th>
					<th scope="col">Marca</th>
					<th scope="col">Editar</th>
					<th scope="col">Eliminar</th>
			    </tr>
		  	</thead>
		  	
		  	<tbody>

				<?php 

				$query = "SELECT * FROM productos ORDER BY titulo";
				$resultado = mysqli_query($conexion, $query);

				while($row = mysqli_fetch_array($resultado)){ ?>
			
					<tr>
						<th scope="row"><?php echo($row['id']) ?></th>
						<!-- <td><img src="../fotos/<?php echo($row['imagen']) ?>" alt="" width="100px" height="100px"></td> -->
						<td><?php echo($row['titulo']) ?></td>
						<td><?php echo($row['texto']) ?></td>
						<td><?php if($row['es_destacado']){echo("Sí");}else{echo("No");} ?></td>
						<td><?php echo $row['id_categoria'];?></td>
						<td><?php echo($row['id_marca']) ?></td>
						<td><a href="edit_productos.php?id=<?php echo $row['id']?>">Editar</a></td>
						<td><a href="eliminar_productos.php?id=<?php echo $row['id']?>" type="submit" value="Delete" class="alert-link">Eliminar</a></td>
				    </tr>
				
				<?php } ?>
		  	</tbody>
		</table>
	</div>