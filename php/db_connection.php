<?php

define("HOST" , "localhost");
define("PASS" , "Max#123");
define("USER" , "maxlashes");
define("DB" , "max_demo");

$connect = mysqli_connect(HOST , USER , PASS , DB) or die("NO PUDIMOS CONECTAR AL SERVIDOR.");

?>