<?php
$DB_HOST = "localhost";
$DB_USERNAME = "root";
$DB_PASSWORD = "Shourtex1";
$DB_DATABASE ="rock_lml";

// Conexión
$db_conex = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

mysqli_query($db_conex, "SET NAMES 'utf8'");

// Revision de conexión
if ($db_conex->connect_error) {
       die("Error al intentar conectarse al servidor MySQLE: " . $db_conex->connect_error);
   }else{
		mysqli_query($db_conex, "SET NAMES 'utf8'"); 
   } 
?>
