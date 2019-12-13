<?php

/**
 * SS MAPI Bundle WSDL tPart
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\WSDL;

class tPart extends tExtensibleAttributesDocumented
{

	/**
	 * SS MAPI Bundle WSDL tMessage Element Name
	 *
	 * @var string
	 */
	const ELEMENT_NAME = 'wsdl:part';

	/**
	 * SS MAPI Bundle WSDL tPart Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
	
	}

}