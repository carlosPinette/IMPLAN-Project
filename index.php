<?php
	include_once $_SERVER['DOCUMENT_ROOT']."/implan/conexion.php";


	$usr = $_SESSION['usr'];
?>


<!DOCTYPE html>

	<html>

		<head>
 		<meta charset='utf-8'> 
 		<link rel="stylesheet" type="text/css" href="estilo.css">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
		<script src="js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
		<link href="js/jquery.bxslider.css" rel="stylesheet" />
		<script>
		$(document).ready(function(){
			$('.bxslider').bxSlider({
			 auto: true,
			 easing: 'easeOutElastic',
			 autoControls: true
			});
		});
		</script>
		</head>


		<body>
			<header>
			<div id="container1">
				<img src="img/logo.png" height="100" width="280" class="logo">
				<img src="img/logoimplan.png" height="100" width="243" class="logo1">
				<a href="logout.php" class="logout">Salir</a>
			</div>
			</header>

			<section>
				<div id="wrap">
					<?php


				if($_SESSION['privilegio']<2 )
				echo '<a href="registro.php" class="Btn">Registro</a>';
				elseif($_SESSION['privilegio']<3)
				echo '<a href="busqueda.php" class="Btn">Búsqueda</a>';
				else{
									echo '<a href="registro.php" class="Btn">Registro</a>';
				echo '<a href="busqueda.php" class="Btn">Búsqueda</a>';
}
				?>
				
						<?php 
							$query = "SELECT sacanombre(empleado), sacaapep(empleado), sacaapem(empleado) FROM usuarios WHERE usuario='".$usr."'";
							$result = pg_query($dbconn4, $query) or die("Error en la consulta");
							if (!$result) {
								echo "An error occurred.\n";
								exit;
							}

							$row = pg_fetch_array($result);
							?>

							<p style="text-align:center" > <?php echo "Bienvenido ".$row['0']." ".$row['1']; ?></p>
							
							<ul class="bxslider">
								<li><img src="img/pic1.jpg" /></li>
								<li><img src="img/pic2.jpg" /></li>
								<li><img src="img/pic3.jpg" /></li>
								<li><img src="img/pic4.jpg" /></li>
							</ul>

				</div>



				</form>
				</div>
			</section>

			<footer></footer>

		</body>
</html>