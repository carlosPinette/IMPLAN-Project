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
		/************ T�tulo de Columnas ***********/
				echo "<tr>
						<th>N�mero de Registro</th>
						<th>Tipo de Registro</th>
						<th>Dependencia o Entidad Responsable</th>
						<th>Dependencia o Entidad de Apoyo</th>
						<th>Nombre del Proyecto</th>
						<th>Objetivo General</th>
						<th>Objetivos Espec�ficos</th>
						<th>Tipo de Proyecto</th>
						<th>Eje del plan Municipal</th>
						<th>Estrategia</th>
						<th>Prioridad</th>
						<th>Criterio</th>
						<th>Clasificaci�n de Asignaci�n de Presupuesto</th>
						<th>Etapa Actual del Proyecto</th>
						<th>Fecha de Inicio de Ejecuci�n</th>
						<th>Fecha de T�rmino de Ejecuci�n</th>
						<th>Informaci�n del Administrador del Proyecto</th>
						<th>�mbito de Impacto</th>
						<th>Proyecto o Programa Complementario</th>
						<th>Fecha de ingreso</th>
						
						
						<th>An�lisis de la situaci�n actual</th>
						<th>An�lisis de la situaci�n sin proyecto</th>
						<th>An�lisis de la situaci�n con proyecto</th>
						
						
						<th>Introducci�n</th>
						<th>Antecedentes </th>
						<th>Resumen del proyecto</th>
						<th>Descripci�n del proyecto</th>
						<th>Justificaci�n </th>
						<th>Marco Jur�dico</th>
						<th>Tiempo estimado de operaci�n del proyecto</th>
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
						
						<th>Macrolocalizaci�n y Microlocalizaci�n</th>
						<th>Direcci�n donde se realizar� el Proyecto</th>
						<th>Certeza Jur�dica de la propiedad</th>
						
						<th>Distribuci�n de los Costos</th>
						<th>Monto Total de la inversi�n</th>
						<th>Restricci�n Presupuestal</th>
						
						<th>Dependencia Federal</th>
						<th>Nombre del Programa</th>
						<th>Rubro</th>
						<th>Fuentes de Financiamiento</th>
						<th>Participaci�n porcentaje Municipio</th>
						<th>Participaci�n monto Municipio</th>
						<th>Participaci�n porcentaje Estado</th>
						<th>Participaci�n monto Estado</th>
						<th>Participaci�n porcentaje Federaci�n</th>
						<th>Participaci�n monto Federaci�n</th>
						<th>Participaci�n porcentaje Otro</th>
						<th>Participaci�n monto Otro</th>
						<th>Participaci�n porcentaje Total</th>
						<th>Participaci�n monto Total</th>
						<th>Concentrador del Recurso</th>
						<th>Requisitos a cumplir seg�n reglas de operaci�n/Convocatoria</th>
						<th>Fecha de publicaci�n en el DOF</th>
						<th>Plazo</th>
						<th>Anotaci�n</th>
						
						<th>Factores �xito del proyecto</th>
						<th>Factores riesgo del proyecto</th>
						<th>Factibilidad</th>
						
						
						<th>Justificaci�n Econ�mica</th>
						<th>An�lisis Costo Eficiencia Simplificado</th>
						<th>An�lisis Costo Eficiencia </th>
						<th>An�lisis Costo Beneficio Simplificado </th>
						<th>An�lisis Costo Beneficio</th>
						<th>Indicador de Evaluaci�n TIR</th>
						<th>Indicador de Evaluaci�n VPN</th>
						<th>Indicador de Evaluaci�n TRI</th>
						<th>Indicador de Evaluaci�n CAE</th>
						<th>Costo = Beneficio</th>
						<th>Costo < Beneficio</th>
						<th>Costo > Beneficio </th>
						<th>An�lisis de Sensibilidad y Riesgo</th>
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

		/************ Impresi�n de Resultados  ***********/
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
								
					/************ T�tulo de MOnito ***********/			
								echo "<td>". htmlentities($row1['99']). "</td>";
					
					/************ T�tulo de observaciones ***********/
								echo "<td>". htmlentities($row1['102']). "</td>";
					
					/************ T�tulo de Anexos ***********/
								echo "<td>". htmlentities($row1['105']). "</td>";
								
								
								

								
						echo "</tr><tr>";
				}

				echo "</table>";
				
							
								
				
				
			
				
	}else
	echo "No existe ning�n registro que satisfaga su busqueda. Por favor, intentelo nuevamente";		
	
?>
</html>