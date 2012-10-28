<?php
require_once(realpath(dirname(__FILE__)) . '/Documento.php');
require_once(realpath(dirname(__FILE__)) . '/Biblioteca.php');
require_once(realpath(dirname(__FILE__)) . '/Revision.php');

/**
 * @access public
 * @author hector
 */
class Comparar {
	/**
	 * @AttributeType Documentos[]
	 */
	private $_biblioteca;
	/**
	 * @AttributeType Documento
	 */
	private $_documento;
	/**
	 * @AssociationType Documento
	 */
	public $_unnamed_Documento_;
	/**
	 * @AssociationType Biblioteca
	 */
	public $_unnamed_Biblioteca_;
	/**
	 * @AssociationType Revision
	 */
	public $_unnamed_Revision_;

	/**
	 * @access private
	 * @return void
	 * @ReturnType void
	 */
	private function GenerarThreads() {
		// Not yet implemented
	}

	/**
	 * @access private
	 * @return void
	 * @ReturnType void
	 */
	private function RepartirCarga() {
		// Not yet implemented
	}

	/**
	 * @access private
	 * @return float
	 * @ReturnType float
	 */
	private function SumarResultados() {
		// Not yet implemented
	}
}
?>