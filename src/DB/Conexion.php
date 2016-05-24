<?php
namespace src\DB;

abstract class Conexion {
    protected $dns = 'mysql:host=localhost;dbname=development_db_tide_cocina;charset=utf8;';
    protected $username = 'root';
    protected $password = '';
    protected $conexion;

    public function __construct()
    {
        try{
            $this->conexion = new \PDO($this->dns, $this->username, $this->password);
            $this->conexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);

        }catch (\PDOException $e){
            print "!Error!: " . $e->getMessage();
            die();
        }
    }
}