<?php

if (!isset($_GET['filename']) || empty($_GET['filename'])) {
   exit();
}

$ruta = $_GET['filename'];
list($primero, $segundo, $tercero,$cuarto,$quinto,$sexto) = explode('/', $ruta);
$archivo = $sexto;
$ruta = $tercero.'/'.$cuarto.'/'.$quinto.'/'.$sexto;
 //  echo $sexto;
//echo $ruta;

echo "<script>window.location='$ruta'; </script>";

?>
