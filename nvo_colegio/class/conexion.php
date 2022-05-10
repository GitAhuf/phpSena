<?php
//require_once("config.php");

class Conexion
{

	private $host="localhost";
	private $user="root";
	private $pass="";
	private $base="colegio_pru";
	private $conectar="";


	public function __construct()
	{
		
		$cadena="mysql:host=".$this->host.";dbname=".$this->base.";setcharset=utf8";

		try
		{
			$this->conectar=new PDO($cadena, $this->user,$this->pass);
			$this->conectar->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			//echo "Conexion Realizada....";
		}
		catch(Exception $e)
		{
			$this->conectar="Error de conexion con la BD";
			echo "Error al conectar con la Base de Datos ".$e->getMessage();	
		}
	}

	public function abrir_Conexion()
	{
		return $this->conectar;
	}
	


}


 ?>