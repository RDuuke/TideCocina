<?php

namespace src\DB;

use src\DB\Model;

class UserCode extends Model
{
    protected $table = 'usuario_codigo';

    protected $conexion;

    public function Create($iduser, $idcode){
        $sth = $this->conexion->prepare("INSERT INTO $this->table (usuario_id, codigo_id ) VALUES ( :iduser, :idcode )");
        $sth->bindParam(':iduser', $iduser, \PDO::PARAM_INT );
        $sth->bindParam(':idcode', $idcode, \PDO::PARAM_INT );
        if($sth->execute()){
            return true;
        }
        return false;
    }
}