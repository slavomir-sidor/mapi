<?php

/**
 * SS MAPI Bundle Service Abstract DTD Abstract Generator
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Service\Code\Generator\DTD;

use SS\Bundle\MAPIBundle\Service\DTD\Document;
use SS\Bundle\MAPIBundle\Service\Code\Generator\CodeGenerator;

abstract class AbstractGenerator extends CodeGenerator
{

	/**
	 * * SS MAPI Bundle Code Abstract DTD Abstract Generator Document
	 *
	 * @var Document
	 */
	protected $document;

	/**
	 * Gets SS MAPI Bundle Service Abstract DTD Abstract Generator Document
	 *
	 * @return Document
	 */
	public function getDocument( 
		$uri )
	{

		return new Document( $uri );
	
	}

}