<?php

session_start();

// Destroying the logged_in session
unset($_SESSION["logged"]);
unset($_SESSION["CO_USUARIO"]);

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();
header("refresh:0");

if(!isset($_SESSION["logged"]) || $_SESSION["logged"] != TRUE){
	
	header("location:index.php");
	die("<h1>Pagina Indisponible</h1>");
}

?>