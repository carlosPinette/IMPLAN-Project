<?php
	include_once $_SERVER['DOCUMENT_ROOT']."/implan/conexion.php";

$id =  $_SESSION['id'];
?>

<!DOCTYPE html>

	<html>
		<head>
			 		<meta charset='utf-8'> 
			 		<link rel="stylesheet" type="text/css" href="/implan/estilo.css">
					
				    <input type="button" class="boton noprint"  value="cerrar" onClick="window.close()">	
			 		
		</head>

		<body onload="window.print();">
			<header>
					<div id="container1">
					<img src="/implan/img/logoayun.png" height="70" width="255" class="logo">
					<img src="/implan/img/logoimplan.png" height="90" width="233" class="logo1">
									

				</div>
			</header>

			<section>

				<div id="wrap">

					
					
					<h1 class="noprint">Visualización</h1>
					<div class="contene1">
						

					<div id = "busqueda" class="busqueda1">
					
<!--******************************************************************
											Sección de Información General
						******************************************************************-->
						
						<ul>	
						<div id="info_general" class="div_1" >
							<?php 
							$query = "SELECT * FROM info_general WHERE num_registro='".$id."'";
							$result = pg_query($dbconn4, $query) or die("Error en la consulta");
							if (!$result) {
								echo "An error occurred.\n";
								exit;
							}
							$row = pg_fetch_array($result);
							?>
							<h2>Información General</h2>
									
									<li><label>Numero Registro</label>
										<p class="inputs"><?php echo $row['0'] ?></p>
									</li><br>
									<li><label>Tipo de Registro</label>
										<p class="inputs"><?php echo $row['1'] ?></p>
									</li><br>
									<li><label>Dependencia o Entidad Responsable</label>
										<p class="inputs"><?php echo $row['2'] ?></p>
									</li><br>

									<li><label>Dependencia o Entidad de Apoyo</label>
										<p class="inputs"><?php echo $row['3'] ?></p>
									</li><br>

									<li><label>Nombre del Proyecto o Programa</label>
										<p class="inputs"><?php echo $row['4'] ?></p></li><br>

									<li><label>Objetivo General</label><p class="inputs"><?php echo $row['5'] ?></p></li><br>

									<li><label>Objetivos Específicos</label><p class="inputs"><?php echo $row['6'] ?></p></li><br>

									<li><label>Tipo de Proyecto o Programa</label>
										<p class="inputs"><?php echo $row['7'] ?></p>
									</li><br>

									<li><label>Eje del Plan Municipal de Desarrollo</label>
										<p class="inputs"><?php echo $row['8'] ?></p>
									</li><br>

									<li><label>Estrategia y línea de acción que atiende el programa o proyecto</label>
									<p class="inputs"><?php echo $row['9'] ?></p></li><br>

									<li><label>Prioridad</label>
										<p class="inputs"><?php echo $row['10'] ?></p>
									</li><br>

									<li><label>Criterio</label>
										<p class="inputs"><?php echo $row['11'] ?></p>
									</li><br>

									<li><label>Clasificación para la Asignación de Presupuesto</label>
										<p class="inputs"><?php echo $row['12'] ?></p>
									</li><br>

									<li><label>Etapa Actual del Proyecto o Programa</label>
										<p class="inputs"><?php echo $row['13'] ?></p>
									</li><br>
									
									<dl>
											<dt><li>Etapa de Ejecución</li></dt>
											<dd><li><label>Fecha de Inicio</label><p class="inputs"><?php echo $row['14'] ?></p></li></dd><br>
											<dd><li><label>Fecha de Término</label><p class="inputs"><?php echo $row['15'] ?></p></li></dd> 

									</dl>
							
									<dl>
										<dt><li>Datos del Administrador del Proyecto</li></dt>
										<dd><li>(Nombre, Cargo, Teléfono, Correo)<p class="inputs"><?php echo $row['16'] ?></p></li></dd><br>
										</dl>

									<li><label>Ámbito de Impacto</label><p class="inputs"><?php echo $row['17'] ?></p></li><br>
									
									<li><label>Proyecto o programa complementario</label>
									<p class="inputs"><?php echo $row['18'] ?></p></li><br>

									<li><label>Fecha de Ingreso</label><p class="inputs"><?php echo $row['19'] ?></p></li><br>

									
						</div>
						
						<!--******************************************************************
											Sección de Diagnóstico
						******************************************************************-->
						<div id="diagnostico" class="div_2">

							<?php 
							$query2 = "SELECT DISTINCT * FROM diagnostico WHERE num_registro='".$id."'";
							$result2 = pg_query($dbconn4, $query2) or die("Error en la consulta");
							if (!$result2) {
								echo "An error occurred.\n";
								exit;
							}
							$row2 = pg_fetch_array($result2);
							?>

							<h2>Diagnóstico</h2>

							<dl>
								<dt><li>Análisis de la situación actual</li></dt>
										<dd><li><label>Descripción de la problemática<br>Análisis de la Oferta<br>Análisis de la Demanda</label>
										<a class="inputs" target="_blank" href="download.php?filename=<?php echo $row2['1'] ?>"><?php echo $row2['1'] ?></a></li></dd><br>
										<br><br><br>
							</dl>

							<dl>
								<dt><li>Análisis de la situación sin proyecto</li></dt>
										<dd><li><label>Posibles medidas de optimización<br>Análisis de la Oferta<br>Análisis de la Demanda<br>Alternativas de Solución (descripción, justificación y costo )</label>
										<a class="inputs" target="_blank" href="download.php?filename=<?php echo $row2['2'] ?>"><?php echo $row2['2'] ?></a></li></dd><br>
										<br><br><br>		
							</dl>

							<dl>
								<dt><li>Análisis de la situación con proyecto</li></dt>
										<dd><li><label>Descripción de la situación<br>Análisis de la Oferta<br>Análisis de la Demanda</label>
										<a class="inputs" target="_blank" href="download.php?filename=<?php echo $row2['3'] ?>"><?php echo $row2['3'] ?></a></li></dd>
										<br><br><br>
							</dl>
							
						</div>


						<!--******************************************************************
											Sección de Descripción
						******************************************************************-->
						<div id="descripcion" class="div_3">

							<?php 
							$query3 = "SELECT DISTINCT * FROM descripcion WHERE num_registro='".$id."'";
							$result3 = pg_query($dbconn4, $query3) or die("Error en la consulta");
							if (!$result3) {
								echo "An error occurred.\n";
								exit;
							}
							$row3 = pg_fetch_array($result3);
							?>

							<h2>Descripción</h2>

								<li><label>Introducción</label><p class="inputs"><?php echo $row3['1'] ?></p></a></li>
								<li><label>Antecedentes</label><p class="inputs"><?php echo $row3['2'] ?></p></li><br>

								<li><label>Resumen del Proyecto</label>
								<p class="inputs"><?php echo $row3['3'] ?></p></li><br>

								<li><label>Descripción del Proyecto</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row3['4'] ?>"><?php echo $row3['4'] ?></a></li><br><br><br>
								
								<li><label>Justificación</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row3['5'] ?>"><?php echo $row3['5'] ?></a></li><br>

								<li><label>Marco Jurídico</label><p class="inputs"><?php echo $row3['6'] ?></p></li><br><br><br>

								<li><label>Tiempo estimado de operación del proyecto</label><p class="inputs"><?php echo $row3['7'] ?></p></li>

								<li><label>Recursos Humanos</label><p class="inputs"><?php echo $row3['8'] ?></p></li><br>

								<li><label>Recursos Materiales</label><p class="inputs"><?php echo $row3['9'] ?></p></li><br>
								
								<li><label>Infraestructura Disponible</label><p class="inputs"><?php echo $row3['10'] ?></p></li><br>

								<li><label>Estudios necesarios para realizar el Proyecto</label><p class="inputs"><?php echo $row3['11'] ?></p></li><br><br>

								<li><label>Acciones a realizar</label><p class="inputs"><?php echo $row3['12'] ?></p></li><br><br>

								<li><label>Calendario de las acciones  (Cronograma)</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row3['13'] ?>"><?php echo $row3['13'] ?></a></li>

								<li><label>Metas del Programa o Proyecto</label><p class="inputs"><?php echo $row3['14'] ?></p></li><br><br>

								<li><label>Resultados esperados</label><p class="inputs"><?php echo $row3['15'] ?></p></li><br><br>

						</div>

						
						<!--******************************************************************
											Sección de Beneficios
						******************************************************************-->

						<div id="beneficios" class="div_4">
							<?php 
							$query4 = "SELECT DISTINCT * FROM beneficios WHERE num_registro='".$id."'";
							$result4 = pg_query($dbconn4, $query4) or die("Error en la consulta");
							if (!$result4) {
								echo "An error occurred.\n";
								exit;
							}
							$row4 = pg_fetch_array($result4);
							?>

							<h2>Beneficios</h2>

								<li><label>Beneficios Esperados</label><p class="inputs"><?php echo $row4['1'] ?></p></li><br>
								
								<li><label>Beneficiados directos</label><p class="inputs"><?php echo $row4['2'] ?></p></li><br>

								<li><label>Beneficiados indirectos</label><p class="inputs"><?php echo $row4['3'] ?></p></li><br>

								<li><label>Viviendas beneficiadas</label><p class="inputs"><?php echo $row4['4'] ?></p></li><br>

								
								<li><label>Costo Anual de los Beneficios</label><p class="inputs" id="costoanualnum"></p></li>
						<script type="text/javascript">
									var numero = <?php Print($row4['5']); ?>;
									
								document.getElementById("costoanualnum").innerHTML = accounting.formatMoney(numero);

								</script>
						</div>
						
						
						<!--******************************************************************
											Sección de Localización Geográfica
						******************************************************************-->
						<div id="localizacion_geografica" class="div_5">

							<?php 
							$query5 = "SELECT DISTINCT * FROM localizacion_geografica WHERE num_registro='".$id."'";
							$result5 = pg_query($dbconn4, $query5) or die("Error en la consulta");
							if (!$result5) {
								echo "An error occurred.\n";
								exit;
							}
							$row5 = pg_fetch_array($result5);
							?>

							<h2>Localización Geográfica</h2>

								<li><label>Macrolocalización y Microlocalización</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row5['1'] ?>"><?php echo $row5['1'] ?></a></li><br>

								<li><label>Dirección donde se realizará el Proyecto o Programa</label>
								<p class="inputs"><?php echo $row5['2'] ?></p></li><br><br>

								<li><label>Certeza Jurídica de la propiedad</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row5['3'] ?>"><?php echo $row5['3'] ?></a></li><br>

						</div> 



						<!--******************************************************************
											Sección de Aspectos Financieros
						******************************************************************-->
						<div id="aspectos_financieros" class="div_6">
							
							<?php 
							$query6 = "SELECT DISTINCT * FROM aspectos_financieros WHERE num_registro='".$id."'";
							$result6 = pg_query($dbconn4, $query6) or die("Error en la consulta");
							if (!$result6) {
								echo "An error occurred.\n";
								exit;
							}
							$row6 = pg_fetch_array($result6);
							?>

							<h2>Aspectos Financieros</h2>

								<li><label>Distribución de los Costos (Descripción y monto)</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row6['1'] ?>"><?php echo $row6['1'] ?></a></li><br>

								<li><label>Monto Total de la Inversión</label><p class="inputs"><?php echo "$".number_format($row6['2'],2) ?></p></li><br>

								<li><label>Restricción Presupuestal</label><p class="inputs"><?php echo $row6['3'] ?></p></li><br>

						</div>

						
						<!--******************************************************************
											Sección de Procuración de Fondos
						******************************************************************-->
						<div id="procuracion_fondos" class="div_7">
							
							<?php 
							$query7 = "SELECT DISTINCT * FROM procuracion_fondos WHERE num_registro='".$id."'";
							$result7 = pg_query($dbconn4, $query7) or die("Error en la consulta");
							if (!$result7) {
								echo "An error occurred.\n";
								exit;
							}
							$row7 = pg_fetch_array($result7);
							?>

							<h2>Procuración de Fondos</h2>

								<li><label>Dependencia Federal</label><p class="inputs"><?php echo $row7['1'] ?></p></li>
								<li><label>Nombre del Programa</label><p class="inputs"><?php echo $row7['2'] ?></p></li>
								<li><label>Rubro</label><p class="inputs"><?php echo $row7['3'] ?></p></li>

								<li><label>Fuentes de Financiamiento</label>
									<p class="inputs"><?php echo $row7['4'] ?></p>
								</li>

								
								<dl>
									<dt><li>Participación de los Recursos</li></dt>

											<dd><li><label></label><input type="text" max="100" min="0" name="1" value="Porcentaje %" id="cabe" readonly/><input type="text" min="0" name="2" value="Monto $"  id="cabe" readonly/></li></dd>


											<dd><li><label>Municipio</label><input type="text" max="100" min="0" name="participacion_porcentaje_municipio" value="<?php echo  number_format($row7['5'],2) ?>" readonly/><input type="text" min="0" name="participacion_dinero_municipio" value="<?php echo "$".number_format($row7['6'],2) ?>" readonly/></li></dd>
											
											<dd><li><label>Estado</label><input type="text" max="100" min="0" name="participacion_porcentaje_estado" value="<?php echo number_format($row7['7'],2) ?>" readonly/><input  type="text" min="0" name="participacion_dinero_estado" value="<?php  echo  "$".number_format($row7['8'],2) ?>" readonly/></li></dd>
											
											<dd><li><label>Federación</label><input type="text" max="100" min="0" name="participacion_porcentaje_federacion" value="<?php echo  number_format($row7['9'],2) ?>" readonly/><input  type="text" min="0" name="participacion_dinero_federacion" value="<?php echo "$".number_format($row7['10'],2) ?>" readonly/></li></dd>

											<dd><li><label>Otro</label><input type="text" max="100" min="0" name="participacion_porcentaje_otro" value="<?php echo number_format($row7['11'],2) ?>" readonly/><input  type="text" min="0" name="participacion_dinero_otro" value="<?php echo  "$".number_format($row7['12'],2) ?>" readonly/></li></dd>

											<dd><li><label>Total</label><input type="text" max="100" min="0" name="participacion_porcentaje_total" value="<?php echo number_format($row7['13'],2) ?>" readonly/><input type="text" min="0" name="participacion_dinero_total" value="<?php echo  "$".number_format($row7['14'],2) ?>" readonly/></li></dd>

								</dl>
								
								<li><label>Concentrador del Recurso</label><p class="inputs"><?php echo $row7['15'] ?></p></li>
								<li><label>Requisitos a cumplir según reglas de operación/Convocatoria</label><p class="inputs"><?php echo $row7['16'] ?></p></li>
								<li><label>Fecha de publicación en el DOF</label><p class="inputs"><?php echo $row7['17'] ?></p></li>
								<li><label>Plazo</label><p class="inputs"><?php echo $row7['18'] ?></p></li>
								<li><label>Anotación</label><p class="inputs"><?php echo $row7['19'] ?></p></li>
								

								
						</div>


						<!--******************************************************************
											Sección de Análisis de Factibilidad
						******************************************************************-->
						<div id="analisis_factibilidad" class="div_8">

							<?php 
							$query8 = "SELECT DISTINCT * FROM analisis_factibilidad WHERE num_registro='".$id."'";
							$result8 = pg_query($dbconn4, $query8) or die("Error en la consulta");
							if (!$result8) {
								echo "An error occurred.\n";
								exit;
							}
							$row8 = pg_fetch_array($result8);
							?>

							<h2>Análisis de Factibilidad</h2>
								
							<dl>
								<dt><li>Factores de Éxito del Proyecto</li></dt>

										<dd><li><label>Técnicos, Económicos, Sociales<br>Políticos, Jurídicos, Ambientales <br>Organizacionales</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row8['1'] ?>"><?php echo $row8['1'] ?></a></li></dd>
										<br><br>
								</dl>

							<dl>
								<dt><li>Factores de Riesgo del Proyecto</li></dt>

										<dd><li><label>Técnicos, Económicos, Sociales<br>Políticos, Jurídicos, Ambientales<br>Organizacionales</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row8['2'] ?>"><?php echo $row8['2'] ?></a></li></dd>
										<br><br>
								
								</dl>

							<dl>

								<dt><li>Factibilidad</li></dt>

										<dd><li><label>Técnica, Económica, Social <br>Política</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row8['3'] ?>"><?php echo $row8['3'] ?></a></li></dd>
										<br><br>
							</dl>

						</div>

						

						<!--******************************************************************
											Sección de Evaluación
						******************************************************************-->
						<div id="evaluacion" class="div_9">

							<?php 
							$query9 = "SELECT DISTINCT 	* FROM evaluacion WHERE num_registro='".$id."'";
							$result9 = pg_query($dbconn4, $query9) or die("Error en la consulta");
							if (!$result9) {
								echo "An error occurred.\n";
								exit;
							}
							$row9 = pg_fetch_array($result9);
							?>	

							<h2>Evaluación</h2>						

							<dl>
								<dt><li>Tipos</li></dt>
							
									<dd><li><label>Justificación Económica</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row9['1'] ?>"><?php echo $row9['1'] ?></a></li></dd>

									<dd><li><label>Análisis Costo Eficiencia Simplificado</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row9['2'] ?>"><?php echo $row9['2'] ?></a></li></dd>
									
									<dd><li><label>Análisis Costo Eficiencia</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row9['3'] ?>"><?php echo $row9['3'] ?></a></li></dd>

									<dd><li><label>Análisis Costo Beneficio Simplificado</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row9['4'] ?>"><?php echo $row9['4'] ?></a></li></dd>

									<dd><li><label>Análisis Costo Beneficio</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row9['5'] ?>"><?php echo $row9['5'] ?></a></li></dd>


							</dl>

							<dl>
								<dt><li>Indicadores de Evaluación</li></dt>
							
									<dd><li><label>TIR</label><p class="inputs"><?php echo $row9['6'] ?></p></li></dd>
									<br><br><br>
									<dd><li><label>VPN</label><p class="inputs"><?php echo $row9['7'] ?></p></li></dd>
									<br><br><br>
									<dd><li><label>TRI</label><p class="inputs"><?php echo $row9['8'] ?></p></li></dd>
									<br><br><br>
									<dd><li><label>CAE</label><p class="inputs"><?php echo $row9['9'] ?></p></li></dd>
							</dl>

							<dl>
								<dt><li>Situaciones</li></dt>
							
									<dd><li><label>Costo = Beneficio </label><p class="inputs"><?php echo $row9['10'] ?></p></li></dd>
									<br><br><br>
									<dd><li><label>Costo &#60; Beneficio </label><p class="inputs"><?php echo $row9['11'] ?></p></li></dd>
									<br><br><br>
									<dd><li><label>Costo &#62; Beneficio </label><p class="inputs"><?php echo $row9['12'] ?></p></li></dd>
									<br><br><br>
							</dl>

							<li><label>Análisis de Sensibilidad y Riesgo</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row9['13'] ?>"><?php echo $row9['13'] ?></a></li>

							<li><label>Variables a considerar</label><p class="inputs"><?php echo $row9['14'] ?></p></li>
							
							<dl>
								<dt><li>Indicadores de Rentabilidad del Proyecto</li></dt>
							
									<dd><li><label>VPN</label><p class="inputs"><?php echo $row9['15'] ?></p></li></dd>
									<br><br><br>
									<dd><li><label>TRI</label><p class="inputs"><?php echo $row9['16'] ?></p></li></dd>
									<br><br><br>
									<dd><li><label>TIR</label><p class="inputs"><?php echo $row9['17'] ?></p></li></dd>
									<br><br><br>
									<dd><li><label>CAE</label><p class="inputs"><?php echo $row9['18'] ?></p></li></dd>
									<br><br><br>
							</dl>

							<li><label>Dictamen</label><p class="inputs"><?php echo $row9['19'] ?></p></li>



						</div>

						
						<!--******************************************************************
											Sección de Monitoreo
						******************************************************************-->
						<div id="monitoreo" class="div_10">

							<?php 
							$query10 = "SELECT DISTINCT * FROM monitoreo WHERE num_registro='".$id."'";
							$result10 = pg_query($dbconn4, $query10) or die("Error en la consulta");
							if (!$result10) {
								echo "An error occurred.\n";
								exit;
							}
							$row10 = pg_fetch_array($result10);
							?>

							<h2>Monitoreo</h2>
							
							<li><label>Evidencia</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row10['1'] ?>"><?php echo $row10['1'] ?></a></li>

						</div>


					<!--******************************************************************
										Sección de Observaciones Generales
					******************************************************************-->
							<div id="observaciones_generales" class="div_11">
							<?php 
							$query11 = "SELECT * FROM observaciones_generales WHERE num_registro='".$id."'";
							$result11 = pg_query($dbconn4, $query11) or die("Error en la consulta");
							if (!$result11) {
								echo "An error occurred.\n";
								exit;
							}
							$row11 = pg_fetch_array($result11);
							?>
									
									<h2>Observaciones Generales</h2>
										
										<li><label>Observaciones</label><p class="inputs"><?php echo $row11['2'] ?></p></li><br><br><br><br>
										<br><br><br><br><br><br>
							</div>

					<!--******************************************************************
										Sección de Anexos
					******************************************************************-->
							<div id="anexos" class="div_12">
							<?php 
							$query12 = "SELECT * FROM anexos WHERE num_registro='".$id."'";
							$result12 = pg_query($dbconn4, $query12) or die("Error en la consulta");
							if (!$result12) {
								echo "An error occurred.\n";
								exit;
							}
							$row12 = pg_fetch_array($result12);
							?>
									<h2>Anexos</h2>
										
										<li><label>Anexos</label><a class="inputs" target="_blank" href="download.php?filename=<?php echo $row12['2'] ?>"><?php echo $row12['2'] ?></a></li>

							</div>
			

						<br>
						
						
						<br>
					

				
						</ul>


									
						</div>
					
					


				</div>


			</section>


			<footer></footer>

		</body>
		
</html>
