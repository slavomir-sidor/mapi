<?php

/**
 * SS MAPI Bundle SOAP WSDL tOperation
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\WSDL;

class tOperation extends Element
{

	const ELEMENT_NAME = 'wsdl:operation';

	/**
	 * SS MAPI Bundle SOAP WSDL Operation Input
	 *
	 * @var tInput
	 */
	protected $input;

	/**
	 * SS MAPI Bundle SOAP WSDL Operation Output
	 *
	 * @var tOutput
	 */
	protected $output;

	/**
	 * SS MAPI Bundle SOAP WSDL Operation Fault
	 *
	 * @var tFault[]
	 */
	protected $fault;

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
					case tInput::ELEMENT_NAME:
						$this->setInput( new tInput( $childNode ) );
						break;
					case tOutput::ELEMENT_NAME:
						$this->setOutput( new tOutput( $childNode ) );
						break;
					case tFault::ELEMENT_NAME:
						$this->fault[] = new tFault( $childNode );
						break;
				}
			}
		}
	
	}

	/**
	 * Gets SS MAPI Bundle SOAP WSDL Operation Input
	 *
	 * @return tInput
	 */
	public function getInput()
	{

		return $this->input;
	
	}

	/**
	 * Sets SS MAPI Bundle SOAP WSDL Operation Input
	 *
	 * @param tInput $input        	
	 */
	public function setInput( 
		tInput $input )
	{

		$this->input = $input;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle SOAP WSDL Operation Output
	 *
	 * @return tOutput
	 */
	public function getOutput()
	{

		return $this->output;
	
	}

	/**
	 * Sets SS MAPI Bundle SOAP WSDL Operation Output
	 *
	 * @param tOutput $output        	
	 */
	public function setOutput( 
		tOutput $output )
	{

		$this->output = $output;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle SOAP WSDL Operation Fault
	 *
	 * @return the tFault
	 */
	public function getFault()
	{

		return $this->fault;
	
	}

	/**
	 * Sets SS MAPI Bundle SOAP WSDL Operation Fault
	 *
	 * @param tFault $fault        	
	 */
	public function setFault( 
		tFault $fault )
	{

		$this->fault = $fault;
		return $this;
	
	}

}