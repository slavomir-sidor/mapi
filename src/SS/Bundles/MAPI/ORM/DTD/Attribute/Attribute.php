<?php

/**
 * SS MAPI Bundle DTD Attribute
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\DTD\Attribute;

use SS\MAPIBundle\ORM\DTD\Entity;
use SS\MAPIBundle\ORM\DTD\Document;
use SS\MAPIBundle\ORM\DTD\Element;

class Attribute extends Entity
{

	/**
	 * SS MAPI Bundle DTD Attribute Annotation
	 *
	 * @var Annotation
	 */
	protected $annotation;

	/**
	 * SS MAPI Bundle DTD Attribute Document
	 *
	 * @var Document
	 */
	protected $document;

	/**
	 * SS MAPI Bundle DTD Attribute Name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * SS MAPI Bundle DTD Attribute Source
	 *
	 * @var string
	 */
	protected $source;

	/**
	 * SS MAPI Bundle DTD Attribute Entity
	 *
	 * @var Entity
	 */
	protected $entity;

	/**
	 * SS MAPI Bundle DTD Attribute Element
	 *
	 * @var Element
	 */
	protected $element;

	/**
	 * SS MAPI Bundle DTD Attribute Value
	 *
	 * @var mixed
	 */
	protected $value;

	/**
	 * SS MAPI Bundle DTD Attribute Default Value
	 *
	 * @var mixed
	 */
	protected $defaultValue;

	/**
	 * Constructs SS MAPI Bundle DTD Attribute
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Attribute Document
	 * @param string $name
	 *        	SS MAPI Bundle DTD Attribute Name
	 * @param string $source
	 *        	SS MAPI Bundle DTD Attribute Source
	 */
	public function __construct( 
		Document $document, 
		$name, 
		$source = NULL )
	{

		$this->setDocument( $document );
		$this->setSource( $name );
		$this->setSource( $source );
	
	}

	/**
	 * Creates SS MAPI Bundle DTD Attribute
	 *
	 * @param string $source
	 *        	SS MAPI Bundle DTD Attribute Source
	 * @see \SS\MAPIBundle\ORM\DTD\Attribute
	 */
	public static function create( 
		Document $document, 
		$source )
	{

		$instance = new self( $source );
		return $instance;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute Annotation
	 *
	 * @see \SS\MAPIBundle\ORM\DTD\Annotation
	 */
	public function getAnnotation()
	{

		return $this->annotation;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute Annotation
	 *
	 * @param Annotation $annotation
	 *        	SS MAPI Bundle DTD Attribute Annotation
	 * @see \SS\MAPIBundle\ORM\DTD\Attribute
	 */
	public function setAnnotation( 
		Annotation $annotation )
	{

		$this->annotation = $annotation;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute Name
	 *
	 * @return string
	 */
	public function getName()
	{

		return $this->name;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute Name
	 *
	 * @param string $name
	 *        	SS MAPI Bundle DTD Attribute Name
	 * @see \SS\MAPIBundle\ORM\DTD\Attribute
	 */
	public function setName( 
		$name )
	{

		$this->name = ( string ) $name;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute Entity
	 *
	 * @return string
	 */
	public function getEntity()
	{

		return $this->entity;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute Entity
	 *
	 * @param string $entity
	 *        	SS MAPI Bundle DTD Attribute Entity
	 * @see \SS\MAPIBundle\ORM\DTD\Attribute
	 */
	public function setEntity( 
		$entity )
	{

		$this->entity = $entity;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute Value
	 *
	 * @return mixed
	 */
	public function getValue()
	{

		return $this->value;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute Value
	 *
	 * @param mixed $value        	
	 * @see \SS\MAPIBundle\ORM\DTD\Attribute
	 */
	public function setValue( 
		$value )
	{

		$this->value = $value;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute Default Value
	 *
	 * @return mixed
	 */
	public function getDefaultValue()
	{

		return $this->defaultValue;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute Default Value
	 *
	 * @param mixed $defaultValue        	
	 * @see \SS\MAPIBundle\ORM\DTD\Attribute
	 */
	public function setDefaultValue( 
		$defaultValue )
	{

		$this->defaultValue = $defaultValue;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute Source
	 *
	 * @return the string
	 */
	public function getSource()
	{

		return $this->source;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute Source
	 *
	 * @param string $source
	 *        	SS MAPI Bundle DTD Attribute Source
	 * @see \SS\MAPIBundle\ORM\DTD\Attribute
	 */
	public function setSource( 
		$source )
	{

		$this->source = $source;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute Document
	 *
	 * @return Document
	 */
	public function getDocument()
	{

		return $this->document;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute Document
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Attribute Document
	 * @see \SS\MAPIBundle\ORM\DTD\Attribute
	 */
	public function setDocument( 
		Document $document )
	{

		$this->document = $document;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute Element
	 *
	 * @return Element
	 */
	public function getElement()
	{

		return $this->element;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute Element
	 *
	 * @param Element $element
	 *        	SS MAPI Bundle DTD Attribute Element
	 * @see \SS\MAPIBundle\ORM\DTD\Attribute
	 */
	public function setElement( 
		Element $element )
	{

		$this->element = $element;
		return $this;
	
	}

}