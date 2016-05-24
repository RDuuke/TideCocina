<?php


$host = "codigosprevel.db.9954943.hostedresource.com";
$user = "codigosprevel";
$password  = "Kubbox2015@@"; 
$dbname = "codigosprevel";


// $host = "localhost";
// $user = "root";
// $password  = ""; 
// $dbname = "codigosprevel";


try{
    $conection =  new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $password );
    
}catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
}

$fecha = date("Y-m-d");
$ip = $_SERVER['REMOTE_ADDR'];


if(isset($_GET["rg"]))
{
	$identificacion 	= $_POST["documento"];
	$tipo 				= $_POST["tipo"];
	$nombre 			= $_POST["nombre"];
	$apellidos	    	= $_POST["apellido"];
	$fecha_dia 			= $_POST["dia"];
	$fecha_mes 			= $_POST["mes"];
	$fecha_ano 			= $_POST["ano"];
	$genero 			= $_POST["genero"];
	$telefono 			= $_POST["telefono"];
	$correo 			= $_POST["correo"];
	$departamento 		= $_POST["dpto"];
	$departamento 		= $departamento+1;
	$ciudad 			= $_POST["ciudad"];
	$marcas_compradas	= implode(",", $_POST["marca"]);
	$ck_terminos 		= 1;
	$ck_datos 			= 1;
	$sitio				= 2;
	// $sql = "INSERT INTO `clientes` ( `identificacion`, `tipo`, `nombre`, `apellidos`, `fecha_dia`, `fecha_mes`, `fecha_ano`, `genero`, `telefono`, `correo`, `departamento`, `ciudad`, `marcas_compradas`, `ck_terminos`, `ck_datos`, `fecha`, `ip`)  VALUES ( '".$identificacion."', '".$tipo."', '".$nombre."', '".$apellidos."', '".$fecha_dia ."', '".$fecha_mes."', '".$fecha_ano."', '".$genero."', '".$telefono."', '".$correo."', '".$departamento."', '".utf8_decode($ciudad)."', '".$marcas_compradas."', '".$ck_terminos."', '".$ck_datos."','".$fecha."','".$ip."')";

	try {
            $query = $conection->prepare('INSERT INTO `clientes` ( `identificacion`, `tipo`, `nombre`, `apellidos`, `fecha_dia`, `fecha_mes`, `fecha_ano`, `genero`, `telefono`, `correo`, `departamento`, `ciudad`, `marcas_compradas`, `ck_terminos`, `ck_datos`, `fecha`, `ip`,`sitio`)  VALUES ( ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
            $query->bindParam(1, $identificacion);
            $query->bindParam(2, $tipo);
            $query->bindParam(3, $nombre);
            $query->bindParam(4, $apellidos);
            $query->bindParam(5, $fecha_dia);
            $query->bindParam(6, $fecha_mes);
            $query->bindParam(7, $fecha_ano);
            $query->bindParam(8, $genero);
            $query->bindParam(9, $telefono);
            $query->bindParam(10, $correo);
            $query->bindParam(11, $departamento);
            $query->bindParam(12, $ciudad);
            $query->bindParam(13, $marcas_compradas);
            $query->bindParam(14, $ck_terminos);
            $query->bindParam(15, $ck_datos);
            $query->bindParam(16, $fecha);
            $query->bindParam(17, $ip);
            $query->bindParam(18, $sitio);

            if($query->execute()){
            	$conection = null;
            	echo 1;
            }else{
            	echo 0;
            }
        } catch (PDOException $e) {
            $e->getMessage();
            echo $e->getMessage();
        }




	die();
}


if(isset($_GET["val"]))
{
		$sql = 'SELECT identificacion FROM clientes WHERE identificacion ='.$_POST["identificacion"]. ' and sitio =2' ;
		try {
            $query = $conection->prepare($sql);
            $query->execute();
            $num =$query->fetchAll();
            echo count($num);
            $conection = null;
        }catch (PDOException $e) {
            $e->getMessage();
        }


}


if(isset($_GET["regCode"]))
{
	$sql = 'SELECT idCliente FROM clientes WHERE identificacion ='.$_POST["cedula"] . ' and sitio =2';
	try {
            $query = $conection->prepare($sql);
            $query->execute();
            $datos =$query->fetch(PDO::FETCH_ASSOC);
            $num= count($datos);

    }catch (PDOException $e) {
        $e->getMessage();
    }

    // var_dump($datos);
    // die();


	if(!$datos)
	{
		echo "La cedula ingresada no existe";
	
	}else{

		$id = $datos;

		$sql = "SELECT count(cliente_id) as total FROM codigostide WHERE cliente_id = '".$id["idCliente"]."'";
		try {
	            $query = $conection->prepare($sql);
	            $query->execute();
	            $datos =$query->fetch(PDO::FETCH_ASSOC);
	    }catch (PDOException $e) {
	        $e->getMessage();
	    }
	       

	    $sql = "SELECT * FROM codigostide WHERE codigo = '".$_POST["codigo"]."' limit 1";

			try {
	            $query = $conection->prepare($sql);
	            $query->execute();
	            $codigo =$query->fetchAll(PDO::FETCH_ASSOC);
	            $num2 = count($codigo);
		    }catch (PDOException $e) {
		        $e->getMessage();
		    }

		    //  echo "<pre>";
		    // var_dump($codigo);
		    // die;

			if($num2==0)
			{
				echo "El código ingresado no existe";
			
			}
			else{
				// 
				$sql = "SELECT * FROM codigostide WHERE codigo  =  '".$_POST["codigo"]."' and ip = '".$ip."' limit 1";
				
				try {
		            $query = $conection->prepare($sql);
					$query->execute();
	            	$codigos2 =$query->fetch(PDO::FETCH_ASSOC);
	            	// var_dump($codigos2);
	            	if(!$codigos2)
	            	{
	            		
			            		$sql = "SELECT * FROM codigostide WHERE codigo  =  '".$_POST["codigo"]."' and cliente_id = '".$id["idCliente"]."'";
								// echo $sql."<br>";
								try {
						            $query = $conection->prepare($sql);
									$query->execute();
					            	$codigos3 =$query->fetch(PDO::FETCH_ASSOC);
					            	// var_dump($codigos3);
					            	if(!$codigos3)
					            	{
			            				$sql = "SELECT * FROM codigostide WHERE codigo  =  '".$_POST["codigo"]."' and cliente_id is null limit 1";
					            		// echo $sql;
					            		try {
								            $query = $conection->prepare($sql);
											$query->execute();
							            	$codigos3 =$query->fetch(PDO::FETCH_ASSOC);
							            	// var_dump($codigos3);
							            	
							            	$query = $conection->prepare('update codigostide SET cliente_id = ?, fecha = ?, ip = ? WHERE codigo = ? and idCodigo =?');
								            $query->bindParam(1, $id["idCliente"]);
								            $query->bindParam(2, $fecha);
								            $query->bindParam(3, $ip);
								            $query->bindParam(4, $_POST["codigo"]);
								            $query->bindParam(5, $codigos3["idCodigo"]);
								            $query->execute();
								            $conection = null;
												echo "OK";


									    }catch (PDOException $e) {
									        $e->getMessage();
									    }


					            	}else{
					            		echo "El código registrado ya fue ingresado";
					            	}


							    }catch (PDOException $e) {
							        $e->getMessage();
							    }
			            
	            	}else{
	            		echo "El código registrado ya fue ingresado";
	            	}


			    }catch (PDOException $e) {
			        $e->getMessage();
			    }


				
			}
		
			
				
		
		
	}
	die();
}

