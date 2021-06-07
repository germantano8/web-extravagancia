<?php require('header.php') ?>

<div class="container mt-3">

		<div class="row justify-content-between">

			<?php require('sidebar.php') ?>

			<div class="col-lg-9 mt-2">

					<?php 

					if(isset($_GET['id'])){
					$id = $_GET['id']; ?>

					<p style="font-weight: bold; padding: 0;">Actualmente estás viendo

						<?php } 

						$query = "SELECT nombre FROM categorias WHERE id=$id";
						$resultado = mysqli_query($conexion, $query);

						$row = mysqli_fetch_array($resultado);
						echo $row['nombre'];?>
					
					</p>

				<div class="row justify-content-around">

					<?php
					
					if(isset($_GET['id'])){
					$id = $_GET['id']; }
					
					$query = "SELECT * FROM productos WHERE id_categoria=$id ORDER BY titulo";
					$resultado = mysqli_query($conexion, $query);
					
					if(mysqli_num_rows($resultado) >= 1){
						while($row = mysqli_fetch_array($resultado)){ ?>
						
							<div class="box-productos col-lg-3 mr-1">
								<a href="single.php?id=<?php echo $row['id']?>">
									<?php $imagen = mostrarProductos($row); ?>
									<img class="foto-box-productos" src="fotos/<?php echo $imagen ?>" alt="">
									<p class="titulo-box-productos"><?php echo $row['titulo'] ?></p>
								</a>
							</div>
					
					<?php /* Cierra while */ } /* Cierra if */ } else echo "De momento no hay productos en esta sección :(" ?>

				</div>

			</div>
			
		</div>

	</div>

<?php require('footer.php') ?>