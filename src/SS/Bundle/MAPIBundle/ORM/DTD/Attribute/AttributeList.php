<?php

/**
 * SS MAPI Bundle DTD Attribute List
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\DTD\Attribute;

class AttributeList
{

	/**
	 * SS MAPI Bundle DTD Attribute List Annotation
	 *
	 * @var Annotation
	 */
	protected $annotation;

	/**
	 * SS MAPI Bundle DTD Attribute List Attribute
	 *
	 * @var Attribute[]
	 */
	protected $attribute;

	/**
	 * SS MAPI Bundle DTD Attribute List Document
	 *
	 * @var Document
	 */
	protected $document;

	/**
	 * SS MAPI Bundle DTD Attribute List Element
	 *
	 * @var Element
	 */
	protected $element;

	/**
	 * SS MAPI Bundle DTD Attribute List Name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * SS MAPI Bundle DTD Attribute List Source
	 *
	 * @var string
	 */
	protected $source;

	/**
	 * Constructs SS MAPI Bundle DTD Attribute List
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Attribute List Document
	 * @param string $name
	 *        	SS MAPI Bundle DTD Attribute List Name
	 * @param string $source
	 *        	SS MAPI Bundle DTD Attribute List Source
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
	 * Loads SS MAPI Bundle DTD Attribute List
	 */
	public function load()
	{

		if( TRUE !== $this->getLoaded() )
		{
			$this->setLoaded( TRUE );
		}
	
	}

	/**
	 * Creates SS MAPI Bundle DTD Attribute List
	 *
	 * @param string $source
	 *        	SS MAPI Bundle DTD Attribute List Source
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\AttributeList
	 */
	public static function create( 
		$source, 
		Document $document )
	{

		$entity = null;
		
		$sourceAttributes = explode( " ", $source );
		$instance = new self( $source );
		$entity = array_shift( $sourceAttributes );
		
		$j = 0;
		for( $i = 0; $i < count( $sourceAttributes ); $i ++ )
		{
			$sourceAttribute = $sourceAttributes[ $i ];
			
			if( preg_match( "/%/", $sourceAttribute ) && $j == 0 )
			{
				$j = $j + 2;
				$attribute = new Attribute( "" );
				$instance->setAttribute( $attribute );
			}
			else
			{
				$column = $j % 3;
				switch( $column )
				{
					case 0:
						$attributeName = $sourceAttribute;
						++ $j;
						break;
					case 1:
						$attributeEntity = $sourceAttribute;
						++ $j;
						break;
					case 2:
						$attributeDefaultValue = $sourceAttribute;
						$attribute = new Attribute( "" );
						$attribute->setDocument( $document );
						$attribute->setName( $attributeName );
						$attribute->setEntity( $document->getEntity( $attributeEntity ) );
						$attribute->setDefaultValue( $attributeDefaultValue );
						$instance->setAttribute( $attribute );
						$j = 0;
						break;
				}
			}
		}
		
		return $instance;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute List Annotation
	 *
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Annotation
	 */
	public function getAnnotation()
	{

		return $this->annotation;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute List Annotation
	 *
	 * @param Annotation $annotation
	 *        	SS MAPI Bundle DTD Attribute List Annotation
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\AttributeList
	 */
	public function setAnnotation( 
		Annotation $annotation )
	{

		$this->annotation = $annotation;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute List Name
	 *
	 * @return string
	 */
	public function getName()
	{

		return $this->name;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute List Name
	 *
	 * @param string $name
	 *        	SS MAPI Bundle DTD Document Attribute List Name
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\AttributeList
	 */
	public function setName( 
		$name )
	{

		$this->name = ( string ) $name;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute List Source
	 *
	 * @return the string
	 */
	public function getSource()
	{

		return $this->source;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute List Source
	 *
	 * @param string $source
	 *        	SS MAPI Bundle DTD Attribute List Source
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\AttributeList
	 */
	public function setSource( 
		$source )
	{

		$this->source = $source;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute List Document
	 *
	 * @return Document
	 */
	public function getDocument()
	{

		return $this->document;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute List Document
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Attribute List Document
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\AttributeList
	 */
	public function setDocument( 
		Document $document )
	{

		$this->document = $document;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute List Element
	 *
	 * @return Element
	 */
	public function getElement()
	{

		return $this->element;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute List Element
	 *
	 * @param Element $element
	 *        	SS MAPI Bundle DTD Attribute List Element
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\AttributeList
	 */
	public function setElement( 
		Element $element )
	{

		$this->element = $element;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute List Attribute
	 *
	 * @return Attribute[]
	 */
	public function getAttribute()
	{

		return $this->attribute;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute List Attribute
	 *
	 * @param Attribute $attribute
	 *        	SS MAPI Bundle DTD Attribute List Attribute
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\AttributeList
	 */
	public function setAttribute( 
		Attribute $attribute )
	{

		$this->attribute[ $attribute->getName() ] = $attribute;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Attribute List Loaded Flag
	 *
	 * @return boolean
	 */
	public function getLoaded()
	{

		return $this->loaded;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Attribute List Loaded Flag
	 *
	 * @param boolean $loaded
	 *        	SS MAPI Bundle DTD Attribute List Loaded Flag
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\AttributeList
	 */
	public function setLoaded( 
		$loaded )
	{

		$this->loaded = $loaded;
		return $this;
	
	}

}