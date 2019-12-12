<?php

/**
 * SK ITCBundle Command Mylyn Report Command
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Command\OS;

use SK\ITCBundle\Service\OS\Command;
use SK\ITCBundle\Command\TableCommand;
use Symfony\Component\HttpKernel\Log\Logger;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use SK\ITCBundle\Service\Table\Table;

class ShellCommand extends TableCommand
{

	/**
	 *
	 * @var Command
	 */
	protected $command;

	/**
	 * Constructs SK ITCBundle Abstract Command
	 *
	 * @param string $name
	 * @param string $description
	 * @param Logger $logger
	 * @param Command $commad
	 */
	public function __construct( $name, $description, Logger $logger, Table $table,
		Command $command )
	{
		parent::__construct( $name, $description, $logger, $table );

		$this->setCommand( $command );
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \SK\ITCBundle\Command\TableCommand::getColumns()
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
	 * @see \SK\ITCBundle\Command\TableCommand::getRows()
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