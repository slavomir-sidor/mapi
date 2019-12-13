<?php

/**
 * SS MAPI Bundle SOAP WSDL tMessage
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

class tMessage extends Element
{

	/**
	 * SS MAPI Bundle WSDL tMessage Element Name
	 *
	 * @var string
	 */
	const ELEMENT_NAME = 'wsdl:message';

	/**
	 * SS MAPI Bundle WSDL tMessage part
	 *
	 * @var tPart[]
	 */
	protected $part;

	/**
	 * SS MAPI Bundle WSDL tMessage Contructor
	 *
	 * @param \DOMElement $domElement        	
	 */
	public function __construct( 
		\DOMElement $domElement )
	{

		parent::__construct( $domElement );
		foreach( $domElement->childNodes as $childNode )
		{
			if( $childNode instanceof \DOMElement )
			{
				switch( $childNode->tagName )
				{
					case tPart::ELEMENT_NAME:
						$this->part[] = new tPart( $childNode );
						break;
				}
			}
		}
	
	}

}