<?php
class Usuario{
	private nombre;
	private pass;
	private correo;
	
	/*User constructor*/
	function __construct($nombre, $id, $pass, $email){
		$this->nombre = $nombre;
		$this->pass = $pass;
		$this->correo = $correo;
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
	
}
?>