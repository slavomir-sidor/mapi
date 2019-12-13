<?php

namespace SS\Bundle\MAPIBundle\ORM\XML;

use \DOMDocument as PHPDOMDocument;
use \DOMXPath as PHPDOMXpath;

/**
 * SS MAPI Bundle XML Document
 *
 * @license GPL GNU
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
class Document extends PHPDOMDocument
{

	/**
	 * SS MAPI Bundle XML Document XPath
	 *
	 * @var PHPDOMXpath
	 */
	protected $xpath;

	/**
	 * SS MAPI Bundle XML Document Contructor
	 *
	 * @param string $uri        	
	 */
	public function __construct( 
		$uri )
	{

		$this->load( $uri );
	
	}

	/**
	 * Gets SS MAPI Bundle XML Document XPath
	 *
	 * @return PHPDOMXpath
	 */
	protected function getXpath()
	{

		if( null === $this->xpath )
		{
			$this->setXpath( new PHPDOMXpath( $this ) );
		}
		return $this->xpath;
	
	}

	/**
	 * Sets SS MAPI Bundle XML Document XPath
	 *
	 * @param PHPDOMXpath $xpath        	
	 * @see \SS\Bundle\MAPIBundle\ORM\SOAP\Document
	 */
	protected function setXpath( 
		PHPDOMXpath $xpath )
	{

		$this->xpath = $xpath;
		return $this;
	
	}

}