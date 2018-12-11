<?php


	include_once $_SERVER['DOCUMENT_ROOT']."/implan/conexion.php";
if($_SESSION['privilegio']!=2 )
				{
?>

<!DOCTYPE html>

	<html>

		<head>
			 		<meta charset='utf-8'> 
			 		<link rel="stylesheet" type="text/css" href="estilo.css">
			 		<link rel="stylesheet" href="/implan/js/jquery-ui.css" />
			  		
			  		<script src="/implan/js/jquery-1.9.1.js"></script>
			 		<script src="/implan/js/jquery-ui.js"></script>
			  
					<!--******************************************************************
							Javascript para autocalcular porcentajes de participación
										en Procuración de Fondos
					******************************************************************-->
					<script> 
							    function updatesumdin() {

								/*Se calcula el monto total de dinero primero*/
								document.busqueda.participacion_dinero_total.value = (document.busqueda.participacion_dinero_municipio.value -0) + (document.busqueda.participacion_dinero_estado.value -0)+ (document.busqueda.participacion_dinero_federacion.value -0)+ (document.busqueda.participacion_dinero_otro.value -0);
								
								document.busqueda.participacion_porcentaje_municipio.value = ((document.busqueda.participacion_dinero_municipio.value -0) / (document.busqueda.participacion_dinero_total.value -0))*100;
					 			
								document.busqueda.participacion_porcentaje_estado.value = ((document.busqueda.participacion_dinero_estado.value -0) / (document.busqueda.participacion_dinero_total.value -0))*100;

								document.busqueda.participacion_porcentaje_federacion.value = ((document.busqueda.participacion_dinero_federacion.value -0) / (document.busqueda.participacion_dinero_total.value -0))*100;

								document.busqueda.participacion_porcentaje_otro.value = ((document.busqueda.participacion_dinero_otro.value -0) / (document.busqueda.participacion_dinero_total.value -0))*100;

								document.busqueda.participacion_porcentaje_total.value = (document.busqueda.participacion_porcentaje_municipio.value -0) + (document.busqueda.participacion_porcentaje_estado.value -0)+ (document.busqueda.participacion_porcentaje_federacion.value -0)+ (document.busqueda.participacion_porcentaje_otro.value -0);

							}

							
							
					</script>		

				
			 		<!--******************************************************************
							JQuery para visualización de las secciones divididas 
												en pestañas
					******************************************************************-->
			 		<script>
						$(document).ready(function() 
						{

								for(var i=2; i<=12; i++)
								{
									$(".div_"+i).hide();
								}

								for(var i=2; i<=12; i++)
								{
									$("#boton_"+i).show();
								}


								$("#boton_1,#boton_2,#boton_3,#boton_4,#boton_5,#boton_6,#boton_7,#boton_8,#boton_9,#boton_10,#boton_11,#boton_12").click(function() 
									{
										var temp = $(this).attr('class');
										for(var i=1; i<=12; i++)
										{
											$(".div_"+i).hide();
										}
										$("."+temp).show();
										
										for(var i=1; i<=12; i++)
										{
											$("#boton_"+i).show();
										}
									}
								);

								$("#fuentes_financiamiento").change(function () {
					 				var optionSelected = $("option:selected", this);
		    						var option = this.value;
							    // var option = $("#fuentes_financiamiento").val();
							    if(option === "Otro"){

								    $("#fuentes_financiamiento").attr('name','fuentes_financiamiento1');
								    $("#nousado").attr('name','fuentes_financiamiento');
								    $("#nousado").css('display','block');
								    $("#aparece").css('display','block');

								}
									});


								$("#dependencia_entidad_apoyo").change(function () {
					 				var optionSelected = $("option:selected", this);
		    						var option = this.value;
							    // var option = $("#fuentes_financiamiento").val();
							    if(option === "Otro"){

								    $("#dependencia_entidad_apoyo").attr('name','dependencia_entidad_apoyo1');
								    $("#nousado1").attr('name','dependencia_entidad_apoyo');
								    $("#nousado1").css('display','block');
								    $("#aparece1").css('display','block');

								}
									});
									
								
									$("#dependencia_entidad").change(function () {
					 				var optionSelected = $("option:selected", this);
		    						var option = this.value;
							    if(option === "Otro"){

								    $("#dependencia_entidad").attr('name','dependencia_entidad1');
								    $("#nousado2").attr('name','dependencia_entidad');
								    $("#nousado2").css('display','block');
								    $("#aparece2").css('display','block');

								}
									});	
						
						$("#eje_plan_municipal").change(function () {
					 				var optionSelected = $("option:selected", this);
		    						var option = this.value;
							    if(option === "Otro"){

								    $("#eje_plan_municipal").attr('name','eje_plan_municipal1');
								    $("#nousado3").attr('name','eje_plan_municipal');
								    $("#nousado3").css('display','block');
								    $("#aparece3").css('display','block');

								}
									});	




						}
						);

					</script>



					<!--******************************************************************
							Javascript para la verificación del llenado de los
											campos obligatorios
					******************************************************************-->
					<script>	
			
					    function verifica (){

					    	/* Se verifican los elementos obteniéndolos mediantes sus id, 
					    	por eso es importante que al menos los inputs obligatorios 
					    	cuenten con id. */

					        /*		Tipo de Registro		*/
					        if(document.getElementById("tipo_registro").value=="")
					        {
						        alert("En Información General: \n Tipo de Registro es obligatorio");
						        return false;
						    }

						   /*		Dependencia o Entidad 	*/
						    else if(document.getElementById("dependencia_entidad").value=="")
					        {
						        alert("En Información General: \n Dependencia o Entidad Responsable es obligatoria ");
						        return false;
					    	}

					    	/*		Nombre del Proyecto		*/
					    	else if (document.getElementById("nombre_proyecto").value=="")
					    	{
						        alert("En Información General: \n Nombre del Proyecto o Programa es obligatorio");
						        return false;
					    	}

					    	/*		Objetivo General	*/
					    	else if (document.getElementById("obj_general").value=="")
					    	{
						        alert("En Información General: \n Objetivo General es obligatorio");
						        return false;
					    	}

					    	/*		Tipo del Proyecto	*/
					    	else if (document.getElementById("tipo_proyecto").value=="")
					    	{
						        alert("En Información General: \n Tipo de Proyecto o Programa es obligatorio");
						        return false;
					    	}

					    	/*		Eje del Plan Municipal		*/
					    	else if (document.getElementById("eje_plan_municipal").value=="")
					    	{
						        alert("En Información General: \n Eje del Plan Municipal de Desarrollo es obligatorio");
						        return false;
					    	}

					    	/*		Criterio		*/
					    	else if (document.getElementById("criterio").value=="")
					    	{
						        alert("En Información General: \n Criterio es obligatorio");
						        return false;
					    	}

					    	/*		Etapa Actual del Proyecto	*/
					    	else if (document.getElementById("etapa_actual_proyecto").value=="")
					    	{
						        alert("En Información General: \n Etapa Actual del Proyecto o Programa es obligatoria");
						        return false;
					    	}

					    	/*		Resumen del Proyecto		*/
					    	else if (document.getElementById("resumen_proyecto").value=="")
					    	{
						        alert("En Descripción: \n Resumen del Proyecto es obligatorio");
						        return false;
					    	}

					    	/*		Monto Total de Inversion	*/
					    	else if (document.getElementById("monto_total_inversion").value=="")
					    	{
						        alert("En Aspectos Financieros: \n Monto Total de la inversión obligatoria");
						        return false;
					    	}else
					        	return true;
					    }


					</script>
					
					<script type="text/javascript">
						function show(id){
							document.getElementById(id).style.display = "inline-block";
						}
					</script>

					<script type="text/javascript">
						function hide(id){
							document.getElementById(id).style.display = "none";
						}
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
	<a href="index.php" class="home"><img src ="img/home.png" height="48"></a>
					
					<h1>Registro</h1>
						
						<div class="navv">

							<!-- _______________________________________________
									Menú de los las pestañas de divisiones
							 _______________________________________________ -->
							<ul class="navi">
								<li><a id="boton_1" class="div_1">Información General</a></li>
								<li><a id="boton_2" class="div_2">Diagnóstico</a></li>
								<li><a id="boton_3" class="div_3">Descripción</a></li>
								<li><a id="boton_4" class="div_4">Beneficios</a></li>
								<li><a id="boton_5" class="div_5">Localización Geográfica</a></li>
								<li><a id="boton_6" class="div_6">Aspectos Financieros</a></li>
								<li><a id="boton_7" class="div_7">Procuración de Fondos</a></li>
								<li><a id="boton_8" class="div_8">Análisis de Factibilidad</a></li>
								<li><a id="boton_9" class="div_9">Evaluación</a></li>
								<li><a id="boton_10" class="div_10">Monitoreo</a></li>
								<li><a id="boton_11" class="div_11">Observaciones Generales</a></li>
								<li><a id="boton_12" class="div_12">Anexos</a></li>
							</ul>

						</div>
						

						<form name="busqueda" id="busqueda"  action="inserta_proyecto.php" onsubmit="return verifica()" method="POST" enctype="multipart/form-data">
					

						
						
					<!--******************************************************************
										Sección de Información General
					******************************************************************-->
						
							<ul>	
							<div id="info_general" class="div_1">
							
									<h2>Información General</h2>
										
										<li><label>* Tipo de Registro </label>
											<select class="inputs" name="tipo_registro" id="tipo_registro">
												<option value="">---</option>
												<option value="Programa">Programa</option>
												<option value="Plan">Plan</option>
												<option value="Proyecto">Proyecto</option>
											</select>
										</li>
										
										<li><label>* Dependencia o Entidad Responsable</label>
											<select class="inputs" name="dependencia_entidad" id="dependencia_entidad">
												<option value="">---</option>
												<option value="Tesorería Municipal">Tesorería Municipal</option>
												<option value="Secretaría Particular de Presidencia">Secretaría Particular de Presidencia</option>
												<option value="Secretaría de Ayuntamiento">Secretaría del Ayuntamiento</option>
												<option value="Coordinación General de Transferencia">Coordinación General de Transferencia</option>
												<option value="Secretaría de Administración y Tecnologías de la Información">Secretaría de Administración y Tecnologías de la Información</option>
												<option value="Contraloría Municipal">Contraloría Municipal</option>
												<option value="Secretaría de Gobernación">Secretaría de Gobernación</option>
												<option value="Coordinación de Comunicación Social">Coordinación de Comunicación Social</option>
												<option value="Secretaría de Desarrollo Social y Participación Ciudadana">Secretaría de Desarrollo Social y Participación Ciudadana</option>
												<option value="Sindicatura Municipal">Sindicatura Municipal</option>
												<option value="Industrial de Abastos Puebla">Industrial de Abastos Puebla</option>
												<option value="Secretaría de Desarrollo Económico y Turismo">Secretaría de Desarrollo Económico y Turismo</option>
												<option value="Secretaría de Desarrollo Urbano y Obras Públicas">Secretaría de Desarrollo Urbano y Obras Públicas</option>
												<option value="Secretaría de Seguridad Pública y Tránsito Municipal">Secretaría de Seguridad Pública y Tránsito Municipal</option>
												<option value="Secretaría de Medio Ambiente y Servicios Públicos">Secretaría de Medio Ambiente y Servicios Públicos</option>
												<option value="Instituto de la Juventud del Municipio de Puebla">Instituto de la Juventud del Municipio de Puebla</option>
												<option value="Instituto Municipal de las Mujeres">Instituto Municipal de las Mujeres</option>
												<option value="Instituto Municipal de Planeación">Instituto Municipal de Planeación</option>
												<option value="Instituto Municipal de Arte y Cultura">Instituto Municipal de Arte y Cultura</option>
												<option value="Instituto Municipal del Deporte">Instituto Municipal del Deporte</option>
												<option value="Instituto Municipal DIF">Instituto Municipal DIF</option>
												<option value="Organismo Operador del Servicio de Limpia">Organismo Operador del Servicio de Limpia</option>
												<option value="Otro">Otro</option>
											</select>
										<label id="aparece2" style="display:none;margin: 10px 0px -25px 190px;">Especifique</label><input type="text" id="nousado2" name="nousada2" style="display: none;margin:  9px 93px 15px 304px; width: 300px;"/>
										</li>

										<li><label>Dependencia o Entidad de Apoyo</label>
											<select class="inputs" name="dependencia_entidad_apoyo" id="dependencia_entidad_apoyo">
												<option value="">---</option>
												<option value="Tesorería Municipal">Tesorería Municipal</option>
												<option value="Secretaría Particular de Presidencia">Secretaría Particular de Presidencia</option>
												<option value="Secretaría de Ayuntamiento">Secretaría del Ayuntamiento</option>
												<option value="Coordinación General de Transferencia">Coordinación General de Transferencia</option>
												<option value="Secretaría de Administración y Tecnologías de la Información">Secretaría de Administración y Tecnologías de la Información</option>
												<option value="Contraloría Municipal">Contraloría Municipal</option>
												<option value="Secretaría de Gobernación">Secretaría de Gobernación</option>
												<option value="Coordinación de Comunicación Social">Coordinación de Comunicación Social</option>
												<option value="Secretaría de Desarrollo Social y Participación Ciudadana">Secretaría de Desarrollo Social y Participación Ciudadana</option>
												<option value="Sindicatura Municipal">Sindicatura Municipal</option>
												<option value="Industrial de Abastos Puebla">Industrial de Abastos Puebla</option>
												<option value="Secretaría de Desarrollo Económico y Turismo">Secretaría de Desarrollo Económico y Turismo</option>
												<option value="Secretaría de Desarrollo Urbano y Obras Públicas">Secretaría de Desarrollo Urbano y Obras Públicas</option>
												<option value="Secretaría de Seguridad Pública y Tránsito Municipal">Secretaría de Seguridad Pública y Tránsito Municipal</option>
												<option value="Secretaría de Medio Ambiente y Servicios Públicos">Secretaría de Medio Ambiente y Servicios Públicos</option>
												<option value="Instituto de la Juventud del Municipio de Puebla">Instituto de la Juventud del Municipio de Puebla</option>
												<option value="Instituto Municipal de las Mujeres">Instituto Municipal de las Mujeres</option>
												<option value="Instituto Municipal de Planeación">Instituto Municipal de Planeación</option>
												<option value="Instituto Municipal de Arte y Cultura">Instituto Municipal de Arte y Cultura</option>
												<option value="Instituto Municipal del Deporte">Instituto Municipal del Deporte</option>
												<option value="Instituto Municipal DIF">Instituto Municipal DIF</option>
												<option value="Organismo Operador del Servicio de Limpia">Organismo Operador del Servicio de Limpia</option>
												<option value="Otro">Otro</option>
											</select>
											<br>
											<label id="aparece1" style="display:none;margin: 10px 0px -25px 190px;">Especifique</label><input type="text" id="nousado1" name="nousada1" style="display: none;margin: 9px 93px 15px 304px; width: 300px;"/>
										</li>
										<br><br>

										<li><label>* Nombre del Proyecto o Programa</label><input type="text" name="nombre_proyecto" id="nombre_proyecto"/></li>

										<li><label>* Objetivo General</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="obj_general" id="obj_general"></textarea></li><br><br><br><br>

										<li><label>Objetivos Específicos</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="obj_especificos"
											id="obj_especificos" ></textarea></li><br><br><br><br><br>

										<li><label>* Tipo de Proyecto o Programa</label>
											<select class="inputs" name="tipo_proyecto" id="tipo_proyecto">
												<option value="">---</option>
												<option value="Social">Social</option>
												<option value="Económico">Económico</option>
												<option value="Urbano de Infraestructura">Urbano de Infraestructura</option>
												<option value="Urbano de Infraestructura Social">Urbano de Infraestructura Social</option>
												<option value="Urbano de Inmuebles">Urbano de Inmuebles</option>
												<option value="Ambiental">Ambiental</option>
												<option value="Desarrollo Institucional de Infraestructura Gubernamental">Desarrollo Institucional de Infraestructura Gubernamental</option>
												<option value="Desarrollo Institucional de Mejoras Administrativas">Desarrollo Institucional de Mejoras Administrativas</option>
												<option value="Desarrollo Institucional de Mejora Regulatoria">Desarrollo Institucional de Mejora Regulatoria</option>
												<option value="Seguridad Pública">Seguridad Pública</option>
												<option value="Otros Proyectos de Inversión">Otros Proyectos de Inversión</option>
											</select>
										</li>

										<li><label>* Eje del Plan Municipal de Desarrollo</label>
											<select class="inputs" name="eje_plan_municipal" id="eje_plan_municipal">
												<option value="">---</option>
												<option value="1.Desarrollo Urbano y Metropolitano Sustentable">1. Desarrollo Urbano y Metropolitano Sustentable </option>
												<option value="2.Comunidad Segura">2. Comunidad Segura</option>
												<option value="3.Desarrollo Económico Integral">3. Desarrollo Económico Integral</option>
												<option value="4.Desarrollo Social Incluyente">4. Desarrollo Social Incluyente</option>
												<option value="5.Mejores Prácticas Municipales">5. Mejores Prácticas Municipales</option>
												<option value="Otro">Otro</option>
											</select>
										<label id="aparece3" style="display:none;margin: 10px 0px -25px 190px;">Especifique</label><input type="text" id="nousado3" name="nousada3" style="display: none;margin: 9px 93px 15px 304px; width: 300px;"/>
										<!--20px 0px -25px 190px;  input  20px 93px 0px 304px-->
										</li>

										<li><label>Estrategia y línea de acción que atiende el programa o proyecto</label><textarea class="inputs" rows="4" cols="50" style="resize:none" name="estrategia" id="estrategia"></textarea></li><br><br><br><br>

										<li><label>Prioridad</label>
											<select class="inputs" name="prioridad" id="prioridad">
												<option value="">---</option>
												<option value="Muy Alta">1= Muy Alta</option>
												<option value="Alta">2= Alta</option>
												<option value="Normal">3= Normal</option>
											</select>
										</li>

										<li><label>*Criterio</label>
											<select class="inputs" name="criterio" id="criterio">
												<option value="">---</option>
												<option value="Rentabilidad Socioeconómica">Rentabilidad Socioeconómica</option>
												<option value="Reducción de la pobreza extrema">Reducción de la pobreza extrema</option>
												<option value="Desarrollo Regional">Desarrollo Regional</option>
												<option value="Concurrencia con otros proyectos y programas de inversión">Concurrencia con otros proyectos y programas de inversión</option>
												<option value="Otros">Otros</option>
											</select>
										</li>

										<li><label>Clasificación para la Asignación de Presupuesto</label>
											<select class="inputs" name="clasificacion_asignacion_presupuesto" id="clasificacion_asignacion_presupuesto">
												<option value="">---</option>
												<option value="Proyectos en Ejecución">Proyectos en Ejecución</option>
												<option value="Proyectos de Mantenimiento">Proyectos de Mantenimiento</option>
												<option value="Nuevo">Nuevo</option>
											</select>
										</li>

										<li><label>* Etapa Actual del Proyecto o Programa</label>
											<select class="inputs" name="etapa_actual_proyecto" id="etapa_actual_proyecto">
												<option value="">---</option>
												<option value="Idea">Idea</option>
												<option value="Diseño">Diseño</option>
												<option value="Aprobación">Aprobación</option>
												<option value="Programación">Programación</option>
												<option value="Presupuestación">Presupuestación</option>
												<option value="Procuración de Fondos">Procuración de Fondos</option>
												<option value="Preinversión">Preinversión</option>
												<option value="Inversión">Inversión</option>
												<option value="Contratación">Contratación</option>
												<option value="Ejecución">Ejecución</option>
												<option value="Evaluación">Evaluación</option>
												<option value="Concluido">Concluido</option>
												<option value="Cancelado">Cancelado</option>
											</select>
										</li>
										<dl>
											<dt><li>Etapa de Ejecución</li></dt>
													<dd><li><label>Fecha de Inicio</label><input type="date" name="etapa_ejecucion_inicio" id="etapa_ejecucion_inicio"/></li></dd>
													<dd><li><label>Fecha de Término</label><input type="date" name="etapa_ejecucion_fin" id="etapa_ejecucion_fin"/></li></dd>

										</dl>
								
										<dl>
											<dt><li>Datos del Administrador del Proyecto</li></dt>
											<dd><li>(Nombre, Cargo, Teléfono, Correo)<input type="text" name="admin_proyecto_info" id="admin_proyecto_info"/></li></dd>										
										</dl>
										
										<li><label>Ámbito de Impacto</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="ambito_impacto" id="ambito_impacto"></textarea></li><br><br><br><br>

										<li><label>Proyecto o programa complementario</label><input type="text" name="proyecto_programa_complementario" id="proyecto_programa_complementario"/></li>
										
							</div>
						
					<!--******************************************************************
										Sección de Diagnóstico
					******************************************************************-->
							<div id="diagnostico" class="div_2">

									<h2>Diagnóstico</h2>

										<dl>
											<dt><li>Análisis de la situación actual</li></dt>
													<dd><li><label>Descripción de la problemática<br>Análisis de la Oferta<br>Análisis de la Demanda</label><input type="file" name="analisissituacionactual" id="analisissituacionactual"/></li></dd>				
													<br><br>
										</dl>

										<dl>
											<dt><li>Análisis de la situación sin proyecto</li></dt>
													<dd><li><label>Posibles medidas de optimización<br>Análisis de la Oferta<br>Análisis de la Demanda<br>Alternativas de Solución (descripción, justificación y costo )</label><input type="file" name="analisissituacionsinproyecto" id="analisissituacionsinproyecto"/></li></dd>
													<br><br><br>
										</dl>


										<dl>
											<dt><li>Análisis de la situación con proyecto</li></dt>
													<dd><li><label>Descripción de la situación<br>Análisis de la Oferta<br>Análisis de la Demanda</label><input type="file" name="analisissituacionconproyecto" id="analisissituacionconproyecto"/></li></dd>
													<br><br><br>
										</dl>
							
							</div>


					<!--******************************************************************
										Sección de Descripción
					******************************************************************-->
							<div id="descripcion" class="div_3">

									<h2>Descripción</h2>

										<li><label>Introducción</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="introduccion" id="introduccion"></textarea></li>
										<br><br><br>
										<li><label>Antecedentes</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="antecedentes" id="antecedentes"></textarea></li>
										<br><br><br>
										<li><label>* Resumen del Proyecto</label><textarea class="inputs" rows="5" cols="50" style="resize:none" name="resumen_proyecto" id="resumen_proyecto"></textarea></li><br><br><br><br>
										<br>
										<li><label>Descripción del Proyecto</label><input type="file"  name="descripcionproyecto" id="descripcionproyecto"/></li>
										
										<li><label>Justificación</label><input type="file" name="justificacion" id="justificacion"/></li>

										<li><label>Marco Jurídico</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="marcojuridico" id="marcojuridico"></textarea></li>
										<br><br><br>
										<li><label>Tiempo estimado de operación del proyecto</label><input type="text" name="tiempo_vida" id="tiempo_vida"/></li>

										<li><label>Recursos Humanos</label><input type="number" step="any" min="0" name="recursos_humanos" id="recursos_humanos"/></li>

										<li><label>Recursos Materiales</label><textarea class="inputs" rows="2" cols="50" style="resize:none" name="recursos_materiales" id="recursos_materiales"></textarea></li><br><br><br><br>

										<li><label>Infraestructura Disponible</label><textarea class="inputs" rows="2" cols="50" style="resize:none" name="infraestructura" id="infraestructura"></textarea></li><br><br><br><br>

										<li><label>Estudios necesarios para realizar el Proyecto</label><textarea class="inputs" rows="3" cols="50" style="resize:none" name="estudios_proyecto" id="estudios_proyecto"></textarea></li><br><br><br><br>

										<li><label>Acciones a realizar</label><textarea class="inputs" rows="3" cols="50" style="resize:none" name="acciones" id="acciones"></textarea></li><br><br><br><br>

										<li><label>Calendario de las acciones  (Cronograma)</label><input type="file" name="calendarioacciones" id="calendarioacciones"/></li>

										<li><label>Metas del Programa o Proyecto</label><textarea class="inputs" rows="3" cols="50" style="resize:none" name="metas" id="metas"></textarea></li><br><br><br><br>

										<li><label>Resultados esperados</label><textarea class="inputs" rows="3" cols="50" style="resize:none" name="resultados" id="resultados"></textarea></li><br><br><br><br>

							</div>
						
					<!--******************************************************************
										Sección de Beneficios
					******************************************************************-->

							<div id="beneficios" class="div_4">

									<h2>Beneficios</h2>

										<li><label>Beneficios Esperados</label><textarea class="inputs" rows="3" cols="50" style="resize:none" name="beneficios" id="beneficios"></textarea></li><br><br>
										
										<li><label>Beneficiados directos</label><input type="number" step="any" min="0" name="beneficiados_directos" id="beneficiados_directos"/></li>

										<li><label>Beneficiados indirectos</label><input type="number" step="any" min="0" name="beneficiados_indirectos" id="beneficiados_indirectos"/></li>

										<li><label>Viviendas beneficiadas</label><input type="number" step="any" min="0" name="viviendas_beneficiadas" id="viviendas_beneficiadas"/></li>

										<li><label>Costo Anual de los Beneficios</label><input type="number" step="any" min="0" name="costo_anual_beneficios" id="costo_anual_beneficios"/></li>
							</div>
						
						
					<!--******************************************************************
										Sección de Localización Geográfica
					******************************************************************-->
							<div id="localizacion_geografica" class="div_5">

									<h2>Localización Geográfica</h2>

										<li><label>Macrolocalización y Microlocalización </label><input type="file" name="micromacro" id="micromacro"/></li>

										<li><label>Dirección donde se realizará el Proyecto o Programa</label><textarea class="inputs" rows="3" cols="50" style="resize:none" name="direccion" id="direccion"></textarea></li><br><br><br><br>

										<li><label>Certeza Jurídica de la propiedad</label><input type="file" name="certezajuridicalocalizacion" id="certezajuridicalocalizacion"/></li>

							</div> 



					<!--******************************************************************
										Sección de Aspectos Financieros
					******************************************************************-->
							<div id="aspectos_financieros" class="div_6">

									<h2>Aspectos Financieros</h2>

										<li><label>Distribución de los Costos (Descripción y monto)</label><input type="file" name="distribucioncostos" id="distribucioncostos"/></li>

										<li><label>* Monto Total de la Inversión</label><input type="number" step="any" min="0" name="monto_total_inversion" id="monto_total_inversion"/></li>

										<li><label>Restricción Presupuestal</label><textarea class="inputs"  rows="4" cols="50" style="resize:none" name="restriccion_presupuestal" id="restriccion_presupuestal"></textarea></li><br><br><br>

							</div>

						
					<!--******************************************************************
										Sección de Procuración de Fondos
					******************************************************************-->
							<div id="procuracion_fondos" class="div_7">

									<h2>Procuración de Fondos</h2>

										
										<li><label>Dependencia Federal</label><input type="text" name="dependencia_federal" id="dependencia_federal"/></li>
										
										<li><label>Nombre del Programa</label><input type="text" name="nombre_programa" id="nombre_programa"/></li>
										
										<li><label>Rubro</label><input type="text" name="rubro" id="rubro"/></li>
										
										<li><label>Fuentes de Financiamiento</label>
											<select  class="inputs" name="fuentes_financiamiento" id="fuentes_financiamiento">
													<option value="">---</option>
													<option value="Programa Federal">Programa Federal</option>
													<option value="Programa Estatal">Programa Estatal</option>
													<option value="Recursos Propios">Recursos Propios</option>
													<option value="Deuda">Deuda</option>
													<option value="Donación">Donación</option>
													<option value="Otro">Otro</option>
											</select>
											<label id="aparece" style="display:none;margin: 10px 0px -25px 190px;">Especifique</label><input type="text" id="nousado" name="nousada" style="display: none;margin: 9px 93px 15px 304px;width: 300px;"/>
										</li>

										
										<dl>
											<dt><li>Participación de los Recursos</li></dt>

													<dd><li><label></label><input type="text" max="100" min="0" name="1" value="Porcentaje %" id="cabe" readonly/><input type="text" min="0" name="2" value="Monto $"  id="cabe" readonly/></li></dd>


													<dd><li><label>Municipio</label><input type="text" max="100" min="0" name="participacion_porcentaje_municipio" id="participacion_porcentaje_municipio" readonly/><input onChange="updatesumdin()" type="number" step="any" min="0" name="participacion_dinero_municipio" id="participacion_dinero_municipio"/></li></dd>
													
													<dd><li><label>Estado</label><input type="text" max="100" min="0" name="participacion_porcentaje_estado" id="participacion_porcentaje_estado" readonly/><input onChange="updatesumdin()" type="number" step="any" min="0" name="participacion_dinero_estado" id="participacion_dinero_estado"/></li></dd>
													
													<dd><li><label>Federación</label><input type="text" max="100" min="0" name="participacion_porcentaje_federacion" id="participacion_porcentaje_federacion" readonly/><input onChange="updatesumdin()" type="number" step="any" min="0" name="participacion_dinero_federacion" id="participacion_dinero_federacion"/></li></dd>

													<dd><li><label>Otro</label><input type="text" max="100" min="0" name="participacion_porcentaje_otro" id="participacion_porcentaje_otro" readonly/><input onChange="updatesumdin()" type="number" step="any" min="0" name="participacion_dinero_otro" id="participacion_dinero_otro"/></li></dd>

													<dd><li><label>Total</label><input type="text" max="100" min="0" name="participacion_porcentaje_total" id="participacion_porcentaje_total" readonly/><input type="text" min="0" name="participacion_dinero_total" id="participacion_dinero_total" readonly/></li></dd>

										</dl>
										
										
										<li><label>Concentrador del Recurso</label><input type="text" name="concentrador_recurso" id="concentrador_recurso"/></li>
										
										<li><label>Requisitos a cumplir según reglas de operación/Convocatoria</label><input type="text" name="convocatoria" id="convocatoria"/></li>
										
										<li><label>Fecha de publicación en el DOF</label><input type="date" name="fecha_publicacion" id="fecha_publicacion"/></li>
										
										<li><label>Plazo</label><input type="text" name="plazo" id="plazo"/></li>
										
										<li><label>Anotación</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="anotacion" id="anotacion"></textarea></li><br><br><br><br>

							</div>


					<!--******************************************************************
										Sección de Análisis de Factibilidad
					******************************************************************-->
							<div id="analisis_factibilidad" class="div_8">

									<h2>Análisis de Factibilidad</h2>
										
										<dl>
											<dt><li>Factores de Éxito del Proyecto</li></dt>

													<dd><li><label>Técnicos, Económicos, Sociales<br>Políticos, Jurídicos, Ambientales <br>Organizacionales</label><input type="file" name="factoresexitoproyecto" id="factoresexitoproyecto"/></li></dd>
													<br><br>
										</dl>

										<dl>
											<dt><li>Factores de Riesgo del Proyecto</li></dt>

													<dd><li><label>Técnicos, Económicos, Sociales<br>Políticos, Jurídicos, Ambientales<br>Organizacionales</label><input type="file" name="factoresriesgoproyecto" id="factoresriesgoproyecto"/></li></dd>
													<br><br>
										</dl>

										<dl>

											<dt><li>Factibilidad</li></dt>

													<dd><li><label>Técnica, Económica, Social <br>Política</label><input type="file" name="factibilidad" id="factibilidad"/></li></dd>

										</dl>

							</div>

						

					<!--******************************************************************
										Sección de Evaluación
					******************************************************************-->
							<div id="evaluacion" class="div_9">	

									<h2>Evaluación</h2>						

										<dl>
											<dt><li>Tipos</li></dt>
										
												<dd><li><label>Justificación Económica</label><input type="file" name="justificacioneconomica" id="justificacioneconomica"/></li></dd>

												<dd><li><label>Análisis Costo Eficiencia Simplificado</label><input type="file" name="analisiscostoeficienciasim" id="analisiscostoeficienciasim"/></li></dd>
												
												<dd><li><label>Análisis Costo Eficiencia</label><input type="file" name="analisiscostoeficiencia" id="analisiscostoeficiencia"/></li></dd>

												<dd><li><label>Análisis Costo Beneficio Simplificado</label><input type="file" name="analisiscostobeneficiosim" id="analisiscostobeneficiosim"/></li></dd>

												<dd><li><label>Análisis Costo Beneficio</label><input type="file" name="analisiscostobeneficio" id="analisiscostobeneficio"/></li></dd>

										</dl>

										<dl>
											<dt><li>Indicadores de Evaluación</li></dt>
										
												<dd><li><label>TIR</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="evaluaciontir" id="evaluaciontir"></textarea></li></dd>
												<br><br><br>
												<dd><li><label>VPN</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="evaluacionvpn" id="evaluacionvpn"></textarea></li></dd>
												<br><br><br>
												<dd><li><label>TRI</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="evaluaciontri" id="evaluaciontri"></textarea></li></dd>
												<br><br><br>
												<dd><li><label>CAE</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="evaluacioncae" id="evaluacioncae"></textarea></li></dd>
												<br><br><br>
										</dl>

										<dl>
											<dt><li>Situaciones</li></dt>
										
												<dd><li><label>Costo = Beneficio </label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="costoigualbeneficio" id="costoigualbeneficio"></textarea></li></dd>
												<br><br><br>
												<dd><li><label>Costo < Beneficio </label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="costomenorbeneficio" id="costomenorbeneficio"></textarea></li></dd>
												<br><br><br>
												<dd><li><label>Costo > Beneficio </label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="costomayorbeneficio" id="costomayorbeneficio"></textarea></li></dd>
												<br><br><br>
										</dl>

										<li><label>Análisis de Sensibilidad y Riesgo</label><input type="file" name="analisissensibilidad" id="analisissensibilidad"/></li>

										<li><label>Variables a considerar</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="analisisvariables" id="analisisvariables"></textarea></li>
										<br><br><br>
										<dl>
											<dt><li>Indicadores de Rentabilidad del Proyecto</li></dt>
										
												<dd><li><label>VPN</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="rentavpn" id="rentavpn"></textarea></li></dd>
												<br><br><br>
												<dd><li><label>TRI</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="rentatri" id="rentatri"></textarea></li></dd>
												<br><br><br>
												<dd><li><label>TIR</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="rentatir" id="rentatir"></textarea></li></dd>
												<br><br><br>
												<dd><li><label>CAE</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="rentacae" id="rentacae"></textarea></li></dd>
												<br><br><br>
										</dl>

										<li><label>Dictamen</label>
												<select class="inputs" name="dictamen" id="dictamen">
														<option value="">---</option>
														<option value="Positivo">Positivo</option>
														<option value="Negativo">Negativo</option>
												</select>
										</li>

							</div>

						
					<!--******************************************************************
										Sección de Monitoreo
					******************************************************************-->
							<div id="monitoreo" class="div_10">

									<h2>Monitoreo</h2>
										
										<li><label>Evidencia</label><input type="file" name="evidencia" id="evidencia"/></li>

							</div>

					<!--******************************************************************
										Sección de Observaciones Generales
					******************************************************************-->
							<div id="observaciones_generales" class="div_11">

									<h2>Observaciones Generales</h2>
										
										<li><label>Observaciones</label><textarea class="inputs" rows="6" cols="50" style="resize:none" name="ob1" id="ob1"></textarea></li><br><br><br><br>

							</div>

					<!--******************************************************************
										Sección de Anexos
					******************************************************************-->
							<div id="anexos" class="div_12">

									<h2>Anexos</h2>
										
									<li><label>Anexo 1</label><input type="file" name="anexo1" id="anexo1"/>

									<button id ="boton1" type="button" onclick="show('anexo2'); show('boton2'); show('boton22'); hide('boton1');">+</button></li>

									<li id="anexo2" style="display:none;"><label>Anexo 2</label><input type="file" name="anexo2" id="anexo2"/>
									
									<button id ="boton2" style="display:none;"type="button" onclick="show('anexo3'); show('boton3'); show('boton33'); hide('boton2'); hide('boton22');">+</button>

									<button id ="boton22" style="display:none;"type="button" onclick="hide('anexo2'); hide('boton22'); hide('boton2'); show('boton1');">-</button>
									
									</li>
									<li id="anexo3" style="display:none;"><label>Anexo 3</label><input type="file" name="anexo3" id="anexo3"/>
									
									<button id ="boton3" style="display:none;"type="button" onclick="show('anexo4'); show('boton4'); show('boton44'); hide('boton3'); hide('boton33');">+</button>

									<button id ="boton33" style="display:none;"type="button" onclick="hide('anexo3'); hide('boton33'); hide('boton3'); show('boton2'); show('boton22');">-</button></li>

									<li id="anexo4" style="display:none;"><label>Anexo 4</label><input type="file" name="anexo4" id="anexo4"/>

									<button id ="boton4" style="display:none;"type="button" onclick="show('anexo5'); show('boton5'); show('boton55'); hide('boton4'); hide('boton44');">+</button>

									<button id ="boton44" style="display:none;"type="button" onclick="hide('anexo4'); hide('boton44'); hide('boton4'); show('boton3'); show('boton33');">-</button>
									</li>
									<li id="anexo5" style="display:none;"><label>Anexo 5</label><input type="file" name="anexo5" id="anexo5"/>

									<button id ="boton5" style="display:none;"type="button" onclick="show('anexo6'); show('boton6'); show('boton66'); hide('boton5'); hide('boton55');">+</button>

									<button id ="boton55" style="display:none;"type="button" onclick="hide('anexo5'); hide('boton55'); hide('boton5'); show('boton4'); show('boton44');">-</button>
									</li>
									<li id="anexo6" style="display:none;"><label>Anexo 6</label><input type="file" name="anexo6" id="anexo6"/>

									<button id ="boton6" style="display:none;"type="button" onclick="show('anexo7'); show('boton7'); show('boton77'); hide('boton6'); hide('boton66');">+</button>

									<button id ="boton66" style="display:none;"type="button" onclick="hide('anexo6'); hide('boton66'); hide('boton6'); show('boton5'); show('boton55');">-</button>
									</li>
									<li id="anexo7" style="display:none;"><label>Anexo 7</label><input type="file" name="anexo7" id="anexo7"/>

									<button id ="boton7" style="display:none;"type="button" onclick="show('anexo8'); show('boton8'); show('boton88'); hide('boton7'); hide('boton77');">+</button>

									<button id ="boton77" style="display:none;"type="button" onclick="hide('anexo7'); hide('boton77'); hide('boton7'); show('boton6'); show('boton66');">-</button>
									</li>
									<li id="anexo8" style="display:none;"><label>Anexo 8</label><input type="file" name="anexo8" id="anexo8"/>

									<button id ="boton8" style="display:none;"type="button" onclick="show('anexo9'); show('boton9'); show('boton99'); hide('boton8'); hide('boton88');">+</button>

									<button id ="boton88" style="display:none;"type="button" onclick="hide('anexo8'); hide('boton88'); hide('boton8'); show('boton7'); show('boton77');">-</button>
									</li>
									<li id="anexo9" style="display:none;"><label>Anexo 9</label><input type="file" name="anexo9" id="anexo9"/>

									<button id ="boton9" style="display:none;"type="button" onclick="show('anexo10'); show('boton1010'); hide('boton9'); hide('boton99')">+</button>

									<button id ="boton99" style="display:none;"type="button" onclick="hide('anexo9'); hide('boton99'); hide('boton9'); show('boton8'); show('boton88');">-</button>
									</li>
									<li id="anexo10" style="display:none;"><label>Anexo 10</label><input type="file" name="anexo10" id="anexo10"/>

									<button id ="boton1010" style="display:none;"type="button" onclick="hide('anexo10'); hide('boton1010'); show('boton9'); show('boton99');">-</button>
									</li>
							</div>
			
								* Campos de llenado obligatorio

								<input type="submit" class="boton" value="Enviar"/>	
							

							</ul>
							
						</form>

				</div> <!-- div id= "wrap" -->

			</section>

			<footer>
			</footer>

		</body>
</html>


<?php

}
else
{
	    echo '<script> 
	    window.alert("No estás autorizado");

	    window.location = "/implan/index.php"; </script>';

}

?>