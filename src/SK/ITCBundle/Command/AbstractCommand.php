<?php

/**
 * SK ITCBundle Abstract Command
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Psr\Log\LoggerInterface;
use SK\ITCBundle\Service\Table\Adapter\TXT;
use SK\ITCBundle\Service\Table\Adapter\SpreedSheet;
use SK\ITCBundle\Service\Table\Adapter\Excel;
use Symfony\Component\Console\Command\Command;

abstract class AbstractCommand extends Command
{

	/**
	 * SK ITCBundle Abstract Command Input
	 *
	 * @var InputInterface
	 */
	protected $input;

	/**
	 * SK ITCBundle Abstract Command Output
	 *
	 * @var OutputInterface
	 */
	protected $output;

	/**
	 * SK ITCBundle Abstract Command Logger
	 *
	 * @var LoggerInterface
	 */
	protected $logger;

	/**
	 * Constructs SK ITCBundle Abstract Command
	 *
	 * @param string $name
	 *        	SK ITCBundle Abstract Command Name
	 * @param string $description
	 *        	SK ITCBundle Abstract Command Description
	 * @param LoggerInterface $logger
	 *        	SK ITCBundle Abstract Command LoggerInterface
	 */
	public function __construct( $name, $description, LoggerInterface $logger )
	{
		parent::__construct( $name );

		$this->setDescription( $description );
		$this->setLogger( $logger );
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Symfony\Component\Console\Command\Command::execute()
	 */
	public function execute( InputInterface $input, OutputInterface $output )
	{
		$this->setInput( $input );
		$this->setOutput( $output );
		$this->getLogger()->info( 
			sprintf( "Running '%s '", $this->getName() ));
				
				//,implode( " ", $input->getArguments() ), implode( " ", $input->getOptions() ) ));
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
	 * Gets SK ITCBundle Abstract Command Input
	 *
	 * @return InputInterface
	 */
	public function getInput()
	{
		return $this->input;
	}

	/**
	 * Sets SK ITCBundle Abstract Command Input
	 *
	 * @param InputInterface $input
	 */
	public function setInput( InputInterface $input )
	{
		$this->input = $input;
		return $this;
	}

	/**
	 * Gets SK ITCBundle Abstract Command Output
	 *
	 * @return OutputInterface
	 */
	public function getOutput()
	{
		return $this->output;
	}

	/**
	 * Sets SK ITCBundle Abstract Command Output
	 *
	 * @param OutputInterface $output
	 */
	public function setOutput( OutputInterface $output )
	{
		$this->output = $output;
		return $this;
	}

	/**
	 * Writes SK ITCBundle Abstract Command Line
	 *
	 * @param string $message
	 * @param int $verbosity
	 * @param OutputInterface $output
	 * @return \SK\ITCBundle\Command\AbstractCommand
	 */
	public function writeLine( $message = "\n",
		$verbosity = OutputInterface::VERBOSITY_NORMAL, OutputInterface $output = null )
	{
		if( $output === null )
		{
			$output = $this->getOutput();
		}

		$output->writeln( $message, $verbosity );

		return $this;
	}

	/**
	 * Writes SK ITCBundle Abstract Command Info
	 *
	 * @param string $message
	 *        	SK ITCBundle Abstract Command Info Message
	 * @param OutputInterface $output
	 * @return \SK\ITCBundle\Command\AbstractCommand SK ITCBundle Abstract Command
	 */
	public function writeInfo( $message, $verbosity = OutputInterface::VERBOSITY_VERBOSE,
		OutputInterface $output = null )
	{
		if( $output === null )
		{
			$output = $this->getOutput();
		}

		$output->writeln( sprintf( '<fg=white>%s</fg=white>', $message ), $verbosity );

		return $this;
	}

	/**
	 * Writes SK ITCBundle Abstract Command Header
	 *
	 * @param string $message
	 *        	SK ITCBundle Abstract Command Header Message
	 * @param OutputInterface $output
	 * @return \SK\ITCBundle\Command\AbstractCommand SK ITCBundle Abstract Command
	 */
	public function writeHeader( $message, OutputInterface $output = null )
	{
		if( $output === null )
		{
			$output = $this->getOutput();
		}

		$output->writeln( ' <fg=white;bg=magenta>' . $message . "</fg=white;bg=magenta>" );

		return $this;
	}

	/**
	 * Writes SK ITCBundle Abstract Command Notice
	 *
	 * @param string $message
	 *        	SK ITCBundle Abstract Command Notice Message
	 * @param OutputInterface $output
	 * @return \SK\ITCBundle\Command\AbstractCommand SK ITCBundle Abstract Command
	 */
	public function writeNotice( $message, $verbosity = OutputInterface::VERBOSITY_NORMAL,
		OutputInterface $output = null )
	{
		if( $output === null )
		{
			$output = $this->getOutput();
		}

		$output->writeln( "<fg=blue>{$message}</fg=blue>", $verbosity );

		return $this;
	}

	/**
	 * Writes SK ITCBundle Abstract Command Debug
	 *
	 * @param string $message
	 *        	SK ITCBundle Abstract Command Debug Message
	 * @param InputInterface $input
	 * @param OutputInterface $output
	 * @return \SK\ITCBundle\Command\AbstractCommand SK ITCBundle Abstract Command
	 */
	public function writeDebug( $message, InputInterface $input = null,
		OutputInterface $output = null )
	{
		if( $output === null )
		{
			$output = $this->getOutput();
		}

		if( $input === null )
		{
			$input = $this->getInput();
		}

		if( self::OPTION_VERBOSE_OUTPUT_YES == $input->getOption( "verbose" ) )
		{
			$output->writeln( ' <fg=blue;bg=white>DEBUG:</fg=blue;bg=white> ' . $message );
		}

		return $this;
	}

	/**
	 * Gets SK ITCBundle Abstract Command LoggerInterface
	 *
	 * @return LoggerInterface SK ITCBundle Abstract Command Logger Interface
	 */
	public function getLogger()
	{
		return $this->logger;
	}

	/**
	 * Sets SK ITCBundle Abstract Command Logger
	 *
	 * @param LoggerInterface $logger
	 *        	SK ITCBundle Abstract Command Logger
	 * @return \SK\ITCBundle\Command\AbstractCommand SK ITCBundle Abstract Command
	 */
	public function setLogger( LoggerInterface $logger )
	{
		$this->logger = $logger;
		return $this;
	}
}
