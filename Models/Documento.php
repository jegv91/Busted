<?php
require_once(realpath(dirname(__FILE__)) . '/Revision.php');
require_once(realpath(dirname(__FILE__)) . '/Comparar.php');
require_once(realpath(dirname(__FILE__)) . '/Biblioteca.php');
require_once(realpath(dirname(__FILE__)) . '/Profesor.php');

/**
 * @access public
 * @author hector
 */
class Documento {
	/**
	 * @AttributeType file
	 */
	private $archivo;
	/**
	 * @AttributeType String[]
	 */
	private $lineas;


	/**
	 * @access public
	 * @param file
	 * Metodo constructor encargado de inicializar el documento con un archivo
	 */
	public function __construct($file) {
		$this->archivo = $file;
	}


	/**
	 * @access public
	 * @param name:String
	 * Metodo magico "get" encargado de regresar cualquiera de los atributos de la clase
	 */
	public function __get($name) {
        return $this->$name = $value;
    }

	/**
	 * @access private
	 * @return String[]
	 * @ReturnType String[]
	 * Metodo encargado de dividir el documento a traves de un split quitando nuevas lineas y lineas
	 * vacias
	 */
	private function DividirDocumento() {
		$this->lineas = file($this->archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		if (isset($this->lineas) and empty($this->lineas) == false) {
			//Filtramos el arreglo que tenemos con nuestra funcion simple
			//M{1};
			$this->lineas = array_filter($this->lineas, array($this, "filtrado"));		
		}
	}

}
?>