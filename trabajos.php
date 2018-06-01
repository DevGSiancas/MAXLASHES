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
	<meta name="description" content="ERROR HTTP 404. Lo sentimos, en estos momentos estamos presentando problemas técnicos.">
	<meta name="autor" content="MDA , DEV-SIANCAS">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/global.1.0.0.css"/>
	<link rel="stylesheet" type="text/css" href="css/trabajos.1.0.0.css"/>
</head>
<body>

<?php require_once("include/header.php");?>

<div class="popout" style="<?php if(isset($_GET['status']) && $_GET['status']=1) echo 'display:block'; ?>">
	<div class="centered">
		<div class="header">
			AVISO
			<img src="#" class="close">
		</div>
		<div class="content">
			<h1>Tu aplicación ha sido procesada! Gracias por aplicar con nosotros.</h1>
		</div>
	</div>
</div>


<div id="carousel-box" class="carousel slide desktop">
    <div class="carousel-inner">
    	<div class="item active">
    		<img src="recursos/Imagenes/6.Trabaja/trabaja_con_nosotros_banner.jpg" class="desk-img">
    		<img src="recursos/Imagenes/6.Trabaja/trabaja_con_nosotros_banner_mbl.jpg" class="mobil-img">
        </div>
    </div>
</div>


<div class="announce">
	<h1>TRABAJA CON NOSOTROS</h1>
	<p>Llena tus datos y se parte de la familia #FamiliaMax Mucha Suerte!</p>
</div>


<div class="container">
	<form method="post" enctype="multipart/form-data">
		<input type="text" name="fullname" placeholder="Nombre y Apellido" required>
		<input type="text" name="identification" placeholder="DNI" required>
		<input type="email" name="email" placeholder="Correo Electrónico" required>
		<input type="text" name="district" placeholder="Distrito" required>
		<input type="text" name="telephone" placeholder="Teléfono o Celular" required>
		<div class="file">
			<span>Adjuntar CV</span>
			<input type="file" name="file" id="file" required>
		</div>
		<input type="submit" name="submit_trabajo" value="ENVIAR">
		<?php require_once("php/trabajos_process.php");?>
	</form>
</div>


<?php require_once("include/footer.php");?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/global.1.0.0.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$("form").on("change" , "#file" , function(){
		$("form .file span").html($(this).val());
	})
})
</script>
</body>
</html>
