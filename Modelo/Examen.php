<?php
class Examen
{
	private $codigo;
	private $nombres;
	private $nit;
	private $telefono;
	private $correo;
	private $pregunta1;
	private $pregunta2;
	private $pregunta3;
	private $pregunta4;
	private $pregunta5;
	private $pregunta6;
	private $pregunta7;
	private $pregunta8;
	private $pregunta9;
	private $pregunta10;
	private $pregunta11;
	private $pregunta12;
	private $pregunta13;
	private $pregunta14;
	private $Conexion;
	
		public function setCodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	
	public function getCodigo()
	{
		return ($this->codigo);
	}
	
	public function setNombres($nombres)
	{
		$this->nombres=$nombres;
	}
	
	public function getNombres()
	{
		return ($this->nombres);
	}
	
	public function setNit($nit)
	{
		$this->nit=$nit;
	}
	
	public function getNit()
	{
		return ($this->nit);
	}
	
	public function setTelefono($telefono)
	{
		$this->telefono=$telefono;
	}
	
	public function getTelefono()
	{
		return ($this->telefono);
	}
	
	public function setCorreo($correo)
	{
		$this->correo=$correo;
	}
	
	public function getCorreo()
	{
		return ($this->correo);
	}
	
	public function setPregunta1($pregunta1)
	{
		$this->pregunta1=$pregunta1;
	}
	
	public function getPregunta1()
	{
		return ($this->pregunta1);
	}
	
		public function setPregunta2($pregunta2)
	{
		$this->pregunta2=$pregunta2;
	}
	
	public function getPregunta2()
	{
		return ($this->pregunta2);
	}
	
		public function setPregunta3($pregunta3)
	{
		$this->pregunta3=$pregunta3;
	}
	
	public function getPregunta3()
	{
		return ($this->pregunta3);
	}
	
		public function setPregunta4($pregunta4)
	{
		$this->pregunta4=$pregunta4;
	}
	
	public function getPregunta4()
	{
		return ($this->pregunta4);
	}

	public function setPregunta5($pregunta5)
	{
		$this->pregunta5=$pregunta5;
	}
	
	public function getPregunta5()
	{
		return ($this->pregunta5);
	}
	
		public function setPregunta6($pregunta6)
	{
		$this->pregunta6=$pregunta6;
	}
	
	public function getPregunta6()
	{
		return ($this->pregunta6);
	}
	
		public function setPregunta7($pregunta7)
	{
		$this->pregunta7=$pregunta7;
	}
	
	public function getPregunta7()
	{
		return ($this->pregunta7);
	}
	
		public function setPregunta8($pregunta8)
	{
		$this->pregunta8=$pregunta8;
	}
	
	public function getPregunta8()
	{
		return ($this->pregunta8);
	}

	public function setPregunta9($pregunta9)
	{
		$this->pregunta9=$pregunta9;
	}
	
	public function getPregunta9()
	{
		return ($this->pregunta9);
	}
	
		public function setPregunta10($pregunta10)
	{
		$this->pregunta10=$pregunta10;
	}
	
	public function getPregunta10()
	{
		return ($this->pregunta10);
	}
	
		public function setPregunta11($pregunta11)
	{
		$this->pregunta11=$pregunta11;
	}
	
	public function getPregunta11()
	{
		return ($this->pregunta11);
	}
	
		public function setPregunta12($pregunta12)
	{
		$this->pregunta12=$pregunta12;
	}
	
	public function getPregunta12()
	{
		return ($this->pregunta12);
	}

	public function setPregunta13($pregunta13)
	{
		$this->pregunta13=$pregunta13;
	}
	
	public function getPregunta13()
	{
		return ($this->pregunta13);
	}
	
		public function setPregunta14($pregunta14)
	{
		$this->pregunta14=$pregunta14;
	}
	
	public function getPregunta14()
	{
		return ($this->pregunta14);
	}
	
	}
	public function _construct()
	
	{
		
	}
	
	public function crearExamen($codigo,$nombres,$nit,$telefono,$correo,$pregunta1,$pregunta2,$pregunta3,$pregunta4,$pregunta5,$pregunta6,$pregunta7,$pregunta8,$pregunta9,$pregunta10,$pregunta11,$pregunta12,$pregunta13,$pregunta14)
	{
		$this->codigo=$codigo;
		$this->nombres=$nombres;
		$this->nit=$nit;
		$this->telefono=$telefono;
		$this->correo=$correo;
		$this->pregunta1=$pregunta1;
				$this->pregunta2=$pregunta2;
						$this->pregunta3=$pregunta3;
								$this->pregunta4=$pregunta4;
										$this->pregunta5=$pregunta5;
												$this->pregunta6=$pregunta6;
														$this->pregunta7=$pregunta7;
																$this->pregunta8=$pregunta8;
																		$this->pregunta9=$pregunta9;
																				$this->pregunta10=$pregunta10;
																						$this->pregunta11=$pregunta11;
																								$this->pregunta12=$pregunta12;
																										$this->pregunta13=$pregunta13;
																												$this->pregunta14=$pregunta14;
	}
	
	public function agregarExamen()
	{
		$this->Conexion=Conectarse();
		$sql="insert into examen(idExamen,nombEst,identEst,telEst,correoEst,preg1, preg2, preg3, preg4, preg5, preg6, preg7, preg8, preg9, preg10, preg11, preg12, preg13, preg14) values ('$this->codigo','$this->nombres','$this->nit','$this->telefono','$this->correo','$this->pregunta1','$this->pregunta2','$this->pregunta3,'$this->pregunta4''$this->pregunta5','$this->pregunta6','$this->pregunta7','$this->pregunta8','$this->pregunta9','$this->pregunta10','$this->pregunta11','$this->pregunta12','$this->pregunta13','$this->pregunta14')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	/*
	public function consultarexamenes()
	{
		$this->Conexion=Conectarse();
		$sql="select * from examen";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	public function consultarExamen($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from examen where idExamen='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
		public function editarExamen()
	{
		$this->Conexion=Conectarse();
		$sql="update examen(nombEst,identEst,telEst,correoEst,preg1, preg2, preg3, preg4, preg5, preg6, preg7, preg8, preg9, preg10, preg11, preg12, preg13, preg14) values ('$this->nombres','$this->nit','$this->telefono','$this->correo','$this->pregunta1','$this->pregunta2','$this->pregunta3,'$this->pregunta4''$this->pregunta5','$this->pregunta6','$this->pregunta7','$this->pregunta8','$this->pregunta9','$this->pregunta10','$this->pregunta11','$this->pregunta12','$this->pregunta13','$this->pregunta14')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	*/
	
}

?>