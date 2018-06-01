<?php

session_start();
error_reporting(0);

if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == TRUE){
	header("location:index.php");
}

?>
<!DOCTYPE HTML>
<html lang="sp">
<head>
	<title>MAX - RESERVAS</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=No" />
	<link rel="icon" href="../recursos/Iconos/favicon.png">
	<meta name="keyword" content="belleza, vitalidad, esencia, vitamina B, cejas, pestañas, lifting, micropigmentación, extensiones, microblading, tratamientos reductores, moroccan spray, tonificación, carboxiterapia, reafirmación muscular, peptonas, mesoterapia, hydrafacial, anti acné, antioxidante, delineado, despigmentación, LVL, SVS, teñido cejas, teñido pestañas				">
	<meta name="description" content="Ofrecemos servicios de tratamientos corporales, tratamientos faciales, lifting de pestañas, micropigmentación de cejas, extensión de pestañas, entre otros.">
	<meta name="autor" content="MDA , DEV-SIANCAS">
	<link rel="stylesheet" type="text/css" href="css/login.1.0.0.css">
</head>
<body>

	<form method="post">
		<img src="../recursos/max_logo.png">
		<input type="text" name="username" placeholder="Usuario" maxlength="45" required>
		<input type="password" name="password" placeholder="Clave" maxlength="35" required>
		<input type="submit" name="login" value="Log In" required>
		<?php require_once("php/login_validation.php");?>
	</form>

</body>
</html>
