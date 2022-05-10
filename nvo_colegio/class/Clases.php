<?php 

//require_once("conexion.php");
require_once("autoload.php");

class Clases extends Conexion
{
	private $datos1;
	private $conexion;

	public function __construct()
	{
		$this->conexion=new Conexion();
		$this->conexion=$this->conexion->abrir_Conexion();		
	}


	public function Insertar_reg(int $id, string $nomb, string $apel, string $correo, string $pass)
	{

		$sql="insert into alumnos_colegio(id_estudiante, nombres_estud, apellidos_Estud, correo_estud, pasword_est) values(:id, :nomb, :apel, :correo, :pass)";
		$consulta=$this->conexion->prepare($sql);
		$consulta->BindValue(":id",$id);
		$consulta->BindValue(":nomb",$nomb);
		$consulta->BindValue(":apel", $apel);
		$consulta->BindValue(":correo",$correo);
		$consulta->BindValue(":pass",$pass);
		$resultado=$consulta->execute();

		echo "<script type='text/javascript'>
			alert('Registro Adicionado Correctamente...');
			window.location='consulta_est.php';
		</script>";
		return $resultado;
	}

	public function modificacion(int $id, string $nomb, string $apel, string $correo, string $pass)
	{

		$sql="update alumnos_colegio set 
		nombres_estud=:nombre, 
		apellidos_Estud=:apell, 
		correo_estud=:correoes, 
		pasword_est=:passw 
		where id_estudiante=:id";
		$consulta=$this->conexion->prepare($sql);
		
		$consulta->BindValue(":nombre",$nomb);
		$consulta->BindValue(":apell", $apel);
		$consulta->BindValue(":correoes",$correo);
		$consulta->BindValue(":passw",$pass);
		$consulta->BindValue(":id",$id);
		$consulta->execute();
		$resultado=$consulta->rowCount();
		//return $resultado;
		echo "<script type='text/javascript'>
			alert('Registro Modificado Correctamente');
			window.location='consulta_datos.php';
		</script>";
	}

	public function eliminar($id)
	{
		
		if($id=="")
		{
			echo "<script type='text/javascript'>
			alert('Proceso Cancelado....');
			window.location='elimina_reg.php';
			</script>";
		}

		$sql="delete from alumnos_colegio where id_estudiante=:id";
		$consulta=$this->conexion->prepare($sql);		
		$consulta->BindValue(":id",$id);
		$consulta->execute();
		$resultado=$consulta->rowCount();
		
		echo "<script type='text/javascript'>
		alert('Registro Eliminado Correctamente...');
		window.location='elimina_reg.php';
		</script>";

	}

	public function consulta_Reg()
	{
		$sql="select * from alumnos_colegio)";
		$consulta=$this->conexion->prepare($sql);				
		$consulta->execute();
		$resultado=$consulta->fetchAll(PDO:FETCH_ASSOC);
		return $resultado;
	}
	public function consulta_Unreg(int $id)
	{
		
		$sql="select * from alumnos_colegio where id_estudiante=:id";
		$consulta=$this->conexion->prepare($sql);
		$consulta->BindValue(":id",$id);		
		$consulta->execute();
		return $resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
		//return $resutado;
	}
	public function trae_todos()
	{
		$sql="select * from alumnos_colegio";
		$consulta=$this->conexion->prepare($sql);		
		$consulta->execute();
		return $resultado=$consulta->fetchAll(PDO::FETCH_ASSOC);
	}

}


 ?>