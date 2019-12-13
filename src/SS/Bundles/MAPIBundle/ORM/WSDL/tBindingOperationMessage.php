<?php

/**
 * SS MAPI Bundle WSDL Binding Operation Message
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

class tBindingOperationMessage extends Element
{

	/**
	 * SS MAPI Bundle WSDL tBindingOperationMessage Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}