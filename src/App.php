<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);


error_reporting(E_ERROR);

include 'autoload.php';

//use src\Controllers\BootController as Boot;
$datos = explode( '/', $_REQUEST['f']);
$controller = $datos[0].'Controller';
$method = $datos[1];
$namespace=  'src\\Controllers\\'.$controller;
$function = new $namespace;
$data = call_user_func(array($function, $method));
