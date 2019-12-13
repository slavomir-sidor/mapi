<?php

/**
 * SS MAPI Bundle Command Code Abstract Generator
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Command\Code\Generator;

use SS\Bundle\MAPIBundle\Command\Code\Reflection\ReflectionCommand;
use SS\Bundle\MAPIBundle\Service\Code\Generator;
use SS\Bundle\MAPIBundle\Service\Code\Reflection;
use SS\Bundle\MAPIBundle\Service\Table\Table;
use Psr\Log\LoggerInterface;

abstract class GeneratorCommand extends ReflectionCommand
{

	/**
	 *
	 * @var Generator
	 */
	protected $generator;

	/**
	 * Constructs SS MAPI Bundle Abstract Command
	 *
	 * @param string $name
	 *        	SS MAPI Bundle Abstract Command Name
	 * @param string $description
	 *        	SS MAPI Bundle Abstract Command Description
	 * @param LoggerInterface $logger
	 *        	SS MAPI Bundle Abstract Command Logger
	 * @param Reflection $reflection
	 *        	SS MAPI Bundle Abstract Command Reflection
	 */
	public function __construct( $name, $description, LoggerInterface $logger, Table $table, Reflection $reflection, Generator $generator )
	{
		parent::__construct( $name, $description, $logger, $table, $reflection );

		$this->setGenerator( $generator );
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Symfony\Component\Console\Command\Command::configure()
	 */
	protected function configure()
	{
		parent::configure();
	}

	/**
	 *
	 * @return the Generator
	 */
	protected function getGenerator()
	{
		return $this->generator;
	}

	/**
	 *
	 * @param Generator $generator
	 */
	protected function setGenerator( Generator $generator )
	{
		$this->generator = $generator;
		return $this;
	}
}
