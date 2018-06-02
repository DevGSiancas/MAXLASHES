<?php

error_reporting(0);
ob_start();

?>

<!DOCTYPE HTML>
<html lang="sp">
<head>
	<title>MAXLASHES</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=No" />
	<link rel="icon" href="recursos/Iconos/favicon.png">
	<meta name="keyword" content="belleza, vitalidad, esencia, vitamina B, cejas, pestañas, lifting, micropigmentación, extensiones, microblading, tratamientos reductores, moroccan spray, tonificación, carboxiterapia, reafirmación muscular, peptonas, mesoterapia, hydrafacial, anti acné, antioxidante, delineado, despigmentación, LVL, SVS, teñido cejas, teñido pestañas">
	<meta name="description" content="Cadena de franquicias a nivel nacional. Forma parte de nosotros.">
	<meta name="autor" content="MDA , DEV-SIANCAS">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/global.1.0.0.css"/>
	<link rel="stylesheet" type="text/css" href="css/franquicias.1.0.0.css"/>
	<style>#header #lower .right-gp #franquicias{border-bottom:2px solid #b52555}</style>
	<style>#menu-wrap #franquicias{border-left:5px solid #b52555}</style>
</head>
<body>

<?php require_once("include/header.php");?>
<?php require_once("php/franquicias_process.php");?>

<div class="popout" style="<?php if(isset($_GET['status']) && $_GET['status']=1) echo 'display:block'; ?>">
	<div class="centered">
		<div class="header">
			AVISO
			<img src="recursos/Iconos/a.Header/cerrar_icon.svg" class="close">
		</div>
		<div class="content">
			<h1>Mensaje enviado! Muchas Gracias!</h1>
		</div>
	</div>
</div>

<!-- <div id="carousel-box" class="carousel slide desktop">
    <div class="carousel-inner">
    	<div class="item active">
    		<img src="recursos/Imagenes/4.Franquicias/franquicias_banner.jpg" class="desk-img">
    		<img src="recursos/Imagenes/4.Franquicias/franquicias_banner_mbl.jpg" class="mobil-img">
        </div>
    </div>
</div> -->

<br><br><br><br>
<div class="announce">
	<h1>FRANQUICIAS</h1>
	<p>Somos un centro especializado en el cuidado de tus cejas, pestañas y cuerpo. Queremos que seas parte de nuestro éxito.</p>
</div>


<div class="container">

	<form method="post">
		<input type="text" name="fullname" placeholder="Nombre y Apellido" maxlength="" required>
		<input type="email" name="email" placeholder="Correo Electrónico" required>
		<input type="text" name="whatsapp" placeholder="WhatsApp" required>
		<textarea name="message" placeholder="Mensaje" rows="4" required></textarea>
		<input type="submit" name="submit_franquicia" value="ENVIAR">
	</form>

</div>


<?php require_once("include/footer.php");?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/global.1.0.0.js"></script>
</body>
</html>
