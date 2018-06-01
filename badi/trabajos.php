<?php

session_start();
error_reporting(0);

if(!isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] != TRUE){
	header("location:login.php");
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
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<!--[if !IE]><!-->
	<style>

		@font-face{

			font-family: RobotoMedium;
			src: url("../recursos/Tipografia/Roboto-Medium.ttf");
		}


		@font-face{

			font-family: RobotoLight;
			src: url("../recursos/Tipografia/Roboto-Light.ttf");
		}

		body
		{
		font-family: RobotoLight , sans-serif;
		}
		/*
		Max width before this PARTICULAR table gets nasty
		This query will take effect for any screen smaller than 760px
		and also iPads specifically.
		*/
		@media
		only screen and (max-width: 760px),
		(min-device-width: 768px) and (max-device-width: 1024px)  {

			/* Force table to not be like tables anymore */
			table, thead, tbody, th, td, tr {
				display: block;
			}

			/* Hide table headers (but not display: none;, for accessibility) */
			thead tr {
				position: absolute;
				top: -9999px;
				left: -9999px;
			}

			tr { border: 1px solid #ccc; }

			td {
				/* Behave  like a "row" */
				border: none;
				border-bottom: 1px solid #eee;
				position: relative;
				padding-left:50%;
			}

			td:before {
				/* Now like a table header */
				position: absolute;
				/* Top/left values mimic padding */
				top: 6px;
				left: 6px;
				width: 45%;
				padding-right: 20px;
				white-space: nowrap;
			}

			.nomover
			{
				text-align:center;
				padding-left: 6px;
			}

			/*
			Label the data
			*/



			td:nth-of-type(1):before { content: "# de Registro"; }
			/*td:nth-of-type(2):before { content: "Nombres"; }*/
			/*td:nth-of-type(3):before { content: "Email"; }*/
			td:nth-of-type(4):before { content: "DNI:"; }
			td:nth-of-type(5):before { content: "Telf:"; }
			/*td:nth-of-type(6):before { content: "Modalidad"; }
			td:nth-of-type(7):before { content: "Ubicacion"; }
			td:nth-of-type(8):before { content: "Fecha"; }*/


			/*.contacto:nth-of-type(1):before { content:  "#";}
			.contacto:nth-of-type(2):before { content:  "Nombre";}
			.contacto:nth-of-type(3):before { content:  "Email";}
			.contacto:nth-of-type(4):before { content:  "DNI";}
			.contacto:nth-of-type(5):before { content:  "Telefono";}
			.contacto:nth-of-type(6):before { content:  "Modalidad";}
			.contacto:nth-of-type(7):before { content:  "Ubicacion";}
			.contacto:nth-of-type(8):before { content:  "Fecha";}*/

		}

		/* Smartphones (portrait and landscape) ----------- */
		@media only screen
		and (min-device-width : 320px)
		and (max-device-width : 480px) {
			body {
				padding: 0;
				margin: 0;
				/*width: 320px;*/
				width:100%; }
			}

		/* iPads (portrait and landscape) ----------- */
		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
			body {
				/*width: 495px; */
				width:100%;
			}
		}


			#page-wrap {
			margin: 10px;
		}

		p {
			margin: 20px 0;
		}

		/*
		Generic Styling, for Desktops/Laptops
		*/
		table {
			width: 100%;
			border-collapse: collapse;
		}
		/* Zebra striping */
		tr:nth-of-type(odd) {
			background: #eee;
		}
		th {
			background: #333;
			color: white;
			font-weight: bold;
		}
		td, th {
			padding: 6px;
			border: 1px solid #ccc;
			text-align: left;
		}

	</style>
	<!--<![endif]-->

</head>
<body>

<?php

$title = "Empleos";
require_once("header.php");

?>

<div id="page-wrap">

	<a href="export_files.php?status=2" class="btn btn-success">Exportar Excel</a><br><br>

	<table>

		<thead>
			<tr>
		        <th>#</th>
		        <th>Nombres</th>
				<th>Email</th>
				<th>Telefono</th>
				<th>DNI</th>
		        <th>Ubicacion</th>
		        <th>CV</th>
				<th>Fecha Postulacion</th>
			</tr>
		</thead>

		<tbody>
		<?php

		require_once("../php/db_connection.php");
		$number = 1;

		if($query = mysqli_query($connect , "SELECT * FROM trabajos ORDER BY registered_date DESC")){

			if(mysqli_num_rows($query)){

				while ($data = mysqli_fetch_assoc($query)) {

					$correo = ($data["email"] == "")? "No Aplica" : $data["email"];
					$phpdate = strtotime( $data["registered_date"] );
					$date = date( 'Y-m-d H:i:s', $phpdate );

					echo '<tr>
							<td class="nomover"><strong>'.$number++.'</strong></td>
							<td class="nomover">'.ucwords($data["fullname"]).'</td>
							<td class="nomover">'.$correo.'</td>
							<td class="nomover">'.$data["telephone"].'</td>
							<td class="nomover">'.$data["dni"].'</td>
							<td class="nomover">'.$data["district"].'</td>
							<td class="nomover"><a href="../cvs/'.$data["cv"].'" download>Descargar CV</a></td>
							<td class="nomover">'.$date.'</td>
						</tr>';
				}

			}else{echo "<h3>Lista Vacia<br><small>No hay nada que cargar.</small></h3>";}

		}else{echo "<h3>Ooh No! <br><small>Tuvimos un problema y no pudimos cargar esta pagina.</small></h3>";}

		?>
        </tbody>

	</table>

</div>

</body>
</html>

<?php

$output = ob_get_contents();
ob_end_flush();

?>
