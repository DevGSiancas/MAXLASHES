<?php

############################################
# For development                          #
############################################
// define("HOST" , "localhost");
// define("PASS" , "Max#123");
// define("USER" , "maxlashes");
// define("DB" , "max_demo");

############################################
# For  production                          #
############################################
define("HOST" , "localhost");
define("PASS" , "M@x1@2h32#123%!");
define("USER" , "maxlashes_con");
define("DB" , "maxlashes_2018_6");


$connect = mysqli_connect(HOST , USER , PASS , DB) or die("NO PUDIMOS CONECTAR AL SERVIDOR.");

?>
