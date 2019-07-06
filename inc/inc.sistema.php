 <?php
//sheader('Content-type: text/html; charset=UTF-8');
define('DS', DIRECTORY_SEPARATOR);

$servidor = "http://localhost";
$sistema = "html/intranet";
$nombre_sistema = "proyecto_sistema";
$dominio = "" ;
$bandera = ""; // aquiva la imagen del sistema
$anio = date("Y");
$nombre_ente = "sistema realizado por anonimus";
$link_pag_web = "http:" .DS."www.practica_1.gob.ve";
define('RUTA_SISTEMA',str_replace('inc' . DS ,'',dirname(__FILE__).DS));
// echo RUTA_SISTEMA;


/* 
 
*/