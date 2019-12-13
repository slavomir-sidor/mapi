<?php

/**
 * SS MAPI Bundle WSDL tService
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

class tService extends Element
{

	const ELEMENT_NAME = 'wsdl:service';

	/**
	 * SS MAPI Bundle WSDL tService Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}