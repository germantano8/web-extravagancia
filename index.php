<?php require('header.php'); ?>

	<main>

		<div class="container">
			
			<div class="col-12 mt-3">
				<div class="carousel slide" id="principal-carousel" data-ride="carousel">

					<?php 

						$query = "SELECT * FROM slider";
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
								<img src="fotos/carrusel/<?php echo $row['foto'] ?>" alt="">
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

			<h3 class="destacado"><a href="destacado.php">Úlimos Ingresos</a></h3>
			<div class="row justify-content-around">

				<?php 

					$query = "SELECT * FROM productos WHERE es_destacado=1 LIMIT 0, 3"; // inicio = 0, limite a mostrar = 3
					$resultado = mysqli_query($conexion, $query);

					while($row = mysqli_fetch_array($resultado)){ ?>

					<div class="box-destacado col-lg-2 col-md-3 col-7">
						<a href="single.php?id=<?php echo $row['id']?>">
							<?php $imagen = mostrarProductos($row); ?>
							<img class="foto-box-destacado" src="fotos/<?php echo $imagen ?>" alt="">
							<p class="titulo-box-destacado"><?php echo $row['titulo'] ?></p>
						</a>
					</div>

				<?php } ?>

			</div>

		</div>

		<div class="container-fluid mt-1">
			<h3 class="titulo-categorias mt-1 mb-2">TODO PARA VOS</h3>


			<div class="row justify-content-around">
		        <div id="categorias" class="carousel slide col-10 w-100" data-ride="carousel">
		        	<div class="container">

		            	<div class="carousel-inner text-center" role="listbox">
		                
							<?php 

								$query = "SELECT * FROM categorias";
								$resultado = mysqli_query($conexion, $query);

								
								$x=1; foreach($resultado as $row): $y=$x++;
								 	
							?>

								<div class="carousel-item <?php if($y==1) { echo 'active'; } ?>">
			                    	<div class="box-categorias col-12 col-md-6 col-lg-3">
			                    		<a href="category.php?id=<?php echo $row['id'] ?>">
											<img class="foto-box-categorias" src="fotos/categorias/<?php echo $row['foto'] ?>" alt="">
											<p class="titulo-box-categorias"><?php echo $row['nombre'] ?></p>
										</a>
			                    	</div>
		                		</div>

						<?php endforeach; ?>

		                </div>

		            </div>

		            <a class="carousel-control-prev" href="#categorias" role="button" data-slide="prev">
		                <i class="flechita fas fa-chevron-left"></i>
		            </a>
		            <a class="carousel-control-next" href="#categorias" role="button" data-slide="next">
		                <i class="flechita fas fa-chevron-right"></i>
		            </a>
		        </div>
   	 		</div>
   	 	</div>

		<div class="container-fluid mt-1">
			<h3 class="titulo-categorias mt-1 mb-2">NAVEGA POR MARCAS</h3>

			<div class="row justify-content-around">

	            <div id="marcas" class="carousel slide w-100" data-ride="carousel">

	                <div class="container">

	                	<div class="carousel-inner text-center" role="listbox">

	                		<?php 

								$query = "SELECT * FROM marcas";
								$resultado = mysqli_query($conexion, $query);

								
								$x=1; foreach($resultado as $row): $y=$x++;
								 	
							?>

	                	    <div class="carousel-item <?php if($y==1) { echo 'active'; } ?>">
	                	        <div class="box-marcas col-12 col-md-6 col-lg-4 border border-danger">
		                    		<a href="brand.php?id=<?php echo $row['id'] ?>">
										<!-- <img class="foto-box-marcas" src="fotos/marcas/<?php echo $row['foto'] ?>" alt=""> -->
										<p class="titulo-box-marcas"><?php echo $row['nombre'] ?></p>
									</a>
		                    	</div>
	                	    </div>
	                	    <?php endforeach; ?>

	                	</div>

	                </div>

	                <a class="carousel-control-prev" href="#marcas" role="button" data-slide="prev">
		                <i class="flechita fas fa-chevron-left"></i>
		            </a>
		            <a class="carousel-control-next" href="#marcas" role="button" data-slide="next">
		                <i class="flechita fas fa-chevron-right"></i>
		            </a>
		                
	            </div>

        	</div>

		</div>

	</main>

<?php require('footer.php'); ?>