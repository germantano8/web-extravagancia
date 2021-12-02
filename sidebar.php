<div class="sidebar col-lg-3">
			
				<div class="titulo-sidebar"><a href="page.php">Productos</a></div>
				<button class="menu-sidebar" id="menu-sidebar"> 🞬 </button>
				<ul class="nav flex-column" id="sidebar">

					<?php 

					$query = "SELECT * FROM categorias ORDER BY nombre";
					$resultado = mysqli_query($conexion, $query);

					while($row = mysqli_fetch_array($resultado)){ ?>
						
						<li class="nav-item"><a class="nav-link" href="category.php?id=<?php echo $row['id']?>"><?php echo ($row['nombre']) ?></a></li>

					<?php } ?>

				</ul>
			
			</div>