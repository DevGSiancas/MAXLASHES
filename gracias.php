<!DOCTYPE HTML>
<html lang="sp">
<head>
	<title>MAXLASHES</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=No" />
	<link rel="icon" href="recursos/Iconos/favicon.png">
	<meta name="keyword" content="belleza, vitalidad, esencia, vitamina B, cejas, pestañas, lifting, micropigmentación, extensiones, microblading, tratamientos reductores, moroccan spray, tonificación, carboxiterapia, reafirmación muscular, peptonas, mesoterapia, hydrafacial, anti acné, antioxidante, delineado, despigmentación, LVL, SVS, teñido cejas, teñido pestañas">
	<meta name="description" content="¡Muchas gracias por tu reserva! Te esperamos en nuestros locales.">
	<meta name="autor" content="MDA , DEV-SIANCAS">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/global.1.0.0.css"/>
	<style type="text/css">

	#url{

		background: #b52555;
		color: #fff;
		text-align: center;
		padding:12px;
		font-size: 1.8em;
		border-top: 125px solid #fff;
		font-family: LatoLight;
	}

	.announce{

		max-width: 550px;
		margin: 30px auto;
	}

	.announce a{

		display: block;
		width: 180px;
		padding: 12px 0px;
		margin: 80px auto 40px auto;
		border-radius: 2px;
		border:2px solid #b52555;
		background: none;
		color: #b52555;
		font-family: LatoLight;
	}

	@media screen and (max-width: 1050px){

		#url{font-size: 1.1em;}

	}
	</style>
</head>
<body>

<?php

require_once("include/header.php");
if(isset($_GET["status"]) && !empty($_GET["status"]) && is_numeric($_GET["status"]) && $_GET["status"] > 0){
	header("location:404.php?status=".$_GET["status"]);
}

?>

<div id="url">
	RESERVA EXITOSA!
</div>


<div class="announce">
	<h1>Nos contactaremos a la brevedad</h1>
	<p>Una vez confirmada su reserva, no olvide llegar 10 minutos antes. Muchas gracias!</p>
	<a href="index.php">VOLVER A INICIO</a>
</div>


<?php require_once("include/footer.php");?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/global.1.0.0.js"></script>
</body>
</html>
