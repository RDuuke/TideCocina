<?php

namespace src\DB;
use src\DB\Conexion;

abstract class Model extends Conexion
{
    protected $table;
    protected $conexion;
    protected $primaryKey = 'id';

    /**
     * @param $sql #Parametro con la consulta where.
     * @return bool #true si encuentra algo y false si no.
     */
    function FindWhere ($sql){
        $result = $this->conexion->query(" SELECT * FROM $this->table WHERE $sql ");
        $count = $result->rowCount();
        if ($count > 0){
            $data = $result->fetch(\PDO::FETCH_OBJ);
            return $data;
            }
        return false;
    }

    /**
     * @return bool
     */
    public function All(){
        //$instance = new static;
        $result = $this->conexion->prepare(" SELECT * FROM $this->table ");
        if($result->execute()){
            $count = $result->rowCount();
            if ($count > 1){
                $result = $result->fetchAll(\PDO::FETCH_OBJ);
                return $result;
            }else if ($count == 1){
                $result = $result->fetch(\PDO::FETCH_OBJ);
                return $result;
            }
        }
        return false;

    }

    public function innerJoinWhere($select,$table, $campos, $where){
        $sth = $this->conexion->query(" SELECT $select FROM $this->table INNER JOIN $table ON $campos WHERE $where ");
        $count = $sth->rowCount();
            if ($count > 1){
                $result = $sth->fetchAll(\PDO::FETCH_OBJ);
                return $result;
            }else if ($count == 1) {
                $result = $sth->fetch(\PDO::FETCH_OBJ);
                return $result;
            }else{
                return false;
            }

    }

    public function ExistsForId($id){
        $result = $this->conexion->query(" SELECT * FROM $this->table WHERE $this->primaryKey = $id ");
        $count = $result->rowCount();
        if ($count > 0){
            return true;
        }
        return false;
    }
    
}