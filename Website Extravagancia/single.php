<?php require('header.php'); ?>

	<div class="container mt-3">

		<br>

		<div class="row">

			<?php 
			
				if(isset($_GET['id'])){
				$id = $_GET['id'];
				} 
			
				$query = "SELECT * FROM productos WHERE id = $id";
			
				$resultado = mysqli_query($conexion, $query);
			
				while($row = mysqli_fetch_array($resultado)){ 
					$titulo = $row['titulo'];
					$texto = $row['texto'];
					?>

				<div class="col-12 col-md-5 col-lg-4">
					<div class="carousel slide" id="principal-carousel" data-ride="carousel">

						<?php 

							$query = "SELECT * FROM imagenes WHERE id_prod = $id";
							$resultado = mysqli_query($conexion, $query);

							$indicators = mysqli_num_rows($resultado);
							$j = 1;

						?>

						<ol class="carousel-indicators">
							<?php 
								for($i = 0; $i < $indicators; $i++){ ?> 
								<li data-target="#principal-carousel" data-slide-to="<?php echo $i ?>" class="<?php if($i==0){echo "active";} ?>"></li>
							<?php } ?>
						</ol>

						<div class="carousel-inner">
							<?php while($row = mysqli_fetch_array($resultado)){ ?>
								<div class="carousel-item <?php if($j == 1){echo "active";} ?>">
									<img src="fotos/<?php echo $row['imagen'] ?>" alt="" class="img-single">
								</div>
							<?php $j++; } ?>
						</div>

						<a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						</a>

						<a href="#principal-carousel" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
						</a>

					</div>
				</div>

				<div class="col-12 col-md-7 col-lg-8">
					<div class="texto-single">
						<h3 style="font-weight: bold"><?php echo $titulo ?></h3>
						<p><?php echo $texto ?></p>
					</div>
				</div>
		
			<?php } ?>

		</div>

	</div>

<?php require('footer.php'); ?>