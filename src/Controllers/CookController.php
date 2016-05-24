<?php

namespace src\Controllers;


use src\DB\Ratings;
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
        $message = array();
        $keys = array('user_id', 'nombre_cocina');
        $message = Validation::Required($keys, $_POST);
        $request = (object) $_POST;
        $request->nombre_cocina = Image::saveImage($request->nombre_cocina);
        if(count($message) > 0){
            $flag = false;
        }
        if (Validation::isNumber($request->user_id)) {
            $flag = false;
        }
        if(! $this->user->ExistsForId($request->user_id)){
            $flag = false;
        }
        if($flag){
            if($this->cook->Create($request->user_id, $request->nombre_cocina)){
                header('Content-type: application/json; charset=utf-8');
                echo json_encode(array('menssage' => 'La cocina se ha guardado correctamente'));
                return true;
            }
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(array('menssage' => 'Error al guardar la cocina'));
            return false;
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode(array('menssage' => 'Error al guardar la cocina'));
        return false;
    }

    function Gallery(){
        $cocina = new UserCook();
        $cocina = $cocina->innerJoin('cocina_usuario.id as cocina_id, 
                                    cocina_usuario.nombre_cocina as ruta_imagen, 
                                    usuarios.user_id as user_id, 
                                    CONCAT(SUBSTRING_INDEX(usuarios.`names`, \' \', 1), \' \', SUBSTRING_INDEX(usuarios.lastname, \' \', 1)) as nombre_usuario',
                                    'usuarios',
                                    'usuarios.user_id = cocina_usuario.user_id');
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($cocina);
    }

    function Vote(){
        $rating = new Ratings();

    }
        
}