<?php

/**
 * SS MAPI Bundle Service Abstract Generator WSDL Generator
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Service\Code\Generator\WSDL;

use SS\MAPIBundle\Service\WSDL\Document;
use SS\MAPIBundle\Service\Code\Generator\CodeGenerator;

abstract class AbstractGenerator extends CodeGenerator
{

	/**
	 * SS MAPI Bundle Service Abstract Generator WSDL Generator Document
	 *
	 * @var Document
	 */
	protected $document;

	/**
	 * Gets SS MAPI Bundle Service Abstract Generator WSDL Generator Document
	 *
	 * @return Document
	 */
	public function getDocument( 
		$uri )
	{

		return new Document( $uri );
	
	}

}