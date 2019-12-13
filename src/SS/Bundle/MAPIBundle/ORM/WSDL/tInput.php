<?php

/**
 * SS MAPI Bundle SOAP WSDL tInput
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\WSDL;

class tInput extends Element
{

	const ELEMENT_NAME = 'wsdl:input';

	/**
	 * SS MAPI Bundle WSDL tInput Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}