<?php

	include_once $_SERVER['DOCUMENT_ROOT']."/implan/conexion.php";


$usr= $_REQUEST['usuario'];
$pwd= $_REQUEST['password'];
//$pwd= md5($pwd);

$sql= "SELECT usuario, pass, privilegio FROM usuarios WHERE usuario = '$usr' AND pass= '$pwd'";
$datosusr = pg_query($sql);
//echo $n.' ---'.$sql; 
//$datosusr = query($sql);
$n = pg_num_rows($datosusr);
$row = pg_fetch_array($datosusr);
//print "<br><pre>";print_r($datosusr); print "</pre>";exit;
if($n == 0)
{
	echo "<script language='Javascript'> alert('Error : El usuario o Contrasena son Incorrectos'); location.href = 'login.php';</script>";
}
else
{

			$_SESSION['usr']=$usr;
			$_SESSION['privilegio']=$row["privilegio"];
			
			
			header('Location: index.php');
			
	
} 
?>
