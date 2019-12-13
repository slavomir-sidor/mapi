<?php

/**
 * SS MAPI Bundle XML Schema Document
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema;

use SS\MAPIBundle\ORM\XML\Document as XMLDocument;
use SS\MAPIBundle\ORM\XMLSchema\Entity\SchemaEntity;
use SS\MAPIBundle\ORM\XMLSchema\Entity;

class Document extends XMLDocument
{

	/**
	 * SS MAPI Bundle XML Schema
	 *
	 * @var SchemaEntity
	 */
	protected $schema;

	/**
	 * SS MAPI Bundle XML Schema Document Constructor
	 *
	 * @param string $uri
	 *        	SS MAPI Bundle XML Schema Document Uri
	 */
	public function __construct( 
		$uri )
	{

		parent::__construct( $uri );
		
		foreach( $this->childNodes as $childNode )
		{
			if( $childNode instanceof \DOMElement )
			{
				$this->schema = Entity::create( $childNode );
			}
		}
	
	}

	/**
	 * Gets SS MAPI Bundle XML Schema Document Schema
	 *
	 * @return Schema
	 */
	public function getSchema()
	{

		return $this->schema;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Schema Document Schema
	 *
	 * @param SchemaElement $schema        	
	 */
	public function setSchema( 
		SchemaEntity $schema )
	{

		$this->schema = $schema;
		return $this;
	
	}

}