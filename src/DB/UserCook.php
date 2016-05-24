<?php

namespace src\DB;

use src\DB\Model;

class UserCook extends Model
{
    protected $table = 'cocina_usuario';
    protected $conexion;
    public function Create($usid, $nameCocina){

        $sth = $this->conexion->prepare("INSERT INTO $this->table (user_id, nombre_cocina) VALUES (:user_id, :nombre_cocina)");
        $sth->bindParam(':user_id', $usid,  \PDO::PARAM_INT);
        $sth->bindParam(':nombre_cocina', $nameCocina, \PDO::PARAM_STR);
        if($sth->execute()){
            return true;
        }
        return false;
    }
}