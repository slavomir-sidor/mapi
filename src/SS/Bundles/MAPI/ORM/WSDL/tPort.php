<?php

/**
 * SS MAPI Bundle WSDL tPort
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

class tPort extends Element
{

	/**
	 * SS MAPI Bundle WSDL tPort Element Name
	 *
	 * @var string
	 */
	const ELEMENT_NAME = 'wsdl:port';

	/**
	 * SS MAPI Bundle WSDL tPort Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}