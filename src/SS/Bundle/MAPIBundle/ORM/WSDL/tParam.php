<?php

/**
 * SS MAPI Bundle SOAP WSDL tParam
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\WSDL;

class tParam extends Element
{

	/**
	 * SS MAPI Bundle WSDL tParam Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}