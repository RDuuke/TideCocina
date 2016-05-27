<?php
require_once 'PHPMailer/PHPMailerAutoload.php';

$url = "http://catalogos.negocioleonisa.com/catalogo/img/mailcorp.php";
//$url2 = "http://www.leonisacatalogos.com/catalogo/$pais/$camp/leonisa1.html";
$url2 = "http://catalogos.negocioleonisa.com/catalogo/Usa/1603/index.php";

$url3 = "http://catalogos.negocioleonisa.com/catalogo/img/mailcorp2.php";

function enviarEmail($nom_compradora, $nom_amiga, $url, $url2, $url3, $email, $sw,$subject = ""){
    $serverClient = new soapclient(null, array(
        "location" => "http://97.74.238.203/~kubbox2/leonisa/mail/server.php?wsdl",
        "uri" => "http://97.74.238.203/~kubbox2/leonisa/mail"
    ));
    $host = explode('@', $email);
    $host = explode('.', $host[1]);
    if ($host[0]=='hotmail') {
        $serverClient->__soapCall('sendMail', array('nom_compradora'=>$nom_compradora,
                'nom_amiga'=>$nom_amiga,
                'url'=>$url,
                'url2'=>$url2,
                'url3'=>$url3,
                'email'=>$email,
                'sw'=>$sw,
                'cod'=>$host[0],
                'idi'=>'es',
                'subject'=>$subject
            )
        );
    }else{
        $nom_amiga1= explode(" ", $nom_amiga);
        $nom_amiga= $nom_amiga1[0];
        $mail = new PHPMailer();
        $nom_compradora1= explode(" ", $nom_compradora);
        $nom_compradora= $nom_compradora1[0];
        $mail->IsHTML(true);
        $mail->SMTPAuth   = true;                  			// enable SMTP authentication
        $mail->SMTPSecure = "tls";                 			// sets the prefix to the servier
        $mail->Host       = "ssl://smtp.gmail.com";      	// sets GMAIL as the SMTP server
        $mail->Port       = 587;                   			// set the SMTP port for the GMAIL server
        $mail->Username   = "maquetacionkubbox@gmail.com";
        $mail->Password   = "herpypalma2414";						//Password to use for SMTP authentication
        $mail->From       = "maquetacionkubbox@gmail.com";
        $mail->FromName   = utf8_decode("Leonisa venta por cátalogo");
        $mail->addAddress($email);
        $result = json_decode($serverClient->__soapCall('sendMail', array('nom_compradora'=>$nom_compradora,
            'nom_amiga'=>$nom_amiga,
            'url'=>$url,
            'url2'=>$url2,
            'url3'=>$url3,
            'email'=>$email,
            'sw'=>$sw,
            'cod'=>$host[0],
            'idi'=>'es',
            'subject'=>$subject
        )));


        /*$mail->Subject = utf8_encode('Encuentra más de 30 páginas para sorprender a papá, en el catálogo de campaña 9 de Leonisa');//$result->subject;
        $mail->msgHTML(utf8_decode($result->body));
        if (!$mail->send()) {
            $mail->clearAddresses();
            //echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $mail->clearAddresses();
           // echo "Message sent!";
        }*/
    }
    print_r($result);
}
enviarEmail('Daniel', 'Juan Duque', $url, $url2, $url3, 'juuanduuke@gmail.com', 0 ,'testing');