<?php

namespace src\Tools;


class Validation
{
    static function Required($keys,  $request){

        $message = array();
        foreach ($keys as $key){
            if(array_key_exists($key, $request)) {
                if($request[$key] == ''){
                    array_push($message, 'Todos los campos del formulario son requeridos');
                    break;
                }
            }
        }
        return $message;
    }

    static function validateFields($campo, $op){
        if($op == 1){
            $fields = array( 2 => 'CC', 3 => 'TI', 4 => 'NP');
        }else{
            $fields = array(2 => 'F', 3 => 'M');
        }
        if(array_search($campo, $fields) > 1){
            return true;
        }
        return false;
    }

    static function areLetters($campo){
        if(preg_match('|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|', $campo)) {
           return true;
        }
        return false;
    }

    static function isNumber($campo){
        if(filter_var($campo, FILTER_VALIDATE_INT)){
            return true;
        }
        return false;
    }
    
    static function isEmail($campo){
        if(filter_var($campo, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

}