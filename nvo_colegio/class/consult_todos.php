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
 	<title>Consulta de Estudiantes</title>
 </head>
 <body>
 	<table width="98%" border="1">
 		<thead>
            <tr>
                <h2><center>Colegio La Esperanza de Soacha</center></h2>
            </tr>
            <tr>
                <h3><center>Listado General de Alumnos Matriculado Por Grupo</center></h3>
            </tr>
 			<tr bgcolor="#989191">
 				<th>Identidad</th>
 				<th>Nombres</th>
 				<th>Apellidos</th>
 				<th>Correo</th>
 				<th>Correo Elect</th><br>
 			</tr>
 		</thead>
 		<tbody>
 			<tr>
                <?php
                $cant=1;
                    for($i=0;$i<count($todos);$i++)
                {
                    $v1=$todos[$i]["id_estudiante"];
                    $v2=$todos[$i]["nombres_estud"];
                    $v3=$todos[$i]["apellidos_Estud"];
                    $v4=$todos[$i]["correo_estud"];
                    $v5=$todos[$i]["pasword_est"];
                    $varia= ($cant%2)==0 ? '<tr style="background-color: #C8F6F8" color="#9DE5EC" font-weight:bold>' : '<tr style="background-color: #FDFBFB" color="#9DE5EC" font-weight:bold>';

                    $cant++;
                ?>
                    <?php echo $varia;?>
                    <td><?php echo $v1;?></td>
                    <td><?php echo $v2;?></td>
                    <td><?php echo $v3;?></td>
                    <td><?php echo $v4;?></td>
                    <td><?php echo $v5;?></td>
            </tr>       
                <?php 
                }
                ?>
                <tr>
                <th colspan=5>
                    Cantidad de Registros Leidos : <?php echo ($cant-1); ?>
                </th>
                </tr>
            
 		</tbody>


 	</table>
 	
 </body>
 </html>