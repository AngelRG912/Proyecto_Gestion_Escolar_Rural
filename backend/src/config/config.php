<?php
define('SERVIDOR', 'localhost'); 
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sistemagestionescolar');
define('APP_NAME', 'Sistema de Gestion Escolar');
//define('APP_URL', 'http://localhost/config.php'); 

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
   
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    
    
    $conexion = new PDO($servidor, USUARIO, PASSWORD, $opciones);
   //echo "Conexión exitosa a la base de datos";
    
} catch (PDOException $error) {
    echo "Conexión errónea: " . $error->getMessage();
}
date_default_timezone_set('America/Mexico_City');

$fecha_actual=date('Y-m-d');
$dia_actual=date('d');
$mes_actual=date('m');
$anio_actual=date('Y');
$hora_actual=date('H:i:s');

?>
