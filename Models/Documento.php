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
	 * @AttributeType String
	 */
	private $_texto;
	/**
	 * @AttributeType String[]
	 */
	private $_lineas;
	/**
	 * @AssociationType Revision
	 */
	public $_unnamed_Revision_;
	/**
	 * @AssociationType Comparar
	 */
	public $_unnamed_Comparar_;
	/**
	 * @AssociationType Biblioteca
	 */
	public $_unnamed_Biblioteca_;
	/**
	 * @AssociationType Profesor
	 */
	public $_unnamed_Profesor_;

	/**
	 * @access public
	 * @param aFile
	 */
	public function Documento($aFile) {
		// Not yet implemented
	}

	/**
	 * @access private
	 * @return String[]
	 * @ReturnType String[]
	 */
	private function DividirDocumento() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return String[]
	 * @ReturnType String[]
	 */
	public function getLineas() {
		return $this->_lineas;
	}
}
?>