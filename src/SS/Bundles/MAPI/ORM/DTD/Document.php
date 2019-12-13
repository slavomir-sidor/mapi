<?php

/**
 * SS MAPI Bundle DTD Document
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\DTD;

use SS\MAPIBundle\ORM\Document\Document as BaseDocument;
use SS\MAPIBundle\ORM\DTD\Attribute\AttributeList;

class Document extends BaseDocument
{

	/**
	 * SS MAPI Bundle DTD Document Attribute List
	 *
	 * @var AttributeList[]
	 */
	protected $attributeList;

	/**
	 * SS MAPI Bundle DTD Document Element
	 *
	 * @var Element[]
	 */
	protected $element;

	/**
	 * SS MAPI Bundle DTD Document Entity
	 *
	 * @var Entity[]
	 */
	protected $entity;

	/**
	 * SS MAPI Bundle DTD Document Source
	 *
	 * @var Source
	 */
	protected $source;

	/**
	 * SS MAPI Bundle DTD Document Source Definitions
	 *
	 * @var array
	 */
	protected $sourceDefinitions;

	/**
	 * SS MAPI Bundle DTD Document Annotation
	 *
	 * @var Annotation[]
	 */
	protected $annotation;

	/**
	 * SS MAPI Bundle DTD Document Loaded Flag
	 *
	 *
	 * @var boolean
	 */
	protected $loaded;

	/**
	 * Constructs SS MAPI Bundle DTD Document
	 *
	 * @param string $uri
	 *        	SS MAPI Bundle DTD Document URI
	 */
	public function __construct( 
		$uri )
	{

		parent::__construct( $uri );
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Document Source
	 *
	 * @see \SS\MAPIBundle\ORM\DTD\Source
	 */
	public function getSource()
	{

		if( NULL === $this->source )
		{
			$source = new Source( $this );
			$this->setSource( $source );
		}
		
		return $this->source;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Document Source
	 *
	 * @param Source $source
	 *        	SS MAPI Bundle DTD Document Source
	 */
	public function setSource( 
		Source $source )
	{

		$this->source = $source;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Document Element
	 *
	 * @param string $name
	 *        	SS MAPI Bundle DTD Document Element Name
	 * @see \SS\MAPIBundle\ORM\DTD\Element[]
	 */
	public function getElement( 
		$name = null )
	{

		if( NULL === $this->element )
		{
			$this->element = new \ArrayIterator();
		}
		if( NULL !== $name )
		{
			if( ! $this->getElement()
				->offsetExists( $name ) )
			{
				$source = $this->getSource()
					->getElement( $name );
				$element = new Element( $this, $name, $source );
				$this->setElement( $element );
			}
			return $this->element->offsetGet( $name );
		}
		else
		{
			foreach( $this->getSource()
				->getElement() as $name => $source )
			{
				$element = new Element( $this, $name, $source );
				$this->setElement( $element );
			}
		}
		
		return $this->element;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Document Element
	 *
	 * @param Element $element
	 *        	SS MAPI Bundle DTD Document Element
	 * @see \SS\MAPIBundle\ORM\DTD\Document
	 */
	public function setElement( 
		Element $element )
	{

		$this->element[ $element->getName() ] = $element;
		$element->setDocument( $this );
		
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Document Attribute List
	 *
	 * @return AttributeList[]
	 */
	public function getAttributeList( 
		$name = NULL )
	{

		if( NULL === $this->attributeList )
		{
			$this->attributeList = new \ArrayIterator();
		}
		if( NULL !== $name )
		{
			if( ! $this->attributeList->offsetExists( $name ) )
			{
				$source = $this->getSource()
					->getAttributeList( $name );
				$attributeList = new AttributeList( $this, $name, $source );
				$this->setAttributeList( $attributeList );
			}
			return $this->attributeList->offsetGet( $name );
		}
		else
		{
			foreach( $this->getSource()
				->getAttributeList() as $name => $source )
			{
				$attributeList = new AttributeList( $this, $name, $source );
				$this->setAttributeList( $attributeList );
			}
		}
		return $this->attributeList;
	
	}

	/**
	 * Sets Gets SS MAPI Bundle DTD Document Attribute List
	 *
	 * @param AttributeList $attributeList
	 *        	SS MAPI Bundle DTD Document Attribute List
	 * @see \SS\MAPIBundle\ORM\DTD\Document
	 */
	public function setAttributeList( 
		AttributeList $attributeList )
	{

		$this->attributeList[ $attributeList->getName() ] = $attributeList;
		$attributeList->setDocument( $this );
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Document Entity
	 *
	 * @return Entity[]
	 */
	public function getEntity( 
		$name = NULL )
	{

		if( NULL === $this->entity )
		{
			$this->entity = new \ArrayIterator();
		}
		
		if( NULL !== $name )
		{
			if( ! $this->entity->offsetExists( $name ) )
			{
				$source = $this->getSource()
					->getEntity( $name );
				$entity = Entity::create( $this, $name, $source );
				$this->setEntity( $entity );
			}
			return $this->entity->offsetGet( $name );
		}
		else
		{
			foreach( $this->getSource()
				->getEntity() as $name => $source )
			{
				$entity = Entity::create( $this, $name, $source );
				$this->setEntity( $entity );
			}
		}
		
		return $this->entity;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Document Entity
	 *
	 * @param Entity $entity
	 *        	SS MAPI Bundle DTD Document Entity
	 * @see \SS\MAPIBundle\ORM\DTD\Document
	 */
	public function setEntity( 
		Entity $entity )
	{

		$this->entity[ $entity->getName() ] = $entity;
		$entity->setDocument( $this );
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Document Annotation
	 *
	 * @return the Annotation[]
	 */
	public function getAnnotation()
	{

		return $this->annotation;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Document Annotation
	 *
	 * @param Annotation $annotation
	 *        	SS MAPI Bundle DTD Document Annotation
	 * @see \SS\MAPIBundle\ORM\DTD\Document
	 */
	public function setAnnotation( 
		Annotation $annotation )
	{

		$this->annotation[] = $annotation;
		return $this;
	
	}

}