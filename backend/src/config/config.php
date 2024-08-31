<?php
define('SERVIDOR',localhost);
define('USUARIO','root');
define('PASSWORD','');
define('BD',"sistemagestionescolar13");
define('APP_NAME','Sistema de Gestion Escolar');
define('APP_URL','http://localhost/config.php')
$servidor="mysql:dbname="BD.";host=".SERVIDOR;
try{
$conexion=new PDO($servidor,USUARIO,PASSWORD);


}catch(PDOException $error){
    echo "conexion erronea".$error;
}

?>