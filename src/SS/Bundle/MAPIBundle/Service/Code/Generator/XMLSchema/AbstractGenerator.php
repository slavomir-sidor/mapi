<?php

/**
 * SS MAPI Bundle Code Generator XML Schema
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Service\Code\Generator\XMLSchema;

use SS\Bundle\MAPIBundle\Service\XMLSchema\Document;
use Symfony\Component\Console\Input\InputArgument;
use SS\Bundle\MAPIBundle\Service\Code\Generator\CodeGenerator;

abstract class AbstractGenerator extends CodeGenerator
{

	/**
	 * SS MAPI Bundle Code Generator XML Schema Document
	 *
	 * @var Document
	 */
	protected $document;

	/**
	 * Gets SS MAPI Bundle Code Generator XML Schema Document
	 *
	 * @return Document
	 */
	public function getDocument( 
		$uri )
	{

		return new Document( $uri );
	
	}

}