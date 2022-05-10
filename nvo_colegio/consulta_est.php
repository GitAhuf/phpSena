<?php
require_once("class/autoload.php");
//require_once("class/class.php");


if (isset($_POST["adicion"]))
{
	
	$v1=$_POST["identifica"];
	$v2=$_POST["nombres"];
	$v3=$_POST["Apellidos"];
	$v4=$_POST["correo_e"];
	$v5=$_POST["clave"];
	
	//$tra=new Trabajo();
	//$datos=$tra->guardar_Datos($v1,$v2,$v3,$v4,$v5);
	//print_r("LLegamos hasta aqui");


	$inserta=new Clases();
	$resultado=$inserta->Insertar_reg($v1,$v2,$v3,$v4,$v5);
	echo $resultado;

}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Consulta Elementos </title>
 	<link rel="stylesheet" href="estilos/estilo_formulario.css">
 </head>
 <body>
 		<section class="formulario_registro">
 			<h4>Formulario Captura Estudiante</h4>
 			<form action="" method="post">
 			<input class="controles" type="text" name="identifica" id="identifica" placeholder="Digite El Numero de Documento">
 			<input class="controles" type="text" name="nombres" id="nombre" placeholder="Digite los nombres del Estudiante">
 			<input class="controles" type="text" name="Apellidos" id="apellido" placeholder="Digite los Apellidos">
 			<input class="controles" type="mail" name="correo_e" id="correo_e" placeholder="Digite el Correo Elect">
 			<input class="controles" type="password" name="clave" id="claves" placeholder="Digite la Clave del estuduante" > 
 			<br>
 			<input class="botones" type="submit" name="adicion" value="Adicionar">
 			</form>
 		</section>
 	
 </body>
 </html>