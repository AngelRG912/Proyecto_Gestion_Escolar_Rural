<?php
define('SERVIDOR', 'localhost'); 
define('USUARIO', 'root');
define('PASSWORD', '');
define('BD', 'sistemagestionescolar13');
define('APP_NAME', 'Sistema de Gestion Escolar');
define('APP_URL', 'http://localhost/config.php'); 

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
   
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    
    // Pasamos las opciones en el constructor de PDO
    $conexion = new PDO($servidor, USUARIO, PASSWORD, $opciones);
    echo "Conexión exitosa a la base de datos";
    
} catch (PDOException $error) {
    echo "Conexión errónea: " . $error->getMessage();
}

?>
