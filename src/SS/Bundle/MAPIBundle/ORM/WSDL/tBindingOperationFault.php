<?php

/**
 * SS MAPI Bundle WSDL Binding Operation Fault
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\WSDL;

class tBindingOperationFault extends Element
{

	/**
	 * SS MAPI Bundle WSDL tBindingOperationFault Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}