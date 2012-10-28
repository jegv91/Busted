<?php
require_once(realpath(dirname(__FILE__)) . '/Profesor.php');
require_once(realpath(dirname(__FILE__)) . '/Documento.php');
require_once(realpath(dirname(__FILE__)) . '/Biblioteca.php');
require_once(realpath(dirname(__FILE__)) . '/Comparar.php');

/**
 * @access public
 * @author hector
 */
class Revision {
	/**
	 * @AttributeType Profesor
	 */
	public $_profesor;
	/**
	 * @AttributeType String
	 */
	private $_fecha;
	/**
	 * @AttributeType Documento
	 */
	private $_documento;
	/**
	 * @AttributeType Biblioteca
	 */
	private $_biblioteca;
	/**
	 * @AttributeType float
	 */
	private $_porcentajeCopia;
	/**
	 * @AssociationType Profesor
	 */
	public $_unnamed_Profesor_;
	/**
	 * @AssociationType Comparar
	 */
	public $_unnamed_Comparar_;
	/**
	 * @AssociationType Documento
	 */
	public $_unnamed_Documento_;
	/**
	 * @AssociationType Biblioteca
	 */
	public $_unnamed_Biblioteca_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function desplegarHistorial() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function desplegarRevisionActual() {
		// Not yet implemented
	}

	/**
	 * @access private
	 * @return float
	 * @ReturnType float
	 */
	private function analizar() {
		// Not yet implemented
	}

	/**
	 * @access private
	 * @return void
	 * @ReturnType void
	 */
	private function guardarRevision() {
		// Not yet implemented
	}
}
?>