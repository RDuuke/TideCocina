<?php

namespace src\Controllers;

use src\DB\Departament;
use src\DB\City;

class DataFormController
{
    public function getDepartament(){
        $departaments = new Departament();
        $departaments = $departaments->All();
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($departaments);
    }

    public function getCity(){
        $request = (object) $_GET;
        $city = new City();
        $city = $city->innerJoinWhere('ciudad.nombre, ciudad.ciudad_id','departamentos', 'departamentos.departamento_id = ciudad.departamento_id', 'ciudad.departamento_id = '.$request->id);
        header('Content-type: application/json; charset=utf-8');
        echo json_encode($city);
    }

}