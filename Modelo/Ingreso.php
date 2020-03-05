<?php
class Ingreso
{
	private $codigo;
	private $concepto;
	private $valor;
	private $fecha;
	private $Conexion;
	
		public function setCodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	
	public function getCodigo()
	{
		return ($this->codigo);
	}
	
	public function setConcepto($concepto)
	{
		$this->concepto=$concepto;
	}
	
	public function getConcepto()
	{
		return ($this->concepto);
	}
	
	public function setValor($valor)
	{
		$this->valor=$valor;
	}
	
	public function getValor()
	{
		return ($this->valor);
	}
	public function setFecha($fecha)
	{
		$this->fecha=$fecha;
	}
	
	public function getFecha()
	{
		return ($this->fecha);
	}
	
	public function _construct()
	
	{
		
	}
	
	public function crearIngreso($codigo, $concepto, $valor, $fecha)
	{
		$this->codigo=$codigo;
		$this->concepto=$concepto;
		$this->valor=$valor;
		$this->fecha=$fecha;
	}
	
	public function agregarIngreso()
	{
		$this->Conexion=Conectarse();
		$sql="insert into ingresos(idIngreso, conceptoIngreso, valorIngreso, fechaIngreso) values ('$this->codigo', '$this->concepto', '$this->valor', '$this->fecha')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function restarIngreso($id, $cantidadRestada)
	{
		$this->Conexion=Conectarse();
		$this->resultadoResta=$cantidad-$cantidadRestada;
		$this->idMerc=$id;
		if ($resultadoResta>=0)
		{
			$sql="UPDATE ingresos SET elemCantidad = " . $resultadoResta ."WHERE idIngreso= " . $idMerc;
			$resultado=$this->Conexion->query($sql);
		}
		else
		{
			$resultado=false;
		}
		
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function debitarIngreso()
	{
		$this->Conexion=Conectarse();
		$sql="UPDATE ingresos SET cantidad = cantidad - cantidad" . $_REQUEST["cantidad"] . " WHERE elemCantidad = " . $_REQUEST["elemCantidad"];
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarIngresos()
	{
		$this->Conexion=Conectarse();
		$sql="select * from ingresos";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	public function consultarIngreso($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from ingresos where idIngreso='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	
	
		public function borrarIngreso($concepto)
	{
		$this->Conexion=Conectarse();
		$sql="DELETE from ingresos where idIngreso='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>