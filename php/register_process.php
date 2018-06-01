<?php

error_reporting(0);

if(isset($_GET["email"])){
	
	require_once("db_connection.php");

	$email = stripslashes(htmlspecialchars(mysqli_real_escape_string($connect , $_GET["email"])));
	$statement = "INSERT INTO clientes_correo VALUES(NULL , '$email' , NOW())";
	
	if(mysqli_query($connect , $statement))
		echo "TU EMAIL SE HA REGISTRADO. MUCHAS GRACIAS!";
	else
		echo "NO PUDIMOS REGISTRARTE. INTENTA MAS TARDE POR FAVOR.";
}

?>