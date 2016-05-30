<?php

namespace src\Controllers;

use src\DB\Code;
use src\DB\User;
use src\DB\UserCode;

class CodeController
{
    protected $code;
    protected $usercode;

    public function __construct()
    {
        $this->code = new Code();
        $this->usercode = new UserCode();
    }

    public function Store()
    {
        $request = (object)$_POST;
        if ($this->code->existsCode($request->codigo)) {
            if ($this->code->getStatus() == 0 || $this->code->getStatus() == '0') {
                $user = new User();
                $user = $user->FindWhere('document = ' . $request->document);
                if ($this->usercode->Create($user->user_id, $this->code->getIdCodigo())) {
                    header('Content-type: application/json; charset=utf-8');
                    echo json_encode(array('message' => 'Código registrado correctamente', 'status' => 1));
                    return true;
                }
                header('Content-type: application/json; charset=utf-8');
                echo json_encode(array('message' => 'Error al registrar el código', 'status' => 0));
                return false;
            }
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(array('message' => 'Error al registrar el código', 'status' => 0));
            return false;
            
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode(array('message' => 'Error al registrar el código', 'status' => 0));
        return false;
    }

}