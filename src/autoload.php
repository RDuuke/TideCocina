<?php
    function getLoader(){
    spl_autoload_register(function($class){
        $ruta = str_replace("\\", "/", $class) . ".php";
        include '../'.$ruta;
    });
}
getLoader();