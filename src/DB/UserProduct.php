<?php

namespace src\DB;

use src\DB\Model;

class UserProduct extends Model
{
    protected $table = 'usuario_producto';
    protected $conexion;

    public function Create($usid, $proid){

        $sth = $this->conexion->prepare("INSERT INTO $this->table (user_id, porduct_id) VALUES (:user_id, :product_id)");
        $sth->bindParam(':user_id', $usid, \PDO::PARAM_INT);
        $sth->bindParam(':product_id', $proid, \PDO::PARAM_INT);
        if($sth->execute()){
            return true;
        }
        return false;

    }
}