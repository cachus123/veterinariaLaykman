<?php

define('APP_NAME','Sistema de veterinaria');
define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemaveterinaria');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "conexion exitosa con la base de datos";
}catch (PDOException $e) {
    // print_r($e);
    echo "error no se pudo conectar a la base de datos";

}

$URL = "http://localhost/veterinariaLaykman";

date_default_timezone_set("America/Mexico_City");
$fechaHora= date(format:'Y-m-d H:i:s'); //"2024-28-10 19:21:15";
