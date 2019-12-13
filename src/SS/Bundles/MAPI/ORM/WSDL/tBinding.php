<?php

/**
 * SS MAPI Bundle SOAP WSDL tBinding
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

class tBinding extends Element
{

	const ELEMENT_NAME = 'wsdl:binding';

	/**
	 * SS MAPI Bundle WSDL tBinding Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}