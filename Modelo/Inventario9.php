<?php
class Inventario
{
	private $codigo;
	private $nombre;
	private $cantidad;
	private $final;
	private $Conexion;
	
		public function setcodigo($codigo)
	{
		$this->codigo=$codigo;
	}
	
	public function getcodigo()
	{
		return ($this->codigo);
	}
	
	public function setnombre($nombre)
	{
		$this->nombre=$nombre;
	}
	
	public function getnombre()
	{
		return ($this->nombre);
	}
	
	public function setcantidad($cantidad)
	{
		$this->cantidad=$cantidad;
	}
	
	public function getcantidad()
	{
		return ($this->cantidad);
	}
	
	public function setfinal($final)
	{
		$this->final=$final;
	}
	
	public function getfinal()
	{
		return ($this->final);
	}
	
	public function _construct()
	
	{
		
	}
	
	public function crearInventario($codigo, $nombre, $cantidad, $final)
	{
		$this->codigo=$codigo;
		$this->nombre=$nombre;
		$this->cantidad=$cantidad;
		$this->final=$final;
	}
	
	
	public function agregarInventario()
	{
		$this->Conexion=Conectarse();
		$sql="insert into inventariodistri(idElemento, nombElemento, cantElemento, finalElemento) values ('$this->codigo', '$this->nombre', '$this->cantidad', '$this->final')";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function restarInventario($id, $cantidadRestada)
	{
		$this->Conexion=Conectarse();
		$this->resultadoResta=$cantidad-$cantidadRestada;
		$this->idMerc=$id;
		if ($resultadoResta>=0)
		{
			$sql="UPDATE inventariodistri SET elemCantidad = " . $resultadoResta ."WHERE idElemento= " . $idMerc;
			$resultado=$this->Conexion->query($sql);
		}
		else
		{
			$resultado=false;
		}
		
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function debitarInventario()
	{
		$this->Conexion=Conectarse();
		$sql="UPDATE inventario SET cantidad = cantidad - cantidad" . $_REQUEST["cantidad"] . " WHERE elemCantidad = " . $_REQUEST["elemCantidad"];
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;	
	}
	
	public function consultarInventarios()
	{
		$this->Conexion=Conectarse();
		$sql="select * from inventariodistri";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	public function consultarInventario($codigo)
	{
		$this->Conexion=Conectarse();
		$sql="select * from inventariodistri where idElemento='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
	
	
	
	
		public function borrarInventario($nombre)
	{
		$this->Conexion=Conectarse();
		$sql="DELETE from inventariodistri where idElemento='$codigo'";
		$resultado=$this->Conexion->query($sql);
		$this->Conexion->close();
		return $resultado;
	}
}
?>