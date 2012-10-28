<?php
class Conexion{
    private $_CON;

    function __construct(){
	$connection = array('localhost', 'root', '', 'busted');
	$this->_CON =  mysql_connect($connection[0], $connection[1], $connection[2]);
	mysql_select_db($connection[3], $this->_CON);
    }

    public function connect(){
	return $this->_CON;
    }
}
?>