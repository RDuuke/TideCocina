<?php

namespace src\DB;

use src\DB\Model;

class Ratings extends Model
{
    protected $table = 'votaciones';
    protected $conexion;

    public function Create($cocid, $usid, $email){
        $sth = $this->conexion->prepare("INSERT INTO $this->table (cocina_id, user_id, correo_votante) VALUE (:cocina_id, :use_id, :correo_votante)");
        $sth->bindParam(':cocina_id', $cocid, \PDO::PARAM_INT);
        $sth->bindParam(':user_id', $usid, \PDO::PARAM_INT);
        $sth->bindParam(':correo_votante', $email, \PDO::PARAM_STR);
        if($sth->excute()){
            return true;
        }
        return false;
    }
}