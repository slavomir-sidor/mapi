<?php

/**
 * SS MAPI Bundle SOAP WSDL Port Type
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

class tPortType extends tExtensibleAttributesDocumented
{

	const ELEMENT_NAME = 'wsdl:portType';

	/**
	 * SS MAPI Bundle SOAP WSDL Port Type Operation
	 *
	 * @var tOperation[]
	 */
	protected $operation;

	/**
	 * SS MAPI Bundle XML Document Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		\DOMElement $element )
	{

		$this->setDOMElement( $element );
		
		foreach( $element->childNodes as $childNode )
		{
			if( $childNode instanceof \DOMElement )
			{
				
				switch( $childNode->tagName )
				{
					case tOperation::ELEMENT_NAME:
						$this->operation[] = new tOperation( $childNode );
						break;
				}
			}
		}
	
	}

}