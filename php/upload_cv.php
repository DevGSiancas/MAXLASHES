<?php

if(isset($_POST["submit_cv"])){

	$file_temp = $_FILES["file"]["tmp_name"];
	$file_size = $_FILES["file"]["size"];
	$file_name = $_FILES["file"]["name"];

	$fullname = $_POST["fullname"];
	$dni = $_POST["identification"];
	$email = $_POST["email"];
	$district = $_POST["district"];
	$telephone = $_POST["telephone"];

	echo $file_temp."<br>";
	echo $file_size."<br>";
	echo $file_name."<br>";
	echo $fullname."<br>";
	echo $dni."<br>";
	echo $email."<br>";
	echo $district."<br>";
	echo $telephone."<br>";

	if($file_size > 0){


	}else{header("location:gracias.php?status=1");}

}

?>