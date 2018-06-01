<?php

// Specifying the type of content we are going to deliver o donwload

$file = "excel_export.xls";
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=$file");

require_once("php/db_connection.php");

$type_of_file = $_GET["status"];


############################################################################################################
#					This is code for exporting the excel from the index page							   #
############################################################################################################

if($type_of_file == 1){

	if($query = mysqli_query($connect , "SELECT * FROM reservas ORDER BY time_register DESC")){

		if(mysqli_num_rows($query)){



			$content = '<table><thead><tr><th>#</th><th>Nombres</th><th>Email</th><th>Telefono</th><th>Servicio</th>
						<th>Mensaje</th><th>Fecha y Hora</th></tr></thead><tbody>';
			$number = 1;

			while ($data = mysqli_fetch_assoc($query)) {

				$content.= '<tr>
							<td><strong>'.$number++.'</strong></td>
							<td>'.ucwords($data["fullname"]).'</td>
							<td>'.$correo.'</td>
							<td>'.$data["telephone"].'</td>
							<td>'.$data["service"].'</td>
							<td>'.$data["message"].'</td>
							<td>'.$data["time_date_reserva"].'</td>
						</tr>';
			}

			$content.= '</tbody></table>';
			echo $content;

		}else{echo "<h3>Lista Vacia<br><small>No hay nada que cargar.</small></h3>";}

	}else{echo "<h3>Ooh No! <br><small>Tuvimos un problema y no pudimos cargar estos datos.</small></h3>";}

}


############################################################################################################
#					This is code for exporting the excel from the empleos page							   #
############################################################################################################



if($type_of_file == 2){

	if($query = mysqli_query($connect , "SELECT * FROM trabajos ORDER BY registered_date DESC")){

		if(mysqli_num_rows($query)){



			$content = '<table><thead><tr><th>#</th><th>Nombres</th><th>Email</th><th>Telefono</th><th>DNI</th><th>
						Ubicacion</th><th>Fecha Postulacion</th></tr></thead><tbody>';
			$number = 1;

			while ($data = mysqli_fetch_assoc($query)) {

				$phpdate = strtotime( $data["registered_date"] );
				$date = date( 'Y-m-d H:i:s', $phpdate );

				$content .='<tr>
								<td><strong>'.$number++.'</strong></td>
								<td>'.ucwords($data["fullname"]).'</td>
								<td>'.$correo.'</td>
								<td>'.$data["telephone"].'</td>
								<td>'.$data["dni"].'</td>
								<td>'.$data["district"].'</td>
								<td>'.$date.'</td>
							</tr>';
			}

			$content.= '</tbody></table>';
			echo $content;

		}else{echo "<h3>Lista Vacia<br><small>No hay nada que cargar.</small></h3>";}

	}else{echo "<h3>Ooh No! <br><small>Tuvimos un problema y no pudimos cargar esta pagina.</small></h3>";}

}



############################################################################################################
#					This is code for exporting the excel from the reservas page							   #
############################################################################################################



if($type_of_file == 3){

	if($query = mysqli_query($connect , "SELECT * FROM franquicias ORDER BY date_register DESC")){

		if(mysqli_num_rows($query)){



			$content = '<table><thead><tr><th>#</th><th>Nombres</th><th>Mensaje</th><th>Telefono</th><th>Correo</th>
						<th>Fecha Registro</th></tr></thead><tbody>';
			$number = 1;

			while ($data = mysqli_fetch_assoc($query)) {

				$content .='<tr>
								<td><strong>'.$number++.'</strong></td>
								<td>'.$data["fullname"].'</td>
								<td>'.$data["message"].'</td>
								<td>'.$data["telephone"].'</td>
								<td>'.$correo.'</td>
								<td>'.$date.'</td>
							</tr>';
			}

			$content.= '</tbody></table>';
			echo $content;

		}else{echo "<h3>Lista Vacia<br><small>No hay nada que cargar.</small></h3>";}

	}else{echo "<h3>Ooh No! <br><small>Tuvimos un problema y no pudimos cargar los datos .</small></h3>";}

}



























?>
