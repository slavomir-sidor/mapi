<?php

/**
 * SS MAPI Bundle SOAP WSDL Fault
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\WSDL;

class tFault extends Element
{

	const ELEMENT_NAME = 'wsdl:fault';

	/**
	 * SS MAPI Bundle WSDL tFault Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}