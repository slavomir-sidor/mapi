<?php
/**
 * SS MAPI Bundle Abstract Command
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Psr\Log\LoggerInterface;
use SS\Bundle\MAPIBundle\Service\Table\Adapter\TXT;
use SS\Bundle\MAPIBundle\Service\Table\Adapter\SpreedSheet;
use SS\Bundle\MAPIBundle\Service\Table\Adapter\Excel;
use Symfony\Component\Console\Command\Command;

abstract class AbstractCommand extends Command
{

	/**
	 * SS MAPI Bundle Abstract Command Input
	 *
	 * @var InputInterface
	 */
	protected $input;

	/**
	 * SS MAPI Bundle Abstract Command Output
	 *
	 * @var OutputInterface
	 */
	protected $output;

	/**
	 * SS MAPI Bundle Abstract Command Logger
	 *
	 * @var LoggerInterface
	 */
	protected $logger;

	/**
	 * Constructs SS MAPI Bundle Abstract Command
	 *
	 * @param string $name
	 *        	SS MAPI Bundle Abstract Command Name
	 * @param string $description
	 *        	SS MAPI Bundle Abstract Command Description
	 * @param LoggerInterface $logger
	 *        	SS MAPI Bundle Abstract Command LoggerInterface
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
	 * Gets SS MAPI Bundle Abstract Command Input
	 *
	 * @return InputInterface
	 */
	public function getInput()
	{
		return $this->input;
	}

	/**
	 * Sets SS MAPI Bundle Abstract Command Input
	 *
	 * @param InputInterface $input
	 */
	public function setInput( InputInterface $input )
	{
		$this->input = $input;
		return $this;
	}

	/**
	 * Gets SS MAPI Bundle Abstract Command Output
	 *
	 * @return OutputInterface
	 */
	public function getOutput()
	{
		return $this->output;
	}

	/**
	 * Sets SS MAPI Bundle Abstract Command Output
	 *
	 * @param OutputInterface $output
	 */
	public function setOutput( OutputInterface $output )
	{
		$this->output = $output;
		return $this;
	}

	/**
	 * Writes SS MAPI Bundle Abstract Command Line
	 *
	 * @param string $message
	 * @param int $verbosity
	 * @param OutputInterface $output
	 * @see \SS\Bundle\MAPIBundle\Command\AbstractCommand
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
	 * Writes SS MAPI Bundle Abstract Command Info
	 *
	 * @param string $message
	 *        	SS MAPI Bundle Abstract Command Info Message
	 * @param OutputInterface $output
	 * @see \SS\Bundle\MAPIBundle\Command\AbstractCommand SS MAPI Bundle Abstract Command
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
	 * Writes SS MAPI Bundle Abstract Command Header
	 *
	 * @param string $message
	 *        	SS MAPI Bundle Abstract Command Header Message
	 * @param OutputInterface $output
	 * @see \SS\Bundle\MAPIBundle\Command\AbstractCommand SS MAPI Bundle Abstract Command
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
	 * Writes SS MAPI Bundle Abstract Command Notice
	 *
	 * @param string $message
	 *        	SS MAPI Bundle Abstract Command Notice Message
	 * @param OutputInterface $output
	 * @see \SS\Bundle\MAPIBundle\Command\AbstractCommand SS MAPI Bundle Abstract Command
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
	 * Writes SS MAPI Bundle Abstract Command Debug
	 *
	 * @param string $message
	 *        	SS MAPI Bundle Abstract Command Debug Message
	 * @param InputInterface $input
	 * @param OutputInterface $output
	 * @see \SS\Bundle\MAPIBundle\Command\AbstractCommand SS MAPI Bundle Abstract Command
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
	 * Gets SS MAPI Bundle Abstract Command LoggerInterface
	 *
	 * @return LoggerInterface SS MAPI Bundle Abstract Command Logger Interface
	 */
	public function getLogger()
	{
		return $this->logger;
	}

	/**
	 * Sets SS MAPI Bundle Abstract Command Logger
	 *
	 * @param LoggerInterface $logger
	 *        	SS MAPI Bundle Abstract Command Logger
	 * @see \SS\Bundle\MAPIBundle\Command\AbstractCommand SS MAPI Bundle Abstract Command
	 */
	public function setLogger( LoggerInterface $logger )
	{
		$this->logger = $logger;
		return $this;
	}
}
