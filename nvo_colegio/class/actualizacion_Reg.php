<?php
require_once("autoload.php");


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
 	<title>Modificacion Alumnos</title>
 	<link rel="../stylesheet" href="estilos/estilo_formulario.css">
 </head>
 <body>
 		<section class="formulario_registro">
 			<h4>Formulario Captura Estudiante</h4>
 			<form action="" method="post">
 			<input class="controles" type="text" name="identifica" id="identifica" placeholder="Digite El Numero de Documento">
 			Codigo : <select name="select_cod">
 				<option value="Cod. Estudiante"><?php echo $valor ?>></option>	
 				
 			</select>
 			<input class="controles" type="text" name="nombres" id="nombre" placeholder="Digite los nombres del Estudiante">
 			<br>
 			<input class="botones" type="submit" name="modificacion" value="Modificacion">
 			</form>
 		</section>
 	
 </body>
 </html>