<?php
	include_once $_SERVER['DOCUMENT_ROOT']."/implan/conexion.php";

//includes de sesion y conexion


$noderegistro = $_GET['noderegistro'];
$tipo_registro = $_GET['tipo_registro'];
$dependencia = $_GET['dependencia'];
$nombre = $_GET['nombre'];
$tipo = $_GET['tipo'];
$ejeplan = $_GET['ejeplan'];
$prioridad = $_GET['prioridad'];
$etapaactual = $_GET['etapaactual'];
$montototal = $_GET['montototal'];
$fechaingreso = $_GET['fechaingreso'];



$_SESSION['noderegistro']= $noderegistro;
$_SESSION['tipo_registro']=$tipo_registro;
$_SESSION['dependencia']=$dependencia ;
$_SESSION['nombre']=$nombre;
$_SESSION['tipo']=$tipo ;
$_SESSION['ejeplan']=$ejeplan;
$_SESSION['prioridad']=$prioridad ;
$_SESSION['etapaactual']=$etapaactual;
$_SESSION['montototal']=$montototal  ;
$_SESSION['fechaingreso']=$fechaingreso;


$query= "SELECT DISTINCT 
	ig.num_registro,
	ig.tipo_registro,
	ig.dependencia_entidad,
	ig.nombre_proyecto,
	ig.tipo_proyecto,
	ig.eje_plan_municipal,
	ig.prioridad,
	ig.etapa_actual_proyecto,
	af.monto_total_inversion,
	ig.fecha_ingreso
	";
	

$query .=" FROM 
			info_general ig,
			aspectos_financieros af 
		  WHERE ig.num_registro=af.num_registro ";
		  
if (!empty($noderegistro)){
	$query .="
	AND ig.num_registro = '".$noderegistro."'
	";
	}
if (!empty($tipo_registro)){
	$query .="
	AND ig.tipo_registro = '".$tipo_registro."'
	";
	}
if (!empty($dependencia)){
	$query .="
	AND ig.dependencia_entidad = '".$dependencia."'
	";
	}
if (!empty($nombre)){
	$query .="
	AND ig.nombre_proyecto = '".$nombre."'
	";
	}
if (!empty($tipo)){
	$query .="
	AND ig.tipo_proyecto = '".$tipo."'
	";
	}
if (!empty($ejeplan)){
	$query .="
	AND ig.eje_plan_municipal = '".$ejeplan."'
	";
	}
if (!empty($prioridad)){
	$query .="
	AND ig.prioridad = '".$prioridad."'
	";
	}
if (!empty($etapaactual)){
	$query .="
	AND ig.etapa_actual_proyecto = '".$etapaactual."'
	";
	}
if (!empty($montototal)){
	$query .="
	AND af.monto_total_inversion = '".$montototal."'
	";
	}
if (!empty($fechaingreso)){
	$query .="
	AND ig.fecha_ingreso = '".$fechaingreso."'
	";
	
	}
$query .="Order by ig.num_registro";

	
?>


<!DOCTYPE html>

	<html>

		<head>
 		<meta charset='utf-8'> 
 		<link rel="stylesheet" type="text/css" href="estilo.css">


		</head>


		<body>
			<header>
			<div id="container1">
				<img src="img/logo.png" height="100" width="280" class="logo">
				<img src="img/logoimplan.png" height="100" width="243" class="logo1">
				<a href="logout.php" class="logout noprint">Salir</a>
				
			</div>
			</header>

			<section>
		
				<div id="wrap">
					<a href="index.php" class="home noprint"><img src ="img/home.png" height="48"></a>
				<?php 
				$result = pg_query($dbconn4, $query) or die("Error en la consulta");
				if (!$result) {
					echo "An error occurred.\n";
					exit;
				}
				 $_SESSION['result']=$result;
				?>
				<div id="resultados_busqueda">
				<table BORDER="1">
					<tr>
						<th>Número de registro</th>
						<th>Tipo de registro</th>
						<th>Dependencia</th>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Eje plan municipal</th>
						<th>Prioridad</th>
						<th>Etapa actual</th>
						<th>Monto total</th>
						<th>Fecha ingreso</th>
						<th>Visualización</th>
					</tr>
				
					<?php 
					$i=0;
					while ($row = pg_fetch_array($result)) {
					
					
										

						$html = '<a href="visualizacion.php?id='.$row['num_registro'].'">Más detalles</a>';
						 
						 $array[$i]=$row['num_registro']; 
						$i++;
						
						echo "<tr><td>". $row['num_registro'] ."</td>";
						echo "<td>". $row['1'] ."</td>";
						echo "<td>". $row['2'] ."</td>";
						echo "<td>". $row['3'] ."</td>";
						echo "<td>". $row['4'] ."</td>";
						echo "<td>". $row['5'] ."</td>";
						echo "<td>". $row['6'] ."</td>";	
						echo "<td>". $row['7'] ."</td>";
						echo "<td>$". number_format($row['8'],2) ."</td>";
						echo "<td>". $row['9'] ."</td>";
						echo "<td>".$html."</td></tr>";
						
					}
					unset($_SESSION['arreglo']);
					$_SESSION['arreglo']= $array;
					?>
				</table>

				<a href="excel.php" class="excel noprint" style="vertical-align: center;"><img height="33" width="33" src="img/excel.png">Descargar</a>
				<a class="excel noprint" href="imprimeresultados.php">Imprimir</a>
				</div>

			</div>

				
			</section>

			<footer></footer>

		</body>
</html>

