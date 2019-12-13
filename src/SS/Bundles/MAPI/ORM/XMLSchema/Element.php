<?php

/**
 * SS MAPI Bundle XML Element
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema;

class Element
{

	/**
	 * SS MAPI Bundle XML Schema Element Id
	 *
	 * @var string
	 */
	protected $id;

	/**
	 * SS MAPI Bundle XML Schema Element Name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * SS MAPI Bundle XML Schema Lang
	 *
	 * @var string
	 */
	protected $lang;

	/**
	 * SS MAPI Bundle XML Element Form Default
	 *
	 * @var string
	 */
	protected $elementFormDefault;

	/**
	 * SS MAPI Bundle XML Element Target Namespace
	 *
	 * @var string
	 */
	protected $targetNamespace;

	/**
	 * SS MAPI Bundle XML Element Namespace
	 *
	 * @var string
	 */
	protected $namespace;

	/**
	 * SS MAPI Bundle XML Element Version
	 *
	 * @var string
	 */
	protected $version;

	/**
	 * SS MAPI Bundle XML Element Source
	 *
	 * @var string
	 */
	protected $source;

	/**
	 * SS MAPI Bundle XML Element Schema Location
	 *
	 * @var string
	 */
	protected $schemaLocation;

	/**
	 * SS MAPI Bundle XML Element Abstract
	 *
	 * @var string
	 */
	protected $abstract;

	/**
	 * SS MAPI Bundle XML Element Type
	 *
	 * @var string
	 */
	protected $type;

	/**
	 * SS MAPI Bundle XML Element Public
	 *
	 * @var string
	 */
	protected $public;

	/**
	 * SS MAPI Bundle XML Element System
	 *
	 * @var string
	 */
	protected $system;

	/**
	 * SS MAPI Bundle XML Element Mixed
	 *
	 * @var string
	 */
	protected $mixed;

	/**
	 * SS MAPI Bundle XML Element Substitution Group
	 *
	 * @var string
	 */
	protected $substitutionGroup;

	/**
	 * SS MAPI Bundle XML Schema Element Contructor
	 *
	 * @param \DOMElement $domElement
	 *        	SS MAPI Bundle XML Document PHP DOM Element
	 */
	public function __construct( 
		\DOMElement $domElement )
	{

		$this->setDOMElement( $domElement );
		foreach( $domElement->attributes as $attribute )
		{
			$setter = "set" . ucfirst( $attribute->name );
			$this->$setter( $attribute->value );
		}
		
		print $domElement->tagName . "\n";
		
		foreach( $domElement->childNodes as $childNode )
		{
			if( $childNode instanceof \DOMElement )
			{
				$element = Document::createEntity( $childNode );
			}
		}
	
	}

	/**
	 * Gets SS MAPI Bundle XML Document XPath
	 *
	 * @return DOMXPath
	 */
	protected function getXpath()
	{

		if( null === $this->xpath )
		{
			$this->setXpath( new \DOMXPath( $this ) );
		}
		return $this->xpath;
	
	}

	protected function setXpath( 
		\DOMXPath $xpath )
	{

		$this->xpath = $xpath;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element PHP DOM Element
	 *
	 * @return \DOMElement
	 */
	public function getDOMElement()
	{

		return $this->domElement;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element PHP DOM Element
	 *
	 * @param \DOMElement $element        	
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setDOMElement( 
		\DOMElement $domElement )
	{

		$this->domElement = $domElement;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Id
	 *
	 * @return string
	 */
	public function getId()
	{

		return $this->id;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Id
	 *
	 * @param string $id
	 *        	SS MAPI Bundle XML Element Id
	 * @see \SS\MAPIBundle\ORM\XMLSchema\Element
	 */
	public function setId( 
		$id )
	{

		$this->id = ( string ) $id;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Form Default
	 *
	 * @return string
	 */
	public function getElementFormDefault()
	{

		return $this->elementFormDefault;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Form Default
	 *
	 * @param string $elementFormDefault
	 *        	SS MAPI Bundle XML Element Form Default
	 */
	public function setElementFormDefault( 
		$elementFormDefault )
	{

		$this->elementFormDefault = ( string ) $elementFormDefault;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Schema Lang
	 *
	 * @return string
	 */
	public function getLang()
	{

		return $this->lang;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Schema Lang
	 *
	 * @param string $lang
	 *        	SS MAPI Bundle XML Schema Lang
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setLang( 
		$lang )
	{

		$this->lang = $lang;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Target Namespace
	 *
	 * @return string
	 */
	public function getTargetNamespace()
	{

		return $this->targetNamespace;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Target Namespace
	 *
	 * @param string $targetNamespace
	 *        	SS MAPI Bundle XML Element Target Namespace
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setTargetNamespace( 
		$targetNamespace )
	{

		$this->targetNamespace = $targetNamespace;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Version
	 *
	 * @return string
	 */
	public function getVersion()
	{

		return $this->version;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Version
	 *
	 * @param string $version
	 *        	SS MAPI Bundle XML Element Version
	 */
	public function setVersion( 
		$version )
	{

		$this->version = ( string ) $version;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Source
	 *
	 * @return string
	 */
	public function getSource()
	{

		return $this->source;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Source
	 *
	 * @param string $source
	 *        	SS MAPI Bundle XML Element Source
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setSource( 
		$source )
	{

		$this->source = ( string ) $source;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Namespace
	 *
	 * @return string
	 */
	public function getNamespace()
	{

		return $this->namespace;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Namespace
	 *
	 * @param string $namespace
	 *        	SS MAPI Bundle XML Element Namespace
	 */
	public function setNamespace( 
		$namespace )
	{

		$this->namespace = ( string ) $namespace;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Schema Location
	 *
	 * @return string
	 */
	public function getSchemaLocation()
	{

		return $this->schemaLocation;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Schema Location
	 *
	 * @param string $schemaLocation        	
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setSchemaLocation( 
		$schemaLocation )
	{

		$this->schemaLocation = ( string ) $schemaLocation;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Schema Element Name
	 *
	 * @return string
	 */
	public function getName()
	{

		return $this->name;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Schema Element Name
	 *
	 * @param string $name
	 *        	SS MAPI Bundle XML Schema Element Name
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setName( 
		$name )
	{

		$this->name = ( string ) $name;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Abstract
	 *
	 * @return string
	 */
	public function getAbstract()
	{

		return $this->abstract;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Abstract
	 *
	 * @param string $abstract
	 *        	SS MAPI Bundle XML Element Abstract
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setAbstract( 
		$abstract )
	{

		$this->abstract = ( string ) $abstract;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Type
	 *
	 * @return string
	 */
	public function getType()
	{

		return $this->type;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Type
	 *
	 * @param string $type
	 *        	SS MAPI Bundle XML Element Type
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setType( 
		$type )
	{

		$this->type = ( string ) $type;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Public
	 *
	 * @return string
	 */
	public function getPublic()
	{

		return $this->public;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Public
	 *
	 * @param string $public
	 *        	SS MAPI Bundle XML Element Public
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setPublic( 
		$public )
	{

		$this->public = ( string ) $public;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element System
	 *
	 * @return string
	 */
	public function getSystem()
	{

		return $this->system;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element System
	 *
	 * @param string $system
	 *        	SS MAPI Bundle XML Element System
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setSystem( 
		$system )
	{

		$this->system = ( string ) $system;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Mixed
	 *
	 * @return string
	 */
	public function getMixed()
	{

		return $this->mixed;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Mixed
	 *
	 * @param string $mixed
	 *        	SS MAPI Bundle XML Element Mixed
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setMixed( 
		$mixed )
	{

		$this->mixed = ( string ) $mixed;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle XML Element Substitution Group
	 *
	 * @return string
	 */
	public function getSubstitutionGroup()
	{

		return $this->substitutionGroup;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Element Substitution Group
	 *
	 * @param string $substitutionGroup
	 *        	SS MAPI Bundle XML Element Substitution Group
	 * @see \SS\MAPIBundle\ORM\XML\Element
	 */
	public function setSubstitutionGroup( 
		$substitutionGroup )
	{

		$this->substitutionGroup = ( string ) $substitutionGroup;
		return $this;
	
	}

}