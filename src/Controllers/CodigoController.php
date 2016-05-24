<?php

namespace src\Controllers;

use src\DB\Code;
use src\DB\User;
use src\DB\UserCode;

class CodigoController
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
        $datos = array('codigo' => 'o45x19wv', 'document' => '1038409053');
        $request = (object)$datos;
        if ($this->code->existsCode($request->codigo)) {
            if ($this->code->getStatus() == 0 || $this->code->getStatus() == '0') {
                $user = new User();
                $user = $user->FindWhere('document = ' . $request->document);
                if ($this->usercode->Create($user->user_id, $this->code->getIdCodigo())) {
                    $this->code->updateStatus();
                    header('Content-type: application/json; charset=utf-8');
                    echo json_encode(array('message' => 'Código registrado correctamente'));
                    return true;
                }
                header('Content-type: application/json; charset=utf-8');
                echo json_encode(array('message' => 'Error al registrar el código'));
                return false;
            }
            header('Content-type: application/json; charset=utf-8');
            echo json_encode(array('message' => 'Error al registrar el código'));
            return false;
        }
        header('Content-type: application/json; charset=utf-8');
        echo json_encode(array('message' => 'Error al registrar el código'));
        return false;
    }

}