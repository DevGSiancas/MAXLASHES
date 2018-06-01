<?php

error_reporting(0);

if(isset($_POST["submit_trabajo"])){

	require_once("php/db_connection.php");

	$fullname = stripslashes(htmlspecialchars(mysqli_real_escape_string($connect , $_POST["fullname"])));
	$dni = stripslashes(htmlspecialchars(mysqli_real_escape_string($connect , $_POST["identification"])));
	$email = stripslashes(htmlspecialchars(mysqli_real_escape_string($connect , $_POST["email"])));
	$district = stripslashes(htmlspecialchars(mysqli_real_escape_string($connect , $_POST["district"])));
	$whatsapp = stripslashes(htmlspecialchars(mysqli_real_escape_string($connect , $_POST["telephone"])));

	$cv = stripslashes(htmlspecialchars(mysqli_real_escape_string($connect , $_FILES["file"]["name"])));
	$cv = str_replace(' ', '_', $cv); // Quitando espacios
	$temp = $_FILES["file"]["tmp_name"];


	$statement = "INSERT INTO
					trabajos
				VALUES
					(NULL , '$fullname' , '$dni' , '$email' , '$district' , '$whatsapp' , '$cv' , NOW())";

	if(move_uploaded_file($temp , "cvs/".$cv)){

		if(mysqli_query($connect , $statement)){

			$to      = 'trabajaconosotros@maxlashes.com';
			$subject = 'Mensaje nuevo de TRABAJO';
			$message = '<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><meta name="viewport" content="width:device-width, initial-scale=1.0"/><title>MAXLASHES</title></head><body style="background:#fafafa;font-family:sans-serif;"><table style="border:1px solid rgba(0,0,0,0.1);background:#fff;margin:5% auto 0 auto;width:94%;max-width:580px;padding:25px 4%;box-shadow:0px 0px 20px rgba(0,0,0,0.4);color:#242424;"><tr><td style="text-align:center;"><a href="http://max.mda.pe/" target="_blank"><img src="../recursos/max_logo.png"></a></td></tr><tr><td><br><hr style="opacity:0.2"><br></td></tr><tr><td><p style="text-align:justify;">Hemos recibido una postulacion de trabajo con los siguientes datos:</p></td></tr><tr><td><br><strong>Nombre Completo: </strong>'.$fullname.'</td></tr><tr><td><br><strong>DNI: </strong>'.$dni.'</td></tr><tr><td><br><strong>Correo electronico: </strong>'.$email.'</td></tr><tr><td><br><strong>Distrito: </strong>'.$district.'</td></tr><tr><td><br><strong>Celular: </strong>'.$whatsapp.'</td></tr></table><table table style="border:1px solid rgba(0,0,0,0.1);background:#2f1b45;margin:auto;width:94%;max-width:580px;padding:15px 3%;box-shadow:0px 10px 20px rgba(0,0,0,0.4);color:#343434;z-index:99"><tr><td style="color:#fff">Copyright 2018 MDA - <a href="https://mda.pe/" target="_blank" style="color:#fff">Consultora Estratégica</a></td></tr></table></body></html>';

			$headers = 'From:MDA Consultores - MAX Trabajo';

			mail($to, $subject, $message, $headers);
			header("location:trabajos.php?status=1");
		}
		else{
			header("location:404.php?status=2");
		}

	}else{header("location:404.php?status=2");}

}

?>
