<?php 

session_start();

	
$conn_string = "host=localhost port=5432 dbname=implan user=user_implan password=elda123";
$dbconn4 = pg_connect($conn_string);

  if(!isset($_SESSION['usr'])){
    echo '<script> window.location = "/implan/login.php"; </script>';
	}
?>