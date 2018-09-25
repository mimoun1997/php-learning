<?php


//require 'framework/bootstrap.php';
require  'vendor/autoload.php';

//Dos Opcions:
// -Funció global

//require direct($uri);
// -Metode dins classe ( funció dins d'una classe el seu nom tècnic mètode)

//$router = new Router();

echo "<pre>";

var_dump($_SERVER['REQUEST_URI']);

echo "</pre>";


require Router::direct($uri);