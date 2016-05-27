<?php

namespace src\DB;

use src\DB\Model;

class Code extends Model
{
    protected $table = 'codigo';

    protected $conexion;
    protected $idcodigo;
    protected $status;
    
    public function existsCode($code){
        $sth = $this->conexion->prepare(" SELECT * FROM $this->table WHERE codigo = '$code'");
        $sth->execute();
        $count = $sth->rowCount();
        if($count == 1){
            $data = $sth->fetch(\PDO::FETCH_OBJ);
            $this->idcodigo = $data->id;
            $this->status = $data->estado;
            return true;
        }
        return false;
    }

    
    public function updateStatus(){
        $sth = $this->conexion->prepare(" UPDATE $this->table SET estado = 1 WHERE id = :id");
        $sth->bindParam(':id', $this->idcodigo, \PDO::PARAM_INT);
        $sth->execute();
    }

    public function getIdCodigo()
    {
        return $this->idcodigo;
    }

    public function getStatus()
    {
        return $this->status;
    }
}