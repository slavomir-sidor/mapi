<?php
/**
 * SS MAPI Bundle Command Code REST Abstract Command
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Command\Code\Generator\REST;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use SS\Bundle\MAPIBundle\Service\Code\Reflection;
use Raml\Parser;
use Raml\ApiDefinition;
use Symfony\Component\Console\Input\InputOption;
use SS\Bundle\MAPIBundle\Command\TableCommand;
use SS\Bundle\MAPIBundle\Service\Table\Table;
use Psr\Log\LoggerInterface;

abstract class RESTCommand extends TableCommand
{

	/**
	 *
	 * @var Parser
	 */
	protected $apiParser;

	/**
	 *
	 * @var ApiDefinition
	 */
	protected $apiDefinition;

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
	 * @param Parser $apiParser
	 */
	public function __construct( $name, $description, LoggerInterface $logger, Table $table, Reflection $reflection, Parser $apiParser )
	{
		parent::__construct( $name, $description, $logger, $table, $reflection );

		$this->setApiParser( $apiParser );
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\Bundle\MAPIBundle\Service\Code\Generator\PHPUnit\AbstractGenerator::execute($input, $output)
	 */
	public function execute( InputInterface $input, OutputInterface $output )
	{
		parent::execute( $input, $output );

		$this->writeTable( 70 );
	}

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SS\Bundle\MAPIBundle\Command\AbstractCommand::configure()
	 */
	protected function configure()
	{
		parent::configure();

		$outputDirectory = getcwd() . DIRECTORY_SEPARATOR . 'src';

		$this->addOption( "namespace", "ns", InputOption::VALUE_OPTIONAL, "REST API Target namespace.", "\\" );
		$this->addOption( "outputDirectory", "o", InputOption::VALUE_OPTIONAL, "REST API Target namespace.", $outputDirectory );

		$this->addArgument( 'raml', InputArgument::REQUIRED, 'RAML Source file' );
	}

	/**
	 *
	 * @return Parser
	 */
	protected function getApiParser()
	{
		return $this->apiParser;
	}

	/**
	 *
	 * @param Parser $apiParser
	 */
	protected function setApiParser( Parser $apiParser )
	{
		$this->apiParser = $apiParser;
		return $this;
	}

	/**
	 *
	 * @return ApiDefinition
	 */
	protected function getApiDefinition()
	{
		if( null === $this->apiDefinition )
		{
			$filename = $this->getInput()->getArgument( 'raml' );
			$parser = $this->getApiParser();
			$apiDefinition = $parser->parse( $filename );
			$this->setApiDefinition( $apiDefinition );
		}

		return $this->apiDefinition;
	}

	/**
	 *
	 * @param ApiDefinition $apiDefinition
	 */
	protected function setApiDefinition( ApiDefinition $apiDefinition )
	{
		$this->apiDefinition = $apiDefinition;
		return $this;
	}

	protected function generate( $filename, $template, $parameters )
	{
		$dir = dirname( $filename );
		if( ! file_exists( $dir ) )
		{
			mkdir( $dir, 0777, true );
		}
		return file_put_contents( $filename, $this->render( $template, $parameters ) );
	}

	protected function render( $template, $parameters )
	{
		$twig = $this->getTwigEnvironment();

		return $twig->render( $template, $parameters );
	}

	/**
	 * Get the twig environment that will render skeletons.
	 *
	 * @return \Twig_Environment
	 */
	protected function getTwigEnvironment()
	{
		return new \Twig_Environment(
			new \Twig_Loader_Filesystem(
				$this->skeletonDirs ),
			array(
				'debug' => true,
				'cache' => false,
				'strict_variables' => true,
				'autoescape' => false
			) );
	}
}
