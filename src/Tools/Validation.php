<?php

namespace src\Tools;


class Validation
{
    static function Required($keys,  $request){

        $message = array();
        foreach ($keys as $key){
            if(array_key_exists($key, $request)) {
                if($request[$key] == ''){
                    array_push($message, 'El '. $key . ' es obligatorio');
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
        if(! array_push($campo, $fields) > 1){
            return false;
        }
        return true;
    }

    static function areLetters($campo){
        if(! preg_match('[A-Za-z ]', $campo)) {
           return true;
        }
        return false;
    }

    static function isNumber($campo){
        if(! filter_var($campo, FILTER_VALIDATE_INT)){
            return true;
        }
        return false;
    }
    
    static function isEmail($campo){
        if(! filter_var($campo, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

}