<?php
include_once('Conexion.php');

class Usuario{
	private nombre;
	private pass;
	private correo;
	private tipo;
	
	/*User constructor*/
	function __construct($nombre, $id, $pass, $email, $tipo){
		$this->nombre = $nombre;
		$this->pass = $pass;
		$this->correo = $correo;
		$this->tipo = $tipo;
    }
	
	/*Getters and Setters*/
	public function get_nombre(){
		return $this->nombre;
    }
	
	 public function get_pass(){
		return $this->pass;
    }
	
	 public function get_correo(){
		return $this->correo;
    }
	
	public function set_nombre($nombre){
		$this->nombre = $nombre;
    }
	
	public function set_pass($pass){
		$this->pass = $pass;
    }
	
	public function set_correo($correo){
		$this->correo = $correo;
    }
	
	public function agrega_usuario(){
		$con = new Conexion(); 
		$query = "INSERT INTO USUARIO VALUES ('".$this->correo.
				"', '".$this->nombre."', '".$this->pass."', '".$this->tipo."')";
		$sentencia = mysql_query($query,$con->connect());
		if($sentencia){ 
			return $sentencia;
		}else{
			return false;
		}	
	}
}
?>