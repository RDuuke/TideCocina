<?php

namespace src\Controllers;

use src\DB\User;
use src\DB\UserCook;
use src\Tools\Validation;

class UserController
{
    public function Store()
    {
        $keys = array('document', 'document_type', 'names', 'lastname', 'birthdate', 'gender', 'telephone', 'email', 'department', 'city', 'shop');
        $message = array();
        $message = Validation::Required($keys, $_POST);
        $request = (object)$_POST;
        $request->birthdate = $request->anno . '/' . $request->mes . '/' . $request->dia;
        if (! Validation::validateFields($request->document_type, 1)) {

            array_push($message, 'El tipo de documento no es valido');
        }
        if (! Validation::areLetters($request->names)) {
            array_push($message, 'El nombre no es correcto');
        }
        if (! Validation::areLetters($request->lastname)) {
            array_push($message, 'El apellido no es correcto');
        }
        if (! Validation::validateFields($request->gender, 2)) {
            array_push($message, 'El genero no es correcto');
        }
        if (! Validation::isNumber($request->department)) {
            array_push($message, 'El departamento no es valido');
        }
        if (! Validation::isNumber($request->city)) {
            array_push($message, 'La ciudad no es valida');
        }
        if (! Validation::isEmail($request->email)) {
            array_push($message, 'El correo no es valido');
        }
        if (count($message) == 0) {
            $user = new User();
            $user->document = $request->document;
            $user->documentType = $request->document_type;
            $user->names = $request->names;
            $user->lastname = $request->lastname;
            $user->birthdate = $request->birthdate;
            $user->gender = $request->gender;
            $user->telephone = $request->telephone;
            $user->email = $request->email;
            $user->department = $request->department;
            $user->city = $request->city;
            $user->shop = $request->shop;
            if ($user->create()) {
                header('Content-type: application/json; charset=utf-8');
                echo json_encode(array('menssage' => 'Registro correctamente', 'user_id' => $user->getUserId()));
                return true;
            }
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(array('menssage' => 'Error a la hora de registrar el usuario'));
            return false;
        } else {
            header('Content-type: application/json; charset=utf-8');
            echo json_encode($message);
            return false;
        }
    }


}