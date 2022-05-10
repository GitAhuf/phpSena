<?php 

require_once("autoload.php");
$consulta=new Clases();
$datos=$consulta->consulta_Unreg("133446");
print_r($datos);



 ?>