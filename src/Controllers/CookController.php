<?php

namespace src\Controllers;


use src\DB\Code;
use src\DB\Ratings;
use src\DB\User;
use src\DB\UserCode;
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
        $datos = array('nombre_cocina' => 'o45x19wv', 'document' => '1038409053');
        $message = array();
        $keys = array('document', 'nombre_cocina');
        $message = Validation::Required($keys, $datos);
        $request = (object) $datos;
        $request->nombre_cocina = Image::saveImage($request->nombre_cocina);
        $user = $this->user->FindWhere('document = '.$request->document);
        if(count($message) > 0){
            $flag = false;
        }
        if (! $user) {
            $flag = false;
        }

        if($flag){
            $codes = new UserCode();
            if($codes->Total($user->user_id) > $this->cook->Total($user->user_id)){
                if($this->cook->Create($user->user_id, $request->nombre_cocina)){
                    $code = new Code();
                    $code->existsCode();
                    header('Content-type: application/json; charset=utf-8');
                    echo json_encode(array('menssage' => 'La cocina se ha guardado correctamente'));
                    return true;
                }
            }
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(array('menssage' => 'No tienes códigos disponibles'));
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
        $message = array();
        $keys = array('cocina_id', 'user_id', 'correo_votante');
        $message = Validation::Required($keys, $_POST);
        $request = (object) $_POST;
        if(! $this->user->ExistsForId($request->user_id)){
            /*error*/
        }
        if(! Validation::isEmail($request->correo_votante)){
            /*error*/
        }
        if(! $this->cook->ExistsForId($request->cocina_id)){
            /*error*/
        }

        $rating = new Ratings();


    }

}