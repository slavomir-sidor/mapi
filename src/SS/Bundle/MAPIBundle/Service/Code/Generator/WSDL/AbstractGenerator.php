<?php

/**
 * SS MAPI Bundle Service Abstract Generator WSDL Generator
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Service\Code\Generator\WSDL;

use SS\Bundle\MAPIBundle\Service\WSDL\Document;
use SS\Bundle\MAPIBundle\Service\Code\Generator\CodeGenerator;

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