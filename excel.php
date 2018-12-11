<!DOCTYPE html>
<html >

<?php


header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment;filename=consulta_banco_proyecto.xls ");
header("Content-Transfer-Encoding: binary ");
 header('Content-Type: text/html; charset=UTF-8');
include_once $_SERVER['DOCUMENT_ROOT']."/implan/conexion.php";


 $result = $_SESSION['arreglo'];




		
		/************    Query   ***********/				
				$query1= "SELECT distinct * from info_general ig,
	diagnostico di, 
	descripcion de, 
	beneficios be, 
	localizacion_geografica lg, 
	aspectos_financieros afi, 
	procuracion_fondos pf, 
	analisis_factibilidad afa, 
	evaluacion ev, 
	monitoreo mo,
	observaciones_generales og, 
	anexos an
WHERE an.num_registro = og.num_registro 
and og.num_registro = mo.num_registro
and mo.num_registro = ev.num_registro
and ev.num_registro = afa.num_registro
and afa.num_registro = pf.num_registro
and pf.num_registro = afi.num_registro
and afi.num_registro = lg.num_registro
and lg.num_registro = be.num_registro
and be.num_registro = de.num_registro
and de.num_registro = di.num_registro
and di.num_registro = ig.num_registro
and (ig.num_registro=0 ";

			
			  foreach($result as $valor){
			 
			    $query1.= "OR ig.num_registro =".$valor ." ";
			  }
$query1.=");";

				
				$prueba= pg_query($query1);
	
	if (pg_num_rows($prueba)>0){	

			echo"<table class='reportes'>";
		/************ Título de Columnas ***********/
				echo "<tr>
						<th>Número de Registro</th>
						<th>Tipo de Registro</th>
						<th>Dependencia o Entidad Responsable</th>
						<th>Dependencia o Entidad de Apoyo</th>
						<th>Nombre del Proyecto</th>
						<th>Objetivo General</th>
						<th>Objetivos Específicos</th>
						<th>Tipo de Proyecto</th>
						<th>Eje del plan Municipal</th>
						<th>Estrategia</th>
						<th>Prioridad</th>
						<th>Criterio</th>
						<th>Clasificación de Asignación de Presupuesto</th>
						<th>Etapa Actual del Proyecto</th>
						<th>Fecha de Inicio de Ejecución</th>
						<th>Fecha de Término de Ejecución</th>
						<th>Información del Administrador del Proyecto</th>
						<th>Ámbito de Impacto</th>
						<th>Proyecto o Programa Complementario</th>
						<th>Fecha de ingreso</th>
						
						
						<th>Análisis de la situación actual</th>
						<th>Análisis de la situación sin proyecto</th>
						<th>Análisis de la situación con proyecto</th>
						
						
						<th>Introducción</th>
						<th>Antecedentes </th>
						<th>Resumen del proyecto</th>
						<th>Descripción del proyecto</th>
						<th>Justificación </th>
						<th>Marco Jurídico</th>
						<th>Tiempo estimado de operación del proyecto</th>
						<th>Recursos Humanos</th>
						<th>Recursos Materiales</th>
						<th>Infraestructura Disponible </th>
						<th>Estudios necesarios</th>
						<th>Acciones a realizar</th>
						<th>Calendario de las acciones</th>
						<th>Metas del Programa o Proyecto</th>
						<th>Resultados Esperados</th>
						
						<th>Beneficios Esperados</th>
						<th>Beneficiados Directos</th>
						<th>Beneficiados Indirectos</th>
						<th>Viviendas Beneficiadas</th>
						<th>Costo Anual de los Beneficios</th>
						
						<th>Macrolocalización y Microlocalización</th>
						<th>Dirección donde se realizará el Proyecto</th>
						<th>Certeza Jurídica de la propiedad</th>
						
						<th>Distribución de los Costos</th>
						<th>Monto Total de la inversión</th>
						<th>Restricción Presupuestal</th>
						
						<th>Dependencia Federal</th>
						<th>Nombre del Programa</th>
						<th>Rubro</th>
						<th>Fuentes de Financiamiento</th>
						<th>Participación porcentaje Municipio</th>
						<th>Participación monto Municipio</th>
						<th>Participación porcentaje Estado</th>
						<th>Participación monto Estado</th>
						<th>Participación porcentaje Federación</th>
						<th>Participación monto Federación</th>
						<th>Participación porcentaje Otro</th>
						<th>Participación monto Otro</th>
						<th>Participación porcentaje Total</th>
						<th>Participación monto Total</th>
						<th>Concentrador del Recurso</th>
						<th>Requisitos a cumplir según reglas de operación/Convocatoria</th>
						<th>Fecha de publicación en el DOF</th>
						<th>Plazo</th>
						<th>Anotación</th>
						
						<th>Factores éxito del proyecto</th>
						<th>Factores riesgo del proyecto</th>
						<th>Factibilidad</th>
						
						
						<th>Justificación Económica</th>
						<th>Análisis Costo Eficiencia Simplificado</th>
						<th>Análisis Costo Eficiencia </th>
						<th>Análisis Costo Beneficio Simplificado </th>
						<th>Análisis Costo Beneficio</th>
						<th>Indicador de Evaluación TIR</th>
						<th>Indicador de Evaluación VPN</th>
						<th>Indicador de Evaluación TRI</th>
						<th>Indicador de Evaluación CAE</th>
						<th>Costo = Beneficio</th>
						<th>Costo < Beneficio</th>
						<th>Costo > Beneficio </th>
						<th>Análisis de Sensibilidad y Riesgo</th>
						<th>Variables a considerar</th>
						<th>Indicador de Rentabilidad VPN</th>
						<th>Indicador de Rentabilidad TRI</th>
						<th>Indicador de Rentabilidad TIR</th>
						<th>Indicador de Rentabilidad CAE</th>
						<th>Dictamen</th>
						
						<th>Evidencia de Monitoreo</th>
						
						<th>Observaciones Generales</th>
						
						<th>Anexos</th>
					";

		/************ Impresión de Resultados  ***********/
				while($row1 = pg_fetch_array($prueba)){	


						echo "</tr><tr>";
						/************ info_general ***********/		
						for($i=0 ; $i<20; $i++)
								echo "<td>". htmlentities($row1[$i]). "</td>";
								
								
						/************ diagnostico ***********/
						for($i=21 ; $i<24; $i++)
								echo "<td>". htmlentities($row1[$i]). "</td>";
								
								
						/************ descripcion***********/
						for($i=25 ; $i<40; $i++)
								echo "<td>". htmlentities($row1[$i]). "</td>";
								
					/************ Beneficios ***********/
						for($i=41 ; $i<46; $i++)
								echo "<td>". htmlentities($row1[$i]). "</td>";
								
					/************ loca ***********/
						
						
						for($i=47 ; $i<50; $i++)
								echo "<td>". htmlentities($row1[$i]). "</td>";
								
					/************ aaspectos ***********/
						for($i=51 ; $i<54; $i++)
								echo "<td>". htmlentities($row1[$i]). "</td>";
								
					/************ Procu ***********/
						for($i=55 ; $i<74; $i++)
								echo "<td>". htmlentities($row1[$i]). "</td>";
				
					/************ analisis ***********/
						for($i=75 ; $i<78; $i++)
								echo "<td>". htmlentities($row1[$i]). "</td>";
					 
					 /************ evaluacion ***********/			
						for($i=79 ; $i<98; $i++)
								echo "<td>". htmlentities($row1[$i]). "</td>";
								
					/************ Título de MOnito ***********/			
								echo "<td>". htmlentities($row1['99']). "</td>";
					
					/************ Título de observaciones ***********/
								echo "<td>". htmlentities($row1['102']). "</td>";
					
					/************ Título de Anexos ***********/
								echo "<td>". htmlentities($row1['105']). "</td>";
								
								
								

								
						echo "</tr><tr>";
				}

				echo "</table>";
				
							
								
				
				
			
				
	}else
	echo "No existe ningún registro que satisfaga su busqueda. Por favor, intentelo nuevamente";		
	
?>
</html>