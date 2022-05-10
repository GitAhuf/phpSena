<?php 
require_once("autoload.php");
$consulta=new Clases();
$todos=$consulta->trae_todos();

?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Modificacion Alumnos</title>
 	<link rel="stylesheet" href="../estilos/estilo_formulario.css">
 </head>
 <body>
 		<section class="formulario_registro">
 			<h4>Formulario Captura Estudiante</h4>
 			<form action="modifica_datos.php" method="post">
 				<select name="documento" class="controles">
 					<?php
 						for($i=0;$i<count($todos);$i++)
 						{
 							$codig=$todos[$i]["id_estudiante"];
 							$nomcom=$todos[$i]["nombres_estud"]."  ".$todos[$i]["apellidos_Estud"]."  ".$codig;
 							?>
 								<option value="<?php echo $codig ?>"><?php echo $nomcom?></option>
                                
 							<?php
 						}
 					?>
 				</select>
	 			<br>
	 			<input class="botones" type="submit" name="modifica" value="Modifica">
 			</form>
 		</section>
 	
 </body>
 </html>