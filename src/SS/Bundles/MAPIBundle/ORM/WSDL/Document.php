<?php

/**
 * SS MAPI Bundle SOAP WSDL
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

use SS\MAPIBundle\ORM\XMLSchema\Document as XMLSchemaDocument;
use \DOMElement as PHPDOMElement;

class Document extends XMLSchemaDocument
{

	/**
	 * SS MAPI Bundle SOAP WSDL
	 *
	 * @var tDefinitions
	 */
	protected $definitions;

	/**
	 *
	 * @param PHPDOMElement $element        	
	 */
	public function __construct( 
		$uri )
	{

		parent::__construct( $uri );
		
		foreach( $this->childNodes as $childNode )
		{
			if( $childNode instanceof PHPDOMElement )
			{
				switch( $childNode->tagName )
				{
					case tDefinitions::ELEMENT_NAME:
						$this->definitions = new tDefinitions( $childNode );
						break;
				}
			}
		}
	
	}

	/**
	 * SS MAPI Bundle SOAP WSDL Definitions
	 *
	 * @return tDefinitions
	 */
	public function getDefinitions()
	{

		return $this->definitions;
	
	}

	/**
	 *
	 * @param tDefinitions $definitions        	
	 */
	public function setDefinitions( 
		tDefinitions $definitions )
	{

		$this->definitions = $definitions;
		return $this;
	
	}

}