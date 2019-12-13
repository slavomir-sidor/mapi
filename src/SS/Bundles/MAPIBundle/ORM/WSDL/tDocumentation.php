<?php

/**
 * SS MAPI Bundle WSDL tDocumentation
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

class tDocumentation extends Element
{

	const ELEMENT_NAME = 'wsdl:documentation';

	/**
	 * SS MAPI Bundle WSDL tDocumented Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}