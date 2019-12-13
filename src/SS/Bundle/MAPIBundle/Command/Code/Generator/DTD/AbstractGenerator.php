<?php

/**
 * SS MAPI Bundle Service Abstract DTD Abstract Generator
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Command\Code\Generator\DTD;

use SS\Bundle\MAPIBundle\ORM\DTD\Document;
use Symfony\Component\Console\Input\InputArgument;
use SS\Bundle\MAPIBundle\Command\Code\Generator\GeneratorCommand;

abstract class AbstractGenerator extends GeneratorCommand
{

	/**
	 * * SS MAPI Bundle Code Abstract DTD Abstract Generator Document
	 *
	 * @var Document
	 */
	protected $document;

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\Bundle\MAPIBundle\Service\Code\Generator\AbstractGenerator::configure()
	 */
	protected function configure()
	{
		$this->addArgument( 'document', InputArgument::OPTIONAL, 'DTD File ' );
		parent::configure();
	}

	/**
	 * Gets SS MAPI Bundle Service Abstract DTD Abstract Generator Document
	 *
	 * @return Document
	 */
	public function getDocument( $uri )
	{
		return new Document( $uri );
	}
}