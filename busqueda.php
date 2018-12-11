<?php 

			

	include_once $_SERVER['DOCUMENT_ROOT']."/implan/conexion.php";

	if($_SESSION['privilegio']!=1 )
				{
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
								<a href="logout.php" class="logout">Salir</a>
								

			</div>
			</header>

			<section>
			
				<div id="wrap">
				<a href="index.php" class="home"><img src ="img/home.png" height="48"></a>
					<h1>Búsqueda</h1>

					<form id="busqueda" action="resultados_busqueda.php" method="get">
						<ul>

						<li><label>Número de registro de banco de proyectos</label><input name="noderegistro"/></li>
						<li><label>* Tipo de Registro </label>
											<select class="inputs" name="tipo_registro" id="tipo_registro">
												<option value="">---</option>
												<option value="Programa">Programa</option>
												<option value="Plan">Plan</option>
												<option value="Proyecto">Proyecto</option>
											</select>
						</li>
						<li><label>* Dependencia o Entidad Responsable</label>
										<select class="inputs" name="dependencia" id="dependencia">
											<option value="">---</option>
											<option value="Tesorería Municipal">Tesorería Municipal</option>
											<option value="Secretaría Particular de Presidencia">Secretaría Particular de Presidencia</option>
											<option value="Secretaría de Ayuntamiento">Secretaría de Ayuntamiento</option>
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
										</select>
									</li>
						<li><label>Nombre del programa o proyecto</label><input name="nombre"/></li>
						<li><label>* Tipo de Proyecto o Programa</label>
										<select class="inputs" name="tipo" id="tipo">
											<option value="">---</option>
											<option value="Social">Social</option>
											<option value="Económico">Económico</option>
											<option value="Urbano de Infraestructura">Urbano de Infraestructura</option>
											<option value="Urbano de Infraestructura Social">Urbano de Infraestructura Social</option>
											<option value="Urbano de Inmuebles">Urbano de Inmuebles</option>
											<option value="Ambiental">Ambiental</option>
											<option value="Desarrollo Institucional de Infraestructura Social">Desarrollo Institucional de Infraestructura Social</option>
											<option value="Desarrollo Institucional de Mejoras Administrativas">Desarrollo Institucional de Mejoras Administrativas</option>
											<option value="Desarrollo Institucional de Mejora Regulatoria">Desarrollo Institucional de Mejora Regulatoria</option>
											<option value="Seguridad Pública">Seguridad Pública</option>
											<option value="Otros Proyectos de Inversión">Otros Proyectos de Inversión</option>
										</select>
									</li>
						<li><label>* Eje del Plan Municipal de Desarrollo</label>
										<select class="inputs" name="ejeplan" id="ejeplan">
											<option value="">---</option>
											<option value="Desarrollo Urbano y Metropolitano Sustentable">1. Desarrollo Urbano y Metropolitano Sustentable </option>
											<option value="Comunidad Segura">2. Comunidad Segura</option>
											<option value="Desarrollo Económico Integral">3. Desarrollo Económico Integral</option>
											<option value="Desarrollo Social Incluyente">4. Desarrollo Social Incluyente</option>
											<option value="Mejores Prácticas Municipales">5. Mejores Prácticas Municipales</option>
										</select>
									</li>
						<li><label>Prioridad</label>
										<select class="inputs" name="prioridad" id="prioridad">
											<option value="">---</option>
											<option value="Muy Alta">1= Muy Alta</option>
											<option value="Alta">2= Alta</option>
											<option value="Normal">3= Normal</option>
										</select>
									</li>
						<li><label>* Etapa Actual del Proyecto o Programa</label>
										<select class="inputs" name="etapaactual" id="etapaactual">
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
						<li><label>Monto total de inversión</label><input name="montototal"/></li>
						<li><label>Fecha de captura o ingreso</label><input type="date" name="fechaingreso"/></li>

						<input type="submit" class="boton" value="Buscar"/>	

						</ul>			
					</form>

				</div>
			</section>

			<footer></footer>

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