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
        $message = array();
        $keys = array('document', 'nombre_cocina');
        $message = Validation::Required($keys, $_POST);
        $request = (object) $_POST;
        $user = $this->user->FindWhere('document = '.$request->document);
        if(count($message) > 0){
            $flag = false;
        }
        if (! $user) {
            $flag = false;
        }

        if($flag){

            $codes = new Code();
            $code = $codes->innerJoinWhere('codigo.codigo', 'usuario_codigo', 'usuario_codigo.codigo_id = codigo.id', 'usuario_codigo.usuario_id = ' .$user->user_id .' AND codigo.estado = 0 LIMIT 1');
            if($code !== false){
                $request->nombre_cocina = Image::saveImage($request->nombre_cocina);
                if($this->cook->Create($user->user_id, $code->codigo, $request->nombre_cocina)){
                    $codes->existsCode($code->codigo);
                    $codes->updateStatus();
                    header('Content-type: application/json; charset=utf-8');
                    echo json_encode(array('menssage' => 'La cocina se ha guardado correctamente', 'status' => 1));
                    return true;
                }
            }
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(array('menssage' => 'No tienes códigos disponibles', 'status' => 0));
            return false;
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode(array('menssage' => 'Error al guardar la cocina', 'status' => 0 ));
        return false;
    }

    function Gallery(){
        $cocina = new UserCook();
        $rating = new Ratings();

        $cocina = $cocina->innerJoinMutiple('cocina_usuario.id as cocina_id,
                                        cocina_usuario.nombre_cocina as ruta_imagen,
                                        usuarios.user_id as user_id,
                                        CONCAT(SUBSTRING_INDEX(usuarios.`names`, \' \', 1), \' \', SUBSTRING_INDEX(usuarios.lastname, \' \', 1)) as nombre_usuario',

                                        'INNER JOIN usuarios ON usuarios.user_id = cocina_usuario.user_id ORDER BY cocina_usuario.id ASC');


        foreach ($cocina as $key => $value) {
               // $cocina->$key = array('total' => $total);
            $total =  $rating->totalVoteForIdCook($value['cocina_id']);
            $cocina[$key]['total'] = $total;

        }

        header('Content-type: application/json; charset=utf-8');
        echo json_encode($cocina);

    }

    function Vote(){
        $message = array();
        $flag = true;
        $keys = array('cocina_id', 'user_id', 'correo_votante');
        $message = Validation::Required($keys, $_POST);

        $request = (object) $_POST;
        if(count($message) == 0){
            if(! $this->user->ExistsForId($request->user_id)){
                $flag = false;
            }
            if(! Validation::isEmail($request->correo_votante)){
                echo $request->correo_votante;
                $flag = false;

            }
            if(! $this->cook->ExistsForId($request->cocina_id)){
                $flag = false;

            }
            if($flag){
                $rating = new Ratings();
                if($rating->FindWhere("correo_votante = '".$request->correo_votante."'") === false){
                    if($rating->Create($request->cocina_id, $request->user_id, $request->correo_votante)){
                        header('Content-type: application/json; charset=utf-8');
                        echo json_encode(array('message' => 'Has votado satisfactoriamente', 'status' => 1));
                        return true;
                    }

                }else{
                    if($rating->Update($request->cocina_id, $request->user_id, $request->correo_votante)){
                        header('Content-type: application/json; charset=utf-8');
                        echo json_encode(array('message' => 'Has votado satisfactoriamente', 'status' => 1));
                        return true;
                    }
                }
            }
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(array('message' => 'Error al votar', 'status' => 0));
            return false;
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($message);
        return false;
    }

}