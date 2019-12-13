<?php

/**
 * SS MAPI Bundle WSDL tOutput
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

class tOutput extends Element
{

	const ELEMENT_NAME = 'wsdl:output';

	/**
	 * SS MAPI Bundle WSDL tOutput Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}