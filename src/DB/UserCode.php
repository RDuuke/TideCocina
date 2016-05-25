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

    public function Total($user_id){
        $sth = $this->conexion->prepare(" SELECT COUNT(*) AS total FROM $this->table WHERE usuario_id = :usuario_id ");
        $sth->binParam(':usuario_id', $user_id, \PDO::PARAM_INT);
        $sth->execute();
        if($sth->rowCount() > 0){
            $data = $sth->fetch(\PDO::FETCH_OBJ);
            return $data->total;
        }
        return 0;
    }
}