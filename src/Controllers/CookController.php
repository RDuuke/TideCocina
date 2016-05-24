<?php

namespace src\Controllers;


use src\DB\User;
use src\DB\UserCook;
use src\Tools\Image;
use src\Tools\Validation;

class CookController
{
    protected $cook;
    protected $user;

    function __construct()
    {
        $this->cook = new UserCook();
        $this->user = new User();
    }

    function Store(){
        $flag = true;
        $keys = array('user_id', 'nombre_cocina');

        $message = Validation::Required($keys, $_POST);
        $request = (object) $_POST;
        $request->nombre_cocina = Image::saveImage($request->nombre_cocina);

        if (Validation::isNumber($request->user_id)) {
            $flag = false;
        }
        if(! $this->user->ExistsForId($request->user_id)){
            $flag = false;
        }
        if($flag){
            if($this->cook->Create($request->user_id, $request->nombre_cocina)){
                header('Content-type: application/json; charset=utf-8');
                echo json_encode(['menssage' => 'La cocina se ha guardado correctamente']);
                return true;
            }
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(['menssage' => 'Error al guardar la cocina']);
            return false;
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode(['menssage' => 'Error al guardar la cocina']);
        return false;
    }
        
}