<?php require_once('../Connections/acapulco.php');
	
	$id = $_GET['id'];
    $tabla = $_GET['tabla'];


	mysql_select_db($database_acapulco, $acapulco);

	mysql_query('DELETE FROM '.$tabla.' WHERE id = '.$id);

	header("Location: usuarios.php");


?>
