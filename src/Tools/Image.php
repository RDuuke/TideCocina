<?php


namespace src\Tools;


class Image
{
    /**
     * @param $image nombre imagen en base 64 del canvas de la cocina
     * el cual se guarda en la carpeta images/cocinas
     * @return string nombre de la imagen
     */
    static public function saveImage($image){

            $name = sha1(microtime()).'.png';
            $tmpFile = ROOT.'../images/cocinas/'.$name;
        
            $imageFile = fopen($tmpFile, 'w');
            fwrite($imageFile, base64_decode(str_replace('data:image/png;base64,', '', $image)));
            fclose($imageFile);
        return $name;
    }
}