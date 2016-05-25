<?php

namespace src\DB;
use src\DB\Model;

class User extends Model
{
    protected $table = 'usuarios';

    public $document;
    public $documentType;
    public $names;
    public $lastname;
    public $birthdate;
    public $gender;
    public $telephone;
    public $email;
    public $department;
    public $city;
    public $shop;
    protected $primaryKey = 'user_id';
    protected $userId;
    protected $conexion;
    
    public function create(){

            $sth = $this->conexion->prepare('INSERT INTO usuarios (
                                              document, document_type, names, lastname, birthdate, gender, telephone, email,
                                              department, city, shop, terms, authorization_info) 
                                              VALUES (
                                              :document, :document_type, :names, :lastname, :birthdate, :gender, :telephone, :email, :department, :city, :shop, 1, 1
                                              )');
            $sth->bindParam(':document', $this->document, \PDO::PARAM_INT);
            $sth->bindParam(':document_type', $this->documentType);
            $sth->bindParam(':names', $this->names, \PDO::PARAM_STR);
            $sth->bindParam(':lastname', $this->lastname, \PDO::PARAM_STR);
            $sth->bindParam(':birthdate', $this->birthdate, \PDO::PARAM_STR);
            $sth->bindParam(':gender', $this->gender);
            $sth->bindParam(':telephone', $this->telephone, \PDO::PARAM_INT);
            $sth->bindParam(':email', $this->email, \PDO::PARAM_STR);
            $sth->bindParam(':department', $this->department, \PDO::PARAM_INT);
            $sth->bindParam(':city', $this->city, \PDO::PARAM_INT);
            $sth->bindParam(':shop', $this->shop, \PDO::PARAM_STR);
            if($sth->execute()){
                $this->userId = $this->conexion->lastInsertId();
                echo true;
            }
            return print_r($sth->errorInfo());
    }

    public function getUserId()
    {
        return $this->userId;
    }
}