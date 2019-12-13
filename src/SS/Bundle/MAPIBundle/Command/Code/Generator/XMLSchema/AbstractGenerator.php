<?php

/**
 * SS MAPI Bundle Service Abstract XML Schema Abstract Generator
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Command\Code\Generator\XMLSchema;

use SS\Bundle\MAPIBundle\XMLSchema\Document;
use Symfony\Component\Console\Input\InputArgument;
use SS\Bundle\MAPIBundle\Command\Code\Generator\GeneratorCommand;

abstract class AbstractGenerator extends GeneratorCommand
{

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\Bundle\MAPIBundle\Service\Code\AbstractGenerator\Generator::configure()
	 */
	protected function configure()
	{

		$this->addArgument( 'xsd', InputArgument::OPTIONAL, 'XSD File' );
		parent::configure();
	
	}

	/**
	 * Gets SS MAPI Bundle AbstractGenerator XML Schema Document
	 *
	 * @return Document
	 */
	public function getDocument( 
		$uri )
	{

		return new Document( $uri );
	
	}

}