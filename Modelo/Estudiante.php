<?php
class Estudiante
{
	private $codigo;
	private $nit;
	private $nombres;
	private $telefono;
	private $direccion;
	private $correo;
	private $Conexion;
	
		public function setCodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	
	public function getCodigo()
	{
		return ($this->codigo);
	}
	
	public function setNit($nit)
	{
		$this->nit=$nit;
	}
	
	public function getNit()
	{
		return ($this->nit);
	}
	
		public function setNombres($nombres)
	{
		$this->nombres=$nombres;
	}
	
	public function getNombres()
	{
		return ($this->nombres);
	}
	public function setTelefono($telefono)
	{
		$this->telefono=$telefono;
	}
	
	public function getTelefono()
	{
		return ($this->telefono);
	}
	
		public function setDireccion($direccion)
	{
		$this->direccion=$direccion;
	}
	
	public function getDireccion()
	{
		return ($this->direccion);
	}
	
	public function setCorreo($correo)
	{
		$this->correo=$correo;
	}
	
	public function getCorreo()
	{
		return ($this->correo);
	}
	
	public function _construct()
	
	{
		
	}
	
	public function crearEstudiante($nit,$nombres,$telefono,$direccion,$correo)
	{

		$this->nit=$nit;
		$this->nombres=$nombres;
		$this->telefono=$telefono;
		$this->direccion=$direccion;
		$this->correo=$correo;
	}
	
	public function agregarEstudiante()
	{
		$this->Conexion=Conectarse();
		$sql="insert into estudiantes(estNit,estNombre,estTel,estDirec,estEmail) values ('$this->nit','$this->nombres','$this->telefono','$this->direccion','$this->correo')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	
	public function consultarEstudiantes()
	{
		$this->Conexion=Conectarse();
		$sql="select * from estudiantes";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	public function consultarEstudiante($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from estudiantes where estIdentificacion='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
}

?>