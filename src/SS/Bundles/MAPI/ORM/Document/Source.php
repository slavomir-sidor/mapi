<?php

/**
 * SS MAPI Bundle DTD Source
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\Document;

abstract class Source
{

	/**
	 * SS MAPI Bundle DTD Source Document
	 *
	 * @var Document
	 */
	protected $document;

	/**
	 * Constructs SS MAPI Bundle DTD Source
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle DTD Source Document
	 */
	public function __construct( 
		Document $document )
	{

		$this->setDocument( $document );
	
	}

	/**
	 * Abstract Reads SS MAPI Bundle DTD Source
	 */
	abstract protected function read();

	/**
	 * Removes extra spaces from source
	 *
	 * @param string $source
	 *        	SS MAPI Bundle Document Source String
	 * @return string
	 */
	public static function normalizeSource( 
		$source )
	{

		$source = trim( $source );
		while( preg_match( '/[ ]{2}/', $source ) )
		{
			$source = preg_replace( '/[\s]{2}/', ' ', $source );
		}
		return $source;
	
	}

	/**
	 * Converts Dashes to Camel Case
	 *
	 * @param string $source
	 *        	SS MAPI Bundle Document Source String
	 * @return string
	 */
	public static function camelCase( 
		$source )
	{

		$sources = explode( "-", $source );
		$source = "";
		foreach( $sources as $string )
		{
			$source .= ucfirst( $string );
		}
		return $source;
	
	}

	/**
	 * Gets SS MAPI Bundle Document Source Document
	 *
	 * @return Document SS MAPI Bundle Document Source Document
	 */
	public function getDocument()
	{

		return $this->document;
	
	}

	/**
	 * Sets SS MAPI Bundle Document Source Document
	 *
	 * @param Document $document
	 *        	SS MAPI Bundle Document Source Document
	 * @see \SS\MAPIBundle\ORM\DTD\Source SS MAPI Bundle Document Source
	 */
	public function setDocument( 
		Document $document )
	{

		$this->document = $document;
		return $this;
	
	}

}