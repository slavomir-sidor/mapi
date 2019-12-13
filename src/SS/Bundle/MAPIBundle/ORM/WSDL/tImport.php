<?php

/**
 * SS MAPI Bundle SOAP WSDL tImport
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\WSDL;

class tImport extends Element
{

	const ELEMENT_NAME = 'wsdl:import';

	/**
	 * SS MAPI Bundle WSDL tImport Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}