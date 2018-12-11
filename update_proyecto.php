<?php
	include_once $_SERVER['DOCUMENT_ROOT']."/implan/conexion.php";
		$id=$_SESSION['id'];



		/*________________________________________________________________
						REQUEST de las variables del formulario
							para hacerlas variables php
		________________________________________________________________*/
		

		/*****************************************************************
							Sección de Información General
		******************************************************************/
			$tipo_registro =  $_REQUEST['tipo_registro'];
			$dependencia_entidad =  $_REQUEST['dependencia_entidad'];
			$dependencia_entidad_apoyo = $_REQUEST['dependencia_entidad_apoyo'];
			$nombre_proyecto = pg_escape_string($_REQUEST['nombre_proyecto']);
			$obj_general = pg_escape_string($_REQUEST['obj_general']);
			$obj_especificos = pg_escape_string($_REQUEST['obj_especificos']);
			$tipo_proyecto = $_REQUEST['tipo_proyecto'];
			$eje_plan_municipal = $_REQUEST['eje_plan_municipal'];
			$estrategia = pg_escape_string($_REQUEST['estrategia']);
			$prioridad = $_REQUEST['prioridad'];
			$criterio = $_REQUEST['criterio'];
			$clasificacion_asignacion_presupuesto = $_REQUEST['clasificacion_asignacion_presupuesto'];
			$etapa_actual_proyecto = $_REQUEST['etapa_actual_proyecto'];
			$etapa_ejecucion_inicio = $_REQUEST['etapa_ejecucion_inicio'];
			$etapa_ejecucion_fin = $_REQUEST['etapa_ejecucion_fin'];
			$admin_proyecto_info =  pg_escape_string($_REQUEST['admin_proyecto_info']);
			$ambito_impacto =  pg_escape_string($_REQUEST['ambito_impacto']);
			$proyecto_programa_complementario = pg_escape_string($_REQUEST['proyecto_programa_complementario']);
	

		/*****************************************************************
							Sección de Diagnóstico
		******************************************************************/
			/*$analisissituacionactual = $_REQUEST['analisissituacionactual'];
			$analisissituacionsinproyecto = $_REQUEST['analisissituacionsinproyecto'];
			$analisissituacionconproyecto = $_REQUEST['analisissituacionconproyecto'];*/
			

		/*****************************************************************
							Sección de Descripción
		******************************************************************/	
			$introduccion = pg_escape_string($_REQUEST['introduccion']);
			$antecedentes = pg_escape_string($_REQUEST['antecedentes']);
			$resumen_proyecto = pg_escape_string($_REQUEST['resumen_proyecto']);
			//$descripcionproyecto = $_REQUEST['descripcionproyecto'];
			//$justificacion = $_REQUEST['justificacion'];
			$marcojuridico = pg_escape_string($_REQUEST['marcojuridico']);
			$tiempo_vida = pg_escape_string($_REQUEST['tiempo_vida']);
			$recursos_humanos = $_REQUEST['recursos_humanos'];
			$recursos_materiales = pg_escape_string($_REQUEST['recursos_materiales']);
			$infraestructura = pg_escape_string($_REQUEST['infraestructura']);
			$estudios_proyecto = pg_escape_string($_REQUEST['estudios_proyecto']);
			$acciones = pg_escape_string($_REQUEST['acciones']);
			//$calendarioacciones = $_REQUEST['calendarioacciones'];
			$metas = pg_escape_string($_REQUEST['metas']);
			$resultados = pg_escape_string($_REQUEST['resultados']);
		

		/*****************************************************************
							Sección de Beneficios
		******************************************************************/	
			$beneficios = pg_escape_string($_REQUEST['beneficios']);
			$beneficiados_directos = $_REQUEST['beneficiados_directos'];
			$beneficiados_indirectos = $_REQUEST['beneficiados_indirectos'];
			$viviendas_beneficiadas = $_REQUEST['viviendas_beneficiadas'];
			$costo_anual_beneficios = $_REQUEST['costo_anual_beneficios'];
		
		
		/*****************************************************************
							Sección de Localización Geográfica
		******************************************************************/	
			//$micromacro = $_REQUEST['micromacro'];
			$direccion = pg_escape_string($_REQUEST['direccion']);
			//$certezajuridicalocalizacion = $_REQUEST['certezajuridicalocalizacion'];
		
		
		/*****************************************************************
					Sección de Localización Aspectos Financieros
		******************************************************************/	
			//$distribucioncostos = $_REQUEST['distribucioncostos'];
			$monto_total_inversion = $_REQUEST['monto_total_inversion'];
			$restriccion_presupuestal =  pg_escape_string($_REQUEST['restriccion_presupuestal']);
			


		/*****************************************************************
							Sección de Procuracion de Fondos
		******************************************************************/
			$dependencia_federal =  pg_escape_string($_REQUEST['dependencia_federal']);
			$nombre_programa =  pg_escape_string($_REQUEST['nombre_programa']);
			$rubro =  pg_escape_string($_REQUEST['rubro']);
			$fuentes_financiamiento = pg_escape_string($_REQUEST['fuentes_financiamiento']);
			$participacion_porcentaje_municipio = $_REQUEST['participacion_porcentaje_municipio'];
			$participacion_dinero_municipio = $_REQUEST['participacion_dinero_municipio'];
			$participacion_porcentaje_estado = $_REQUEST['participacion_porcentaje_estado'];
			$participacion_dinero_estado = $_REQUEST['participacion_dinero_estado'];
			$participacion_porcentaje_federacion = $_REQUEST['participacion_porcentaje_federacion'];
			$participacion_dinero_federacion = $_REQUEST['participacion_dinero_federacion'];
			$participacion_porcentaje_otro = $_REQUEST['participacion_porcentaje_otro'];
			$participacion_dinero_otro = $_REQUEST['participacion_dinero_otro'];
			$participacion_porcentaje_total = $_REQUEST['participacion_porcentaje_total'];
			$participacion_dinero_total = $_REQUEST['participacion_dinero_total'];
			$concentrador_recurso = pg_escape_string($_REQUEST['concentrador_recurso']);
			$convocatoria = pg_escape_string($_REQUEST['convocatoria']);
			$fecha_publicacion = $_REQUEST['fecha_publicacion'];
			$plazo = pg_escape_string($_REQUEST['plazo']);
			$anotacion = pg_escape_string($_REQUEST['anotacion']);
			
			

		/*****************************************************************
							Sección de Analisis de Factibilidad
		******************************************************************/	
			/*$factoresexitoproyecto = $_REQUEST['factoresexitoproyecto'];
			$factoresriesgoproyecto = $_REQUEST['factoresriesgoproyecto'];
			$factibilidad = $_REQUEST['factibilidad'];*/
			
		/*****************************************************************
							Sección de Evaluación
		******************************************************************/	
			/*$justificacioneconomica = $_REQUEST['justificacioneconomica'];
			$analisiscostoeficienciasim = $_REQUEST['analisiscostoeficienciasim'];
			$analisiscostoeficiencia = $_REQUEST['analisiscostoeficiencia'];
			$analisiscostobeneficiosim = $_REQUEST['analisiscostobeneficiosim'];
			$analisiscostobeneficio = $_REQUEST['analisiscostobeneficio'];*/
			$evaluaciontir = pg_escape_string($_REQUEST['evaluaciontir']);
			$evaluacionvpn = pg_escape_string($_REQUEST['evaluacionvpn']);
			$evaluaciontri = pg_escape_string($_REQUEST['evaluaciontri']);
			$evaluacioncae = pg_escape_string($_REQUEST['evaluacioncae']);
			$costoigualbeneficio = pg_escape_string($_REQUEST['costoigualbeneficio']);
			$costomenorbeneficio = pg_escape_string($_REQUEST['costomenorbeneficio']);
			$costomayorbeneficio = pg_escape_string($_REQUEST['costomayorbeneficio']);
			//$analisissensibilidad = $_REQUEST['analisissensibilidad'];
			$analisisvariables = pg_escape_string($_REQUEST['analisisvariables']);
			$rentavpn = pg_escape_string($_REQUEST['rentavpn']);
			$rentatri = pg_escape_string($_REQUEST['rentatri']);
			$rentatir = pg_escape_string($_REQUEST['rentatir']);
			$rentacae = pg_escape_string($_REQUEST['rentacae']);
			$dictamen = pg_escape_string($_REQUEST['dictamen']);
		

		/*****************************************************************
							Sección de Monitoreo
		******************************************************************/	
			//$evidencia = $_REQUEST['evidencia'];


		/*****************************************************************
							Sección de Observaciones Generales
		******************************************************************/	
			$ob1 = pg_escape_string($_REQUEST['ob1']);



		/*****************************************************************
							Sección de Anexos
		******************************************************************/	

	/*________________________________________________________________
						Queries de la inserción evaluando si 
							ingresaron un valor o no
	________________________________________________________________*/
	

		/*****************************************************************
							Sección de Información General
		__________________________________________________________________
			Se hace por separado para crear el número de registro
			para después dárselo también a las otras tablas.
		******************************************************************/
		
		$query1 = "BEGIN;
		UPDATE info_general SET tipo_registro = '$tipo_registro', dependencia_entidad = '$dependencia_entidad' ";
			if(empty($_REQUEST['dependencia_entidad_apoyo']))
				$query1.=",dependencia_entidad_apoyo= NULL";
			else
				$query1.=",dependencia_entidad_apoyo='$dependencia_entidad_apoyo'"; 
			if(empty($_REQUEST['nombre_proyecto']))
				$query1.=", nombre_proyecto=NULL";
			else
				$query1.=",nombre_proyecto='$nombre_proyecto'"; 
			if(empty($_REQUEST['obj_general']))
				$query1.=",obj_general=NULL";
			else
				$query1.=",obj_general='$obj_general'";
			if(empty($_REQUEST['obj_especificos']))
				$query1.=",obj_especificos=NULL";
			else
				$query1.=",obj_especificos='$obj_especificos'"; 
			if(empty($_REQUEST['tipo_proyecto']))
				$query1.=",tipo_proyecto=NULL";
			else
				$query1.=",tipo_proyecto='$tipo_proyecto' ";
			if(empty($_REQUEST['eje_plan_municipal']))
				$query1.=",eje_plan_municipal=NULL";
			else
				$query1.=",eje_plan_municipal='$eje_plan_municipal'";
			if(empty($_REQUEST['estrategia']))
				$query1.=",estrategia=NULL";
			else
				$query1.=",estrategia='$estrategia' ";
			if(empty($_REQUEST['prioridad']))
				$query1.=",prioridad=NULL";
			else
				$query1.=",prioridad='$prioridad' ";
			if(empty($_REQUEST['criterio']))
				$query1.=",criterio=NULL";
			else
				$query1.=",criterio='$criterio' ";
			if(empty($_REQUEST['clasificacion_asignacion_presupuesto']))
				$query1.=",clasificacion_asignacion_presupuesto=NULL";
			else
				$query1.=",clasificacion_asignacion_presupuesto='$clasificacion_asignacion_presupuesto' ";
			if(empty($_REQUEST['etapa_actual_proyecto']))
				$query1.=",etapa_actual_proyecto=NULL";
			else
				$query1.=",etapa_actual_proyecto='$etapa_actual_proyecto' ";
			if(empty($_REQUEST['etapa_ejecucion_inicio']))
				$query1.=",etapa_ejecucion_inicio=NULL";
			else
				$query1.=",etapa_ejecucion_inicio='$etapa_ejecucion_inicio' ";
			if(empty($_REQUEST['etapa_ejecucion_fin']))
				$query1.=",etapa_ejecucion_fin=NULL";
			else
				$query1.=",etapa_ejecucion_fin='$etapa_ejecucion_fin' ";
			if(empty($_REQUEST['admin_proyecto_info']))
				$query1.=",admin_proyecto_info=NULL";
			else
				$query1.=",admin_proyecto_info='$admin_proyecto_info'";
			if(empty($_REQUEST['ambito_impacto']))
				$query1.=",ambito_impacto=NULL";
			else
				$query1.=",ambito_impacto='$ambito_impacto'";
			if(empty($_REQUEST['proyecto_programa_complementario']))
				$query1.=",proyecto_programa_complementario=NULL";
			else
				$query1.=",proyecto_programa_complementario='$proyecto_programa_complementario' ";
			$query1.=" WHERE num_registro=$id;";


		

		/*****************************************************************
							Sección de Diagnóstico
		******************************************************************/
		$query1.= " UPDATE diagnostico SET num_registro='$id'";
		if(!empty($_FILES["analisissituacionactual"]["name"]))
				{
				$query1.=",analisis_situacion_actual='/implan/uploads/$id/analisissituacionactual/".$_FILES["analisissituacionactual"]["name"]."'";
		if ($_FILES["analisissituacionactual"]["error"] > 0)
    		{
    			echo "Error al subir: " .$_FILES["analisissituacionactual"]["error"] . "<br>";
    		}
		  else
		    {
			mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisissituacionactual/", 0777, true);
		      move_uploaded_file($_FILES["analisissituacionactual"]["tmp_name"],
		 "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisissituacionactual/".$_FILES["analisissituacionactual"]["name"]);
		    }

					}

			if(!empty($_FILES["analisissituacionsinproyecto"]["name"]))
				{
				$query1.=",analisis_situacion_sin_proyecto='/implan/uploads/$id/analisissituacionsinproyecto/".$_FILES["analisissituacionsinproyecto"]["name"]."'";
			if ($_FILES["analisissituacionsinproyecto"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["analisissituacionsinproyecto"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisissituacionsinproyecto/", 0777, true);
      move_uploaded_file($_FILES["analisissituacionsinproyecto"]["tmp_name"],
    "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisissituacionsinproyecto/".$_FILES["analisissituacionsinproyecto"]["name"]);
    }

			}
			if(!empty($_FILES["analisissituacionconproyecto"]["name"]))
				{
				$query1.=",analisis_situacion_con_proyecto='/implan/uploads/$id/analisissituacionconproyecto/".$_FILES["analisissituacionconproyecto"]["name"]."'";
			

         if ($_FILES["analisissituacionconproyecto"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["analisissituacionconproyecto"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisissituacionconproyecto/", 0777, true);
      move_uploaded_file($_FILES["analisissituacionconproyecto"]["tmp_name"],
    "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/". $id."/analisissituacionconproyecto/".$_FILES["analisissituacionconproyecto"]["name"]);
    }
		}

			$query1.=" WHERE num_registro=$id ;";

		






		/*****************************************************************
							Sección de Descripción
		******************************************************************/
		$query1 .= " UPDATE descripcion SET num_registro='$id'";
			if(empty($_REQUEST['introduccion']))
				$query1.=",introduccion=NULL";
			else
				$query1.=",introduccion='$introduccion'";
			if(empty($_REQUEST['antecedentes']))
				$query1.=",antecedentes=NULL";
			else
				$query1.=",antecedentes='$antecedentes'";
			
			if(empty($_REQUEST['resumen_proyecto']))
				$query1.=",resumen_proyecto = NULL";
			else
				$query1.=",resumen_proyecto='$resumen_proyecto'";

			if(!empty($_FILES["descripcionproyecto"]["name"]))
				{
				$query1.=",descripcion_proyecto='/implan/uploads/$id/descripcionproyecto/".$_FILES["descripcionproyecto"]["name"]."'";

		      if ($_FILES["descripcionproyecto"]["error"] > 0)
		    {
		    echo "Error al subir: " .$_FILES["descripcionproyecto"]["error"] . "<br>";
		    }
		  else
		    {
			mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/descripcionproyecto/", 0777, true);
		      move_uploaded_file($_FILES["descripcionproyecto"]["tmp_name"],
		      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/descripcionproyecto/".$_FILES["descripcionproyecto"]["name"]);
		    }

					}

	if(!empty($_FILES["justificacion"]["name"]))
				{
				$query1.=",justificacion='/implan/uploads/$id/justificacion/".$_FILES["justificacion"]["name"]."'";
	 if ($_FILES["justificacion"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["justificacion"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/justificacion/", 0777, true);
      move_uploaded_file($_FILES["justificacion"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/justificacion/".$_FILES["justificacion"]["name"]);
    	}
	}
			
			
			if(empty($_REQUEST['marcojuridico']))
				$query1.=", marco_juridico =NULL";
			else
				$query1.=",marco_juridico='$marcojuridico'";
			if(empty($_REQUEST['tiempo_vida']))
				$query1.=",tiempo_vida=NULL";
			else
				$query1.=",tiempo_vida='$tiempo_vida'";
			if(empty($_REQUEST['recursos_humanos']))
				$query1.=",recursos_humanos=NULL";
			else
				$query1.=",recursos_humanos='$recursos_humanos'";
			if(empty($_REQUEST['recursos_materiales']))
				$query1.=",recursos_materiales=NULL";
			else
				$query1.=",recursos_materiales='$recursos_materiales'";
			if(empty($_REQUEST['infraestructura']))
				$query1.=",infraestructura=NULL";
			else
				$query1.=",infraestructura='$infraestructura'";
			if(empty($_REQUEST['estudios_proyecto']))
				$query1.=",estudios_proyecto=NULL";
			else
				$query1.=",estudios_proyecto='$estudios_proyecto'";
			if(empty($_REQUEST['acciones']))
				$query1.=",acciones=NULL";
			else
				$query1.=",acciones='$acciones'";
			if(!empty($_FILES["calendarioacciones"]["name"]))
				{
				$query1.=",calendario_acciones='/implan/uploads/$id/calendarioacciones/".$_FILES["calendarioacciones"]["name"]."'";

				  if ($_FILES["calendarioacciones"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["calendarioacciones"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/calendarioacciones/", 0777, true);
      move_uploaded_file($_FILES["calendarioacciones"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/calendarioacciones/".$_FILES["calendarioacciones"]["name"]);
    }

			}
			if(empty($_REQUEST['metas']))
				$query1.=",metas=NULL";
			else
				$query1.=",metas='$metas'";
			if(empty($_REQUEST['resultados']))
				$query1.=",resultados=NULL";
			else
				$query1.=",resultados='$resultados'";
			$query1.=" WHERE num_registro=$id;";



		/*****************************************************************
							Sección de Beneficios
		******************************************************************/
		$query1 .= "UPDATE beneficios SET num_registro='$id'";
			if(empty($_REQUEST['beneficios']))
				$query1.=",beneficios=NULL";
			else
				$query1.=",beneficios='$beneficios'";
			if(empty($_REQUEST['beneficiados_directos']))
				$query1.=",beneficiados_directos=NULL";
			else
				$query1.=",beneficiados_directos='$beneficiados_directos'";
			if(empty($_REQUEST['beneficiados_indirectos']))
				$query1.=",beneficiados_indirectos=NULL";
			else
				$query1.=",beneficiados_indirectos='$beneficiados_indirectos'";
			if(empty($_REQUEST['viviendas_beneficiadas']))
				$query1.=",viviendas_beneficiadas=NULL";
			else
				$query1.=",viviendas_beneficiadas='$viviendas_beneficiadas'";
			if(empty($_REQUEST['costo_anual_beneficios']))
				$query1.=",costos_anual_beneficios=NULL";
			else
				$query1.=",costos_anual_beneficios='$costo_anual_beneficios'";
			$query1.=" WHERE num_registro=$id;";



		/*****************************************************************
							Sección de Localización Geográfica
		******************************************************************/
		$query1 .= "UPDATE localizacion_geografica SET num_registro='$id'";
			if(!empty($_FILES["micromacro"]["name"]))
			{
				$query1.=",micromacro='/implan/uploads/$id/micromacro/".$_FILES["micromacro"]["name"]."'";
			  if ($_FILES["micromacro"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["micromacro"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/micromacro/", 0777, true);
      move_uploaded_file($_FILES["micromacro"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/micromacro/".$_FILES["micromacro"]["name"]);
    }
	}
		if(empty($_REQUEST['direccion']))
				$query1.=",direccion=NULL";
			else
				$query1.=",direccion='$direccion'";
			if(!empty($_FILES["certezajuridicalocalizacion"]["name"]))
			
				{				
				$query1.=",certeza_juridica_localizacion='/implan/uploads/$id/certezajuridicalocalizacion/".$_FILES["certezajuridicalocalizacion"]["name"]."'";
	if ($_FILES["certezajuridicalocalizacion"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["certezajuridicalocalizacion"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/certezajuridicalocalizacion/", 0777, true);
      move_uploaded_file($_FILES["certezajuridicalocalizacion"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/certezajuridicalocalizacion/".$_FILES["certezajuridicalocalizacion"]["name"]);
    }

			}			$query1.=" WHERE num_registro=$id;";


		/*****************************************************************
							Sección de Aspectos Financieros
		******************************************************************/
		$query1 .= "UPDATE aspectos_financieros SET num_registro='$id'";
			if(!empty($_FILES["distribucioncostos"]["name"]))

		{
				$query1.=",distribucion_costos='/implan/uploads/$id/distribucioncostos/".$_FILES["distribucioncostos"]["name"]."'";
 if ($_FILES["distribucioncostos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["distribucioncostos"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/distribucioncostos/", 0777, true);
      move_uploaded_file($_FILES["distribucioncostos"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/distribucioncostos/".$_FILES["distribucioncostos"]["name"]);
    }
			}			

			if(empty($_REQUEST['monto_total_inversion']))
				$query1.=",monto_total_inversion=NULL";
			else
{				
			$query1.=",monto_total_inversion='$monto_total_inversion'";
			
			}			
			if(empty($_REQUEST['restriccion_presupuestal']))
				$query1.=",restriccion_presupuestal=NULL";
			else
				$query1.=",restriccion_presupuestal='$restriccion_presupuestal'";
			$query1.=" WHERE num_registro=$id;";
			


		/*****************************************************************
							Sección de Procuración de Fondos
		******************************************************************/
		$query1.= "UPDATE procuracion_fondos SET num_registro= '$id'";
			if(empty($_REQUEST['dependencia_federal']))
				$query1.=",dependencia_federal=NULL";
			else
				$query1.=",dependencia_federal='$dependencia_federal'";
				if(empty($_REQUEST['nombre_programa']))
				$query1.=",nombre_programa=NULL";
			else
				$query1.=",nombre_programa='$nombre_programa'";
				if(empty($_REQUEST['rubro']))
				$query1.=",rubro=NULL";
			else
				$query1.=",rubro='$rubro'";
		
			if(empty($_REQUEST['fuentes_financiamiento']))
				$query1.=",fuentes_financiamiento=NULL";
			else
				$query1.=",fuentes_financiamiento='$fuentes_financiamiento'";
			if(empty($_REQUEST['participacion_porcentaje_municipio']))
				$query1.=",participacion_porcentaje_municipio=NULL";
			else
				$query1.=",participacion_porcentaje_municipio='$participacion_porcentaje_municipio'";
			if(empty($_REQUEST['participacion_dinero_municipio']))
				$query1.=",participacion_dinero_municipio=NULL";
			else
				$query1.=",participacion_dinero_municipio='$participacion_dinero_municipio'";
			if(empty($_REQUEST['participacion_porcentaje_estado']))
				$query1.=",participacion_porcentaje_estado=NULL";
			else
				$query1.=",participacion_porcentaje_estado='$participacion_porcentaje_estado'";
			if(empty($_REQUEST['participacion_dinero_estado']))
				$query1.=",participacion_dinero_estado=NULL";
			else
				$query1.=",participacion_dinero_estado='$participacion_dinero_estado'";
			if(empty($_REQUEST['participacion_porcentaje_federacion']))
				$query1.=",participacion_porcentaje_federacion=NULL";
			else
				$query1.=",participacion_porcentaje_federacion='$participacion_porcentaje_federacion'";
			if(empty($_REQUEST['participacion_dinero_federacion']))
				$query1.=",participacion_dinero_federacion=NULL";
			else
				$query1.=",participacion_dinero_federacion='$participacion_dinero_federacion'";
			if(empty($_REQUEST['participacion_porcentaje_otro']))
				$query1.=",participacion_porcentaje_otro=NULL";
			else
				$query1.=",participacion_porcentaje_otro='$participacion_porcentaje_otro'";
			if(empty($_REQUEST['participacion_dinero_otro']))
				$query1.=",participacion_dinero_otro=NULL";
			else
				$query1.=",participacion_dinero_otro='$participacion_dinero_otro'";
			if(empty($_REQUEST['participacion_porcentaje_total']))
				$query1.=",participacion_porcentaje_total=NULL";
			else
				$query1.=",participacion_porcentaje_total='$participacion_porcentaje_total'";
			if(empty($_REQUEST['participacion_dinero_total']))
				$query1.=",participacion_dinero_total=NULL";
			else
				$query1.=",participacion_dinero_total='$participacion_dinero_total'";
			if(empty($_REQUEST['concentrador_recurso']))
				$query1.=",concentrador_recurso=NULL";
			else
				$query1.=",concentrador_recurso='$concentrador_recurso'";
			if(empty($_REQUEST['convocatoria']))
				$query1.=",convocatoria=NULL";
			else
				$query1.=",convocatoria='$convocatoria'";
			if(empty($_REQUEST['fecha_publicacion']))
				$query1.=",fecha_publicacion=NULL";
			else
				$query1.=",fecha_publicacion='$fecha_publicacion'";
			if(empty($_REQUEST['plazo']))
				$query1.=",plazo=NULL";
			else
				$query1.=",plazo='$plazo'";
			if(empty($_REQUEST['anotacion']))
				$query1.=",anotacion=NULL";
			else
				$query1.=",anotacion='$anotacion'";
			$query1.=" WHERE num_registro=$id;";

		

		/*****************************************************************
							Sección de Analisis de Factibilidad
		******************************************************************/
		$query1 .= "UPDATE  analisis_factibilidad SET num_registro='$id'";
			if(!empty($_FILES["factoresexitoproyecto"]["name"]))
				
			{
				$query1.=",factores_exito_proyecto='/implan/uploads/$id/factoresexitoproyecto/".$_FILES["factoresexitoproyecto"]["name"]."'";


        if ($_FILES["factoresexitoproyecto"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["factoresexitoproyecto"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/factoresexitoproyecto/", 0777, true);
      move_uploaded_file($_FILES["factoresexitoproyecto"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/factoresexitoproyecto/".$_FILES["factoresexitoproyecto"]["name"]);
    }

			}
			


			if(!empty($_FILES["factoresriesgoproyecto"]["name"]))
				
{
	 $query1.=",factores_riesgo_proyecto='/implan/uploads/$id/factoresriesgoproyecto/".$_FILES["factoresriesgoproyecto"]["name"]."'";

       if ($_FILES["factoresriesgoproyecto"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["factoresriesgoproyecto"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/factoresriesgoproyecto/", 0777, true);
      move_uploaded_file($_FILES["factoresriesgoproyecto"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/factoresriesgoproyecto/".$_FILES["factoresriesgoproyecto"]["name"]);
    }

	}
			
			if(!empty($_FILES["factibilidad"]["name"]))
				
{
			$query1.=",factibilidad='/implan/uploads/$id/factibilidad/".$_FILES["factibilidad"]["name"]."'";

       if ($_FILES["factibilidad"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["factibilidad"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/factibilidad/", 0777, true);
      move_uploaded_file($_FILES["factibilidad"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/factibilidad/".$_FILES["factibilidad"]["name"]);
    }


}
			$query1.=" WHERE num_registro=$id;";



		/*****************************************************************
							Sección de Evaluación
		******************************************************************/
		$query1 .= "UPDATE evaluacion SET num_registro='$id'";
			if(!empty($_FILES["justificacioneconomica"]["name"]))
				
{
	$query1.=",justificacion_economica='/implan/uploads/$id/justificacioneconomica/".$_FILES["justificacioneconomica"]["name"]."'";

       if ($_FILES["justificacioneconomica"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["justificacioneconomica"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/justificacioneconomica/", 0777, true);
      move_uploaded_file($_FILES["justificacioneconomica"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/justificacioneconomica/".$_FILES["justificacioneconomica"]["name"]);
    }


}
			if(!empty($_FILES["analisiscostoeficienciasim"]["name"]))
				
{
		$query1.=",analisis_costo_eficiencia_sim='/implan/uploads/$id/analisiscostoeficienciasim/".$_FILES["analisiscostoeficienciasim"]["name"]."'";

       if ($_FILES["analisiscostoeficienciasim"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["analisiscostoeficienciasim"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisiscostoeficienciasim/", 0777, true);
      move_uploaded_file($_FILES["analisiscostoeficienciasim"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisiscostoeficienciasim/".$_FILES["analisiscostoeficienciasim"]["name"]);
    }


}
			if(!empty($_FILES["analisiscostoeficiencia"]["name"]))
			
{		
	$query1.=",analisis_costo_eficiencia='/implan/uploads/$id/analisiscostoeficiencia/".$_FILES["analisiscostoeficiencia"]["name"]."'";


       if ($_FILES["analisiscostoeficiencia"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["analisiscostoeficiencia"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisiscostoeficiencia/", 0777, true);
      move_uploaded_file($_FILES["analisiscostoeficiencia"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisiscostoeficiencia/".$_FILES["analisiscostoeficiencia"]["name"]);
    }

}
			if(!empty($_FILES["analisiscostobeneficiosim"]["name"]))
				
{
	$query1.=",analisis_costo_beneficios_sim='/implan/uploads/$id/analisiscostobeneficiosim/".$_FILES["analisiscostobeneficiosim"]["name"]."'";

       if ($_FILES["analisiscostobeneficiosim"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["analisiscostobeneficiosim"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisiscostobeneficiosim/", 0777, true);
      move_uploaded_file($_FILES["analisiscostobeneficiosim"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisiscostobeneficiosim/".$_FILES["analisiscostobeneficiosim"]["name"]);
    }


}	
		if(!empty($_FILES["analisiscostobeneficio"]["name"]))
				
{
		$query1.=",analisis_costo_beneficio='/implan/uploads/$id/analisiscostobeneficio/".$_FILES["analisiscostobeneficio"]["name"]."'";

       if ($_FILES["analisiscostobeneficio"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["analisiscostobeneficio"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisiscostobeneficio/", 0777, true);
      move_uploaded_file($_FILES["analisiscostobeneficio"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisiscostobeneficio/".$_FILES["analisiscostobeneficio"]["name"]);
    }


}
			
	if(empty($_REQUEST['evaluaciontir']))
			$query1.=",evaluacion_tir=NULL";
	else
			$query1.=",evaluacion_tir='$evaluaciontir'";
	if(empty($_REQUEST['evaluacionvpn']))
			$query1.=",evaluacion_vpn=NULL";
	else
			$query1.=",evaluacion_vpn='$evaluacionvpn'";
	if(empty($_REQUEST['evaluaciontri']))
			$query1.=",evaluacion_tri=NULL";
	else
			$query1.=",evaluacion_tri='$evaluaciontri'";
	if(empty($_REQUEST['evaluacioncae']))
			$query1.=",evaluacion_cae=NULL";
	else
			$query1.=",evaluacion_cae='$evaluacioncae'";
	if(empty($_REQUEST['costoigualbeneficio']))
			$query1.=",costo_igual_beneficio=NULL";
	else
			$query1.=",costo_igual_beneficio='$costoigualbeneficio'";
	if(empty($_REQUEST['costomenorbeneficio']))
			$query1.=",costo_menor_beneficio=NULL";
	else
			$query1.=",costo_menor_beneficio='$costomenorbeneficio'";
	if(empty($_REQUEST['costomayorbeneficio']))
			$query1.=",costo_mayor_beneficio=NULL";
	else
			$query1.=",costo_mayor_beneficio='$costomayorbeneficio'";
	
			
			
	if(!empty($_FILES["analisissensibilidad"]["name"]))
			
{
		$query1.=",analisis_sensibilidad='/implan/uploads/$id/analisissensibilidad/".$_FILES["analisissensibilidad"]["name"]."'";

       if ($_FILES["analisissensibilidad"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["analisissensibilidad"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisissensibilidad/", 0777, true);
      move_uploaded_file($_FILES["analisissensibilidad"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/analisissensibilidad/".$_FILES["analisissensibilidad"]["name"]);
    }

}
			
	if(empty($_REQUEST['analisisvariables']))
			$query1.=",analisis_variables=NULL";
	else
			$query1.=",analisis_variables='$analisisvariables'";
	if(empty($_REQUEST['rentavpn']))
			$query1.=",renta_vpn=NULL";
	else
			$query1.=",renta_vpn='$rentavpn'";
	if(empty($_REQUEST['rentatri']))
			$query1.=",renta_tri=NULL";
	else
			$query1.=",renta_tri='$rentatri'"; 
	if(empty($_REQUEST['rentatir']))
			$query1.=",renta_tir=NULL";
	else
			$query1.=",renta_tir='$rentatir'";
	if(empty($_REQUEST['rentacae']))
			$query1.=",renta_cae=NULL";
	else
			$query1.=",renta_cae='$rentacae'"; 

	if(empty($_REQUEST['dictamen']))
			$query1.=",dictamen=NULL";
	else
			$query1.=",dictamen='$dictamen'";
			$query1.=" WHERE num_registro=$id;";



		/*****************************************************************
							Sección de Monitoreo
		******************************************************************/
		$query1 .= "UPDATE monitoreo SET num_registro='$id'"; 
			if(!empty($_FILES["evidencia"]["name"]))
				
{
						$query1.=",evidencia='/implan/uploads/$id/evidencia/".$_FILES["evidencia"]["name"]."'";

	 if ($_FILES["evidencia"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["evidencia"]["error"] . "<br>";
    }
  else
    {
	mkdir($_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/evidencia/", 0777, true);
      move_uploaded_file($_FILES["evidencia"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/evidencia/".$_FILES["evidencia"]["name"]);
    }


}
			$query1.=" WHERE num_registro=$id;";

		/*****************************************************************
							Sección de Observaciones Generales 
		******************************************************************/
		$query1 .= "UPDATE observaciones_generales SET num_registro='$id'"; 
			if(empty($_REQUEST['ob1']))
				$query1.=",observacion=NULL";
			else
				$query1.=",observacion='$ob1'";
	
			$query1.=" WHERE num_registro=$id;";

		/*****************************************************************
							Sección de Anexos Generales 
		******************************************************************/
		if(empty($_FILES["anexo1"]["name"])){}
				
			else{
					$query1 .= "UPDATE anexos  SET"; 
						$query1.=" anexo='/implan/uploads/$id/anexo1/".$_FILES["anexo1"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo1"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo1"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo1/".$_FILES["anexo1"]["name"]);
    }
			
				$query1.=" WHERE num_registro=$id AND num_anexo=1;
			COMMIT;";
			}


					/*****************************************************************
							Sección de Anexos Generales 2
		******************************************************************/
		
			if(empty($_FILES["anexo2"]["name"])){}
				
			else{
					$query1 .= "UPDATE anexos  SET num_registro='$id'"; 
						$query1.=",anexo='/implan/uploads/$id/anexo2/".$_FILES["anexo2"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo2"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo2"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo2/".$_FILES["anexo2"]["name"]);
    }
			
				$query1.=" WHERE num_registro=$id AND num_anexo='2';
			COMMIT;";
			}

			
			
		/*****************************************************************
							Sección de Anexos Generales 3
		******************************************************************/
		
			if(empty($_FILES["anexo3"]["name"])){}
				
			else{
						$query1 .= "UPDATE anexos  SET num_registro='$id'";
						$query1.=",anexo='/implan/uploads/$id/anexo3/".$_FILES["anexo3"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo3"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo3"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo3/".$_FILES["anexo3"]["name"]);
    }
				$query1.=" WHERE num_registro=$id AND num_anexo='3';
			COMMIT;";
			
			}
			
		/*****************************************************************
							Sección de Anexos Generales 4
		******************************************************************/
		
			if(empty($_FILES["anexo4"]["name"])){}
				
			else{
						$query1 .= "UPDATE anexos  SET num_registro='$id'";
						$query1.=",anexo='/implan/uploads/$id/anexo4/".$_FILES["anexo4"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo4"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo4"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo4/".$_FILES["anexo4"]["name"]);
    }
				$query1.=" WHERE num_registro=$id AND num_anexo='4';
			COMMIT;";
			
			}
			
		/*****************************************************************
							Sección de Anexos Generales 5
		******************************************************************/
		
			if(empty($_FILES["anexo5"]["name"])){}
				
			else{
						$query1 .= "UPDATE anexos  SET num_registro='$id'";
						$query1.=",anexo='/implan/uploads/$id/anexo5/".$_FILES["anexo5"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo5"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo5"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo5/".$_FILES["anexo5"]["name"]);
    }
				$query1.=" WHERE num_registro=$id AND num_anexo='5';
			COMMIT;";
			
			}
			
		/*****************************************************************
							Sección de Anexos Generales 6
		******************************************************************/
		
			if(empty($_FILES["anexo6"]["name"])){}
				
			else{
						$query1 .= "UPDATE anexos  SET num_registro='$id'";
						$query1.=",anexo='/implan/uploads/$id/anexo6/".$_FILES["anexo6"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo6"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo6"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo6/".$_FILES["anexo6"]["name"]);
    }
				$query1.=" WHERE num_registro=$id AND num_anexo='6';
			COMMIT;";
			
			}
		/*****************************************************************
							Sección de Anexos Generales 7
		******************************************************************/
		
			if(empty($_FILES["anexo7"]["name"])){}
				
			else{
						$query1 .= "UPDATE anexos  SET num_registro='$id'";
						$query1.=",anexo='/implan/uploads/$id/anexo7/".$_FILES["anexo7"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo7"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo7"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo7/".$_FILES["anexo7"]["name"]);
    }
				$query1.=" WHERE num_registro=$id AND num_anexo='7';
			COMMIT;";
			
			}
			
		/*****************************************************************
							Sección de Anexos Generales 8
		******************************************************************/
		
			if(empty($_FILES["anexo8"]["name"])){}
				
			else{
						$query1 .= "UPDATE anexos  SET num_registro='$id'";
						$query1.=",anexo='/implan/uploads/$id/anexo8/".$_FILES["anexo8"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo8"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo8"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo8/".$_FILES["anexo8"]["name"]);
    }
				$query1.=" WHERE num_registro=$id AND num_anexo='8';
			COMMIT;";
			
			}
			
		/*****************************************************************
							Sección de Anexos Generales 9
		******************************************************************/
		
			if(empty($_FILES["anexo9"]["name"])){}
				
			else{
						$query1 .= "UPDATE anexos  SET num_registro='$id'";
						$query1.=",anexo='/implan/uploads/$id/anexo9/".$_FILES["anexo9"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo9"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo9"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo9/".$_FILES["anexo9"]["name"]);
    }
				$query1.=" WHERE num_registro=$id AND num_anexo='9';
			COMMIT;";
			
			}
			
		/*****************************************************************
							Sección de Anexos Generales 10
		******************************************************************/
		
			if(empty($_FILES["anexo10"]["name"])){}
				
			else{
						$query1 .= "UPDATE anexos  SET num_registro='$id'";
						$query1.=",anexo='/implan/uploads/$id/anexo10/".$_FILES["anexo10"]["name"]."'";

  if ($_FILES["anexos"]["error"] > 0)
    {
    echo "Error al subir: " .$_FILES["anexo10"]["error"] . "<br>";
    }
  else
    {

	
      move_uploaded_file($_FILES["anexo10"]["tmp_name"],
      "".$_SERVER['DOCUMENT_ROOT']."/implan/uploads/".$id."/anexo10/".$_FILES["anexo10"]["name"]);
    }
				$query1.=" WHERE num_registro=$id AND num_anexo='10';
			COMMIT;";
			
			}

		/*****************************************************************
							SUBIDA DE ARCHIVOS upload 
		******************************************************************/
		



		/*________________________________________________________________
				Finalmente se ejecuta el query1 de insercion de todas 
				las tablas y se verifica que no haya errores
		________________________________________________________________*/
		if (!pg_query($dbconn4, $query1))
		{
				echo "<br>".$query1;
				echo "error query1";
				    echo pg_last_error($dbconn4);

		}
		else 
			echo "<script>alert('Ha insertado exitosamente el proyecto'); 

	window.location='index.php';

		</script>"


?>


