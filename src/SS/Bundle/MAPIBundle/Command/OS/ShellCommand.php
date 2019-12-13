<?php

/**
 * SS MAPI Bundle Command Mylyn Report Command
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Command\OS;

use SS\Bundle\MAPIBundle\Service\OS\Command;
use SS\Bundle\MAPIBundle\Command\TableCommand;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use SS\Bundle\MAPIBundle\Service\Table\Table;

class ShellCommand extends TableCommand
{

	/**
	 *
	 * @var Command
	 */
	protected $command;

	/**
	 * Constructs SS MAPI Bundle Abstract Command
	 *
	 * @param string $name
	 * @param string $description
	 * @param LoggerInterface $logger
	 * @param Command $commad
	 */
	public function __construct( $name, $description, LoggerInterface $logger, Table $table,
		Command $command )
	{
		parent::__construct( $name, $description, $logger, $table );

		$this->setCommand( $command );
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \SS\Bundle\MAPIBundle\Command\TableCommand::getColumns()
	 */
	protected function getColumns()
	{
		$prefix = $this->getCommand()->getPrefix();
		$arguments = $this->getCommand()->getArguments();

		return array(
			'command' => $prefix . " " .
			( is_array( $arguments ) ? implode( ' ', $arguments ) : $arguments )
		);
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \SS\Bundle\MAPIBundle\Command\TableCommand::getRows()
	 */
	protected function getRows()
	{
		if( null === $this->rows )
		{
			$this->getCommand()->run();

			$process = $this->getCommand()->getProcess();

			$rows = [['command' => $process->getOutput()
			]
			];
			$this->setRows( $rows );
		}

		return $this->rows;
	}

	/**
	 *
	 * @return Command
	 */
	protected function getCommand()
	{
		return $this->command;
	}

	/**
	 *
	 * @param Command $command
	 */
	protected function setCommand( Command $command )
	{
		$this->command = $command;
		return $this;
	}
}