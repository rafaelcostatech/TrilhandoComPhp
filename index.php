<?php
include 'config.php';
session_start();



$rota = ltrim(($_SERVER["REQUEST_URI"]), '/');

function rotas($routes, $rota)
{


if (in_array($rota, $routes)){
	require_once $rota . '.php';
} elseif ($rota == '') {
	require_once 'home.php';
} 
else {
	require_once('404.php');
	header("HTTP/1.0 404 Not Found");
}

}

rotas($routes, $rota);






?>

