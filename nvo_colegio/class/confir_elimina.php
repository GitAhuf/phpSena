<?php
require_once("Clases.php");
if (!isset($_POST["conf_val"]))
{
	$cod=$_POST["documento"];

	$consulta=new Clases();

	$datos=$consulta->consulta_Unreg($cod);
	
}

if(isset($_POST["cancelar"])&&(isset($_POST["cancelar"])=="Cancelar"))
{
	echo "<script type='text/javascript'>
		alert('El Proceso a sido Cancelado....');
		window.location='elimina_reg.php';
	</script>";
}

if(isset($_POST['conf_val'])&&(isset($_POST["conf_val"])=="si"))
{
	
	$id=$_POST['nvoval'];
	$setea=new Clases();
	$datos1=$setea->eliminar($id);	
}


//print_r($datos);
//die();
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Consulta Elementos </title>
 	<link rel="stylesheet" href="../estilos/estilo_formulario.css">
 </head>
 <body>
 		<section class="formulario_registro">
 			<h4>Eliminacion Datos Estudiante</h4>
 			<form action="" method="post">
 			<input class="controles" type="text" name="identifica" id="identifica" 
 			value="<?php echo $datos[0]['id_estudiante']?>" disabled>
 			<input class="controles" type="text" name="nombres" id="nombre" value="<?php echo $datos[0]['nombres_estud']?>" disabled>
 			<input class="controles" type="text" name="apellidos" id="apellido" value="<?php echo $datos[0]['apellidos_Estud']?>" disabled>
 			<input class="controles" type="mail" name="correo_e" id="correo_e" value="<?php echo $datos[0]['correo_estud']?>" disabled>
 			<input class="controles" type="password" name="clave" id="clave" value="<?php echo $datos[0]['pasword_est']?>" disabled> 
 			<br>
 			<input class="mixto" type="submit" name="eliminar" value="Elimina">
 			<input class="mixto" type="submit" name="cancelar" value="Cancelar">
 			<input type="hidden" name="conf_val" value="si">
 			<input type="hidden" name="nvoval" value="<?php echo $datos[0]['id_estudiante']; ?>">
 			</form>
 		</section>
 	
 </body>
 </html>
