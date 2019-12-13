<?php

/**
 * SS MAPI Bundle SOAP WSDL Types
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

use SS\MAPIBundle\ORM\XMLSchema\Schema;

class tTypes extends tExtensibleDocumented
{

	const ELEMENT_NAME = 'wsdl:types';

	/**
	 * SS MAPI Bundle SOAP WSDL Types Schema
	 *
	 * @var Schema
	 */
	protected $schema;

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
					case Schema::ELEMENT_NAME:
						$this->setSchema( new Schema( $childNode ) );
						break;
				}
			}
		}
	
	}

	/**
	 * Gets SS MAPI Bundle SOAP WSDL Types Schema
	 *
	 * @return Schema
	 */
	public function getSchema()
	{

		return $this->schema;
	
	}

	/**
	 * Sets SS MAPI Bundle SOAP WSDL Types Schema
	 *
	 * @param Schema $schema        	
	 */
	public function setSchema( 
		Schema $schema )
	{

		$this->schema = $schema;
		return $this;
	
	}

}