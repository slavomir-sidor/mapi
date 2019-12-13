<?php

/**
 * SS MAPI Bundle DTD Entity
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\DTD;

use SS\Bundle\MAPIBundle\ORM\DTD\Entity\Character;
use SS\Bundle\MAPIBundle\ORM\DTD\Entity\ExternalPublic;
use SS\Bundle\MAPIBundle\ORM\DTD\Entity\ExternalSystem;
use SS\Bundle\MAPIBundle\ORM\DTD\Entity\Internal;
use SS\Bundle\MAPIBundle\ORM\DTD\Entity\Parameter;

abstract class Entity
{

	/**
	 * SS MAPI Bundle DTD Entity Annotation
	 *
	 * @var Annotation
	 */
	protected $annotation;

	/**
	 * SS MAPI Bundle DTD Entity Document
	 *
	 * @var Document
	 */
	protected $document;

	/**
	 * SS MAPI Bundle DTD Entity Source
	 *
	 * @var Source
	 */
	protected $source;

	/**
	 * SS MAPI Bundle DTD Entity Name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * SS MAPI Bundle DTD Entity Value
	 *
	 * @var mixed
	 */
	protected $value;

	/**
	 * Constructs SS MAPI Bundle DTD Entity
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Entity Document
	 * @param string $name
	 *        	SS MAPI Bundle DTD Entity Name
	 * @param string $source
	 *        	SS MAPI Bundle DTD Entity Source
	 */
	public function __construct( 
		Document $document, 
		$name, 
		$source = NULL )
	{

		$this->setDocument( $document );
		$this->setName( $name );
		$this->setSource( $source );
	
	}

	/**
	 * Creates SS MAPI Bundle DTD Entity
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Entity Document
	 * @param string $name
	 *        	SS MAPI Bundle DTD Entity Name
	 * @param string $source
	 *        	SS MAPI Bundle DTD Entity Source
	 */
	public static function create( 
		Document $document, 
		$name, 
		$source = NULL )
	{

		$entity = null;
		$sourceAttributes = explode( " ", $source );
		$matches = array();
		
		// External Entity
		if( preg_match( "/(SYSTEM|PUBLIC)/", $source, $matches ) > 0 )
		{
			if( $matches[ 0 ] == 'PUBLIC' )
			{
				$entity = new ExternalPublic( $document, $name, $source );
				if( array_key_exists( 4, $sourceAttributes ) )
				{
					$identifier = $sourceAttributes[ 3 ];
					$uri = $sourceAttributes[ 4 ];
				}
				else
				{
					$identifier = '';
					$uri = $sourceAttributes[ 3 ];
				}
				$entity->setIdentifier( $identifier );
				$entity->setUri( $uri );
			}
			else
			{
				$entity = new ExternalSystem( $document, $name, $source );
			}
		} // Parameter Entity
		else 
			if( preg_match( "/%/", $source, $matches ) > 0 )
			{
				
				$entity = new Parameter( $document, $name, $source );
				$entity->setName( $sourceAttributes[ 1 ] );
				
				if( preg_match( "/\'(.*)\'/", $source, $matches ) > 0 )
				{
					$entity->setValue( $matches[ 1 ] );
				}
				if( preg_match( "/\"(.*)\"/", $source, $matches ) > 0 )
				{
					$entity->setValue( $matches[ 1 ] );
				}
			}
			else
			{
				$entity = new Internal( $document, $name, $source );
			}
		return $entity;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Entity Name
	 *
	 * @return string
	 */
	public function getName()
	{

		return $this->name;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Entity Name
	 *
	 * @param string $name
	 *        	SS MAPI Bundle DTD Document Entity Name
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Entity
	 */
	public function setName( 
		$name )
	{

		$this->name = ( string ) $name;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Entity Value
	 *
	 * @return mixed
	 */
	public function getValue()
	{

		return $this->value;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Entity Value
	 *
	 * @param mixed $value
	 *        	SS MAPI Bundle DTD Entity Value
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Entity
	 */
	public function setValue( 
		$value )
	{

		$this->value = $value;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Entity Annotation
	 *
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Annotation
	 */
	public function getAnnotation()
	{

		return $this->annotation;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Entity Annotation
	 *
	 * @param Annotation $annotation        	
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Entity
	 */
	public function setAnnotation( 
		Annotation $annotation )
	{

		$this->annotation = $annotation;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Entity Source
	 *
	 * @return string
	 */
	public function getSource()
	{

		return $this->source;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Entity Source
	 *
	 * @param string $source
	 *        	SS MAPI Bundle DTD Entity Source
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Entity
	 */
	public function setSource( 
		$source )
	{

		$this->source = str_replace( PHP_EOL, " ", $source );
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Entity Document
	 *
	 * @return Document
	 */
	public function getDocument()
	{

		return $this->document;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Entity Document
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Entity Document
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Entity
	 */
	public function setDocument( 
		Document $document )
	{

		$this->document = $document;
		return $this;
	
	}

}