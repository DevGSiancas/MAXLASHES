<?php

error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="sp">
<head>
	<title>MAXLASHES</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=No" />
	<link rel="icon" href="recursos/Iconos/favicon.png">
	<meta name="keyword" content="belleza, vitalidad, esencia, vitamina B, cejas, pestañas, lifting, micropigmentación, extensiones, microblading, tratamientos reductores, moroccan spray, tonificación, carboxiterapia, reafirmación muscular, peptonas, mesoterapia, hydrafacial, anti acné, antioxidante, delineado, despigmentación, LVL, SVS, teñido cejas, teñido pestañas				">
	<meta name="description" content="Ofrecemos servicios de tratamientos corporales, tratamientos faciales, lifting de pestañas, micropigmentación de cejas, extensión de pestañas, entre otros.">
	<meta name="autor" content="MDA , DEV-SIANCAS">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/global.1.0.0.css"/>
	<link rel="stylesheet" type="text/css" href="css/index.1.0.0.css"/>
	<style>#header #lower .right-gp #inicio{border-bottom:2px solid #b52555}</style>
	<style>#menu-wrap #inicio{border-left:5px solid #b52555}</style>
</head>
<body>

<?php require_once("include/header.php");?>

<div id="carousel-box" class="carousel slide desktop">
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel-box" data-slide-to="0"></li>
        <li data-target="#carousel-box" data-slide-to="1"></li>
        <li data-target="#carousel-box" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    	<div class="item active">
    		<img src="recursos/Imagenes/1.Inicio/inicio_slider_1.jpg" class="desk-img">
    		<img src="recursos/Imagenes/1.Inicio/inicio_slider_1_mbl.jpg" class="mobil-img">
        </div>
    	<div class="item">
    		<img src="recursos/Imagenes/1.Inicio/inicio_slider_2.jpg" class="desk-img">
    		<img src="recursos/Imagenes/1.Inicio/inicio_slider_2_mbl.jpg" class="mobil-img">
        </div>
        <div class="item">
        	<img src="recursos/Imagenes/1.Inicio/inicio_slider_3.jpg" class="desk-img">
        	<img src="recursos/Imagenes/1.Inicio/inicio_slider_3_mbl.jpg" class="mobil-img">
        </div>
    </div>
    <!-- Controls -->
	<a class="left carousel-control" href="#carousel-box" data-slide="prev">
		<img src="recursos/Iconos/1.Inicio/left_arrow_icon.svg">
	</a>
	<a class="right carousel-control" href="#carousel-box" data-slide="next">
		<img src="recursos/Iconos/1.Inicio/right_arrow_icon.svg">
	</a>
</div>


<div class="announce">
	<h1>¿QUIÉNES SOMOS?</h1>
	<p>Somos el centro pionero en Perú y Latinoamérica, especializado en la aplicación de extensiones de pestañas y tratamiento LBL, un tratamiento de levantamiento de pestañas exclusivo que cumple los más altos estándares de calidad.</p>

	<p>Su fundadora y directora, Liliana Lamtenzan, con especializaciones en los centros Americanos y Europeos más reconocidos en el rubro, nos trae desde hace más de 10 años las últimas tendencias, ofreciendo un servicio seguro, saludable, y garantizando el uso de productos especiales para las zonas más sensibles de tu piel; todos estos aprobados con registro sanitario del Ministerio de Salud.</p>

	<p>En Max Lashes tendrás una experiencia única gracias al ambiente adecuado para el tipo de servicio que se ofrece, con una atención de primer nivel por nuestros especialistas que están capacitados y cumplen con certificados en tratamientos de pestañas y cejas.</p>
</div>


<div class="gallery-txt">
	<div class="block bg"></div>
	<div class="block desc">
		<h1>Misión</h1>
		<p>Resaltar tu belleza natural.</p>

		<h1>Visión</h1>
		<p>Ser tu centro de protección y renovación vital.</p>
	</div>
</div>


<div class="gallery">
	<div class="box box1">
		<h1>CEJAS Y PESTAÑAS</h1>
		<a href="#" class="filled">VER CARTA</a>
	</div>
	<div class="box box2">
		<h1>FACIALES Y CORPORALES</h1>
		<!-- <a href="#" class="empty">VER CARTA</a> -->
		<a href="#" class="filled">VER CARTA</a>
	</div>
	<!-- <div class="box box3">
	</div> -->
</div>



<?php require_once("include/footer.php");?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/global.1.0.0.js"></script>
</body>
</html>
