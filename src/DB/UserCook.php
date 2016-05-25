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

    public function Total($user_id){
        $sth = $this->conexion->prepare(" SELECT COUNT(*) AS total FROM $this->table WHERE user_id = :usuario_id ");
        $sth->binParam(':usuario_id', $user_id, \PDO::PARAM_INT);
        $sth->execute();
        if($sth->rowCount() > 0){
            $data = $sth->fetch(\PDO::FETCH_OBJ);
            return $data->total;
        }
        return 0;
    }
}