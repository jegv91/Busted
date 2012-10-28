<?php
require_once(realpath(dirname(__FILE__)) . '/Biblioteca.php');
require_once(realpath(dirname(__FILE__)) . '/Documento.php');
require_once(realpath(dirname(__FILE__)) . '/Revision.php');
require_once(realpath(dirname(__FILE__)) . '/Usuario.php');

/**
 * @access public
 * @author hector
 */
class Profesor extends Usuario {
	/**
	 * @AttributeType Biblioteca
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
	 * @AssociationType Revision
	 */
	public $_unnamed_Revision_;
	/**
	 * @AssociationType Biblioteca
	 */
	public $_unnamed_Biblioteca_;

	/**
	 * @access public
	 * @param Documento aDocumento
	 * @param biblioteca : Biblioteca aBiblioteca
	 * @ParamType aDocumento Documento
	 * @ParamType aBiblioteca biblioteca : Biblioteca
	 */
	public function Revisar(Documento $aDocumento, biblioteca___Biblioteca $aBiblioteca) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param StringArray aFiles
	 * @return Biblioteca
	 * @ParamType aFiles StringArray
	 * @ReturnType Biblioteca
	 */
	public function SeleccionarBiblioteca(StringArray $aFiles) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param String aFile
	 * @return Documento
	 * @ParamType aFile String
	 * @ReturnType Documento
	 */
	public function SeleccionarDocumento($aFile) {
		// Not yet implemented
	}
}
?>