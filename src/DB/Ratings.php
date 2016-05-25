<?php

namespace src\DB;

use src\DB\Model;

class Ratings extends Model
{
    protected $table = 'votaciones';
    protected $conexion;

    public function Create($cocid, $usid, $email){
        $sth = $this->conexion->prepare("INSERT INTO $this->table (cocina_id, user_id, correo_votante) VALUE (:cocina_id, :user_id, :correo_votante)");
        $sth->bindParam(':cocina_id', $cocid, \PDO::PARAM_INT);
        $sth->bindParam(':user_id', $usid, \PDO::PARAM_INT);
        $sth->bindParam(':correo_votante', $email, \PDO::PARAM_STR);
        if($sth->excute()){
            return true;
        }
        return false;
    }

    public function Update($cocid, $usid, $email){
        $sth = $this->conexion->prepare(" UPDATE $this->table SET cocina_id = :cocina_id WHERE correo_votante = :correo_votante AND user_id = :user_id");
        $sth->binParam(':cocina_id', $cocid, \PDO::PARAM_INT);
        $sth->binParam(':user_id', $usid, \PDO::PARAM_INT);
        $sth->binParam(':correo_votante', $email, \PDO::PARAM_STR);
        if($sth->execute()){
            return true;
        }
        return false;
    }

    public function totalVoteForIdCook($cocid){
        $sth = $this->conexion->prepare(" SELECT count(*) totalVotes FROM $this->table WHERE cocina_id = :cocina_id GROUP BY ('cocina_id')");
        $sth->binParam(':cocina_id', $cocid, \PDO::PARAM_INT);
        $sth->execute();
        $total= $sth->fetch(\PDO::FETCH_OBJ);
        return $total;
    }
}