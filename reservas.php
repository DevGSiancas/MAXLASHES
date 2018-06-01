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
	<meta name="description" content="Reserva tu cita para nuestros tratamientos corporales, faciales, lifting de pestañas, micropigmentación de cejas, extensión de pestañas, entre otros.">
	<meta name="autor" content="MDA , DEV-SIANCAS">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.css">
	<link rel="stylesheet" type="text/css" href="css/global.1.0.0.css"/>
	<link rel="stylesheet" type="text/css" href="css/reservas.1.0.0.css"/>
</head>
<body>

<?php require_once("include/header.php");?>
<?php require_once("php/reserve_process.php");?>

<!-- <div id="carousel-box" class="carousel slide desktop">
    <div class="carousel-inner">
    	<div class="item active">
    		<img src="recursos/Imagenes/5.Reservas/reservas_banner.jpg" class="desk-img">
    		<img src="recursos/Imagenes/5.Reservas/reservas_banner_mbl.jpg" class="mobil-img">
        </div>
    </div>
</div> -->
<br><br><br><br>

<div class="announce">
	<h1>RESERVAS</h1>
	<p>Este formulario está sujeto a disponibilidad de fechas y horarios. Nuestras especialistas realizan una consulta inicial gratuita, donde recomendamos el mejor tratamiento para ti.</p>
</div>

<div class="container">
	<form method="post">
		<h3>¡Déjanos tus datos y te llamamos!</h3>
		<input type="text" name="fullname" placeholder="Nombre y Apellido" required>
		<input type="email" name="email" placeholder="Correo Electrónico" required>
		<input type="text" name="whatsapp" placeholder="WhatsApp" required>
		<br><br>
		<p>¿Que tratamiento buscas?</p>
		<div class="input-customed">
			Cejas y Pestañas
			<input type="checkbox" name="service[]" id="cejas-pestanas" class="treatment" value="cejas pestanas" required>
			<span></span>
		</div>
		<div class="input-customed">
			Corporal y Faciales
			<input type="checkbox" name="service[]" id="corporal-facial" class="treatment" value="corporal facial" required>
			<span></span>
		</div>
		<!-- <select name="service" id="service" required>
			<option disabled>Seleccione tratamiento</option>
		</select> -->
		<input type="text" name="date" class="date date-picker" placeholder="dd/mm/yyyy" id="date" required>
		<textarea name="message" placeholder="Mensaje" rows="4"></textarea>
		<input type="submit" name="submit_reserva" value="ENVIAR">
	</form>
</div>


<div class="announce">
	<h1>¿CÓMO LLEGAR?</h1>
</div>


<div class="map" id="map"></div>


<?php require_once("include/footer.php");?>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/global.1.0.0.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyARacLyvn7ZJTsJSX_QMvFbaeE45nOgjKU" type="text/javascript"></script>
<script type="text/javascript">

    var locations = [
      ['Coronel Inclan 539', -12.1143855 , -77.0313141, 4],
      ['Av. El Polo 706', -12.1006847, -76.9713065, 5],
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: new google.maps.LatLng(-12.111458,-77.0043489),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }


    $(document).ready(function(){

		// $("form").on("change" , ".treatment" , function(){
		//
		// 	var select = $("#service");
		// 	var type = $(this).val();
		// 	var content = "";
		//
		// 	if(type == 1){
		// 		content+= '<option value="Extensiones de pestañas">Extensiones de pestañas</option>';
		// 		content+= '<option value="Lifting de Pestañas">Lifting de Pestañas</option>';
		// 		content+= '<option value="Microblading de pestañas">Microblading de pestañas</option>';
		// 		content+= '<option value="Microblading de cejas">Microblading de cejas</option>';
		// 		content+= '<option value="Diseño y definición de cejas">Diseño y definición de cejas</option>';
		// 	}else{
		// 		content+= '<option value="Hydrafacial">Hydrafacial</option>';
		// 		content+= '<option value="Hydra-System">Hydra-System</option>';
		// 		content+= '<option value="Antioxidante (Vitamina C)">Antioxidante (Vitamina C)</option>';
		// 		content+= '<option value="Velox – Tratamiento reductor">Velox – Tratamiento reductor</option>';
		// 		content+= '<option value="Carboxiterapia">Carboxiterapia</option>';
		// 	}
		// 	select.html(content);
		// })


		$('.date-picker').datepicker({
			startDate: "today"
		});

	});

</script>
</body>
</html>
