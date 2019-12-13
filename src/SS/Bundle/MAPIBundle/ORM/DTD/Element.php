<?php

/**
 * SS MAPI Bundle DTD Element
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\DTD;

class Element
{

	/**
	 * SS MAPI Bundle DTD Element Annotation
	 *
	 * @var Annotation
	 */
	protected $annotation;

	/**
	 * SS MAPI Bundle DTD Element Attribute List
	 *
	 * @var AttributeList
	 */
	protected $attributeList;

	/**
	 * SS MAPI Bundle DTD Element Document
	 *
	 * @var Document
	 */
	protected $document;

	/**
	 * SS MAPI Bundle DTD Element Entity
	 *
	 * @var string
	 */
	protected $entity;

	/**
	 * SS MAPI Bundle DTD Element Name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * SS MAPI Bundle DTD Element Value
	 *
	 * @var string
	 */
	protected $value;

	/**
	 * SS MAPI Bundle DTD Element Source
	 *
	 * @var string
	 */
	protected $source;

	/**
	 * SS MAPI Bundle DTD Element Name
	 *
	 * @var Element[]
	 */
	protected $children;

	/**
	 * Constructs SS MAPI Bundle DTD Element
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Element Document
	 * @param string $name
	 *        	SS MAPI Bundle DTD Element Name
	 * @param string $source
	 *        	SS MAPI Bundle DTD Element Source
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
	 * Gets SS MAPI Bundle DTD Element Annotation
	 *
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Annotation
	 */
	public function getAnnotation()
	{

		return $this->annotation;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Element Annotation
	 *
	 * @param Annotation $annotation
	 *        	SS MAPI Bundle DTD Element Annotation
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Element
	 */
	public function setAnnotation( 
		Annotation $annotation )
	{

		$this->annotation = $annotation;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Element Name
	 *
	 * @return string
	 */
	public function getName()
	{

		return $this->name;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Element Name
	 *
	 * @param string $name
	 *        	SS MAPI Bundle DTD Element Name
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Element
	 */
	public function setName( 
		$name )
	{

		$this->name = ( string ) $name;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Element Entity
	 *
	 * @return string
	 */
	public function getEntity()
	{

		return $this->entity;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Element Entity
	 *
	 * @param string $entity
	 *        	SS MAPI Bundle DTD Element Entity
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Element
	 */
	public function setEntity( 
		$entity )
	{

		$this->entity = $entity;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Element Attribute List
	 *
	 * @return AttributeList
	 */
	public function getAttributeList()
	{

		return $this->attributeList;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Element Attribute List
	 *
	 * @param AttributeList $attributeList
	 *        	SS MAPI Bundle DTD Element Attribute List
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Element
	 */
	public function setAttributes( 
		$attributeList )
	{

		$this->attributeList = $attributeList;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Element Children Element
	 *
	 * @return Element[]
	 */
	public function getChildren()
	{

		return $this->children;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Element Children Element
	 *
	 * @param Element $children
	 *        	SS MAPI Bundle DTD Element Children Element
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Element
	 */
	public function setChildren( 
		$children )
	{

		$this->children = $children;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Element Source
	 *
	 * @return string
	 */
	public function getSource()
	{

		return $this->source;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Element Source
	 *
	 * @param string $source
	 *        	SS MAPI Bundle DTD Element Source
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Element
	 */
	public function setSource( 
		$source )
	{

		$this->source = $source;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Element Document
	 *
	 * @return Document
	 */
	public function getDocument()
	{

		return $this->document;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Element Document
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Element Document
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Element
	 */
	public function setDocument( 
		Document $document )
	{

		$this->document = $document;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Element Value
	 *
	 * @return string
	 */
	public function getValue()
	{

		return $this->value;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Element Value
	 *
	 * @param mixed $value
	 *        	SS MAPI Bundle DTD Element Value
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Element
	 */
	public function setValue( 
		$value )
	{

		$this->value = $value;
		return $this;
	
	}

}