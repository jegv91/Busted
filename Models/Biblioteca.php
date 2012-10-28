<?php
require_once(realpath(dirname(__FILE__)) . '/Documento.php');
require_once(realpath(dirname(__FILE__)) . '/Revision.php');
require_once(realpath(dirname(__FILE__)) . '/Profesor.php');
require_once(realpath(dirname(__FILE__)) . '/Comparar.php');

/**
 * @access public
 * @author hector
 */
class Biblioteca {
	/**
	 * @AttributeType Documento[]
	 */
	private $_documentos;
	/**
	 * @AssociationType Revision
	 */
	public $_unnamed_Revision_;
	/**
	 * @AssociationType Documento
	 */
	public $_unnamed_Documento_;
	/**
	 * @AssociationType Profesor
	 */
	public $_unnamed_Profesor_;
	/**
	 * @AssociationType Comparar
	 */
	public $_unnamed_Comparar_;

	/**
	 * @access public
	 * @param aArchivosSeleccionados
	 */
	public function Biblioteca($aArchivosSeleccionados) {
		// Not yet implemented
	}

	/**
	 * @access private
	 * @return Documento[]
	 * @ReturnType Documento[]
	 */
	private function GenerarDocumentos() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return Documento[]
	 * @ReturnType Documento[]
	 */
	public function getDocumentos() {
		return $this->_documentos;
	}
}
?>