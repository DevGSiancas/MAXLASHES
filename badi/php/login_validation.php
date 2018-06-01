<?php

session_start();

if(isset($_POST["login"])){

	require_once("../php/db_connection.php");

	$username = stripslashes(htmlentities(trim(mysqli_real_escape_string($connect , $_POST["username"]))));
	$password = stripslashes(htmlentities(trim(mysqli_real_escape_string($connect , $_POST["password"]))));

	$statement = "SELECT id FROM users WHERE username='$username' AND password='$password' LIMIT 1";

	if($query = mysqli_query($connect , $statement)){

		if(mysqli_num_rows($query)){

			$_SESSION["logged_in"] = TRUE;
			header("location:index.php");

		}else{echo "<p>Este usuario no existe.</p>";}

	}else{echo "<p>Tuvimos un error al procesar tu pedido. Intenta mas tarde.</p>";}
}

?>