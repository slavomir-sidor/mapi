<?php

/**
 * SS MAPI Bundle Console Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Command\Command;

class ConsoleController extends FilesystemController
{

	/**
	 * SS MAPI Bundle Console Controller
	 *
	 * @var Application
	 */
	protected $cliApplication;

	public function index()
	{

		return $this->render( 'SSMAPIBundle:Console:index.html.twig', $this->getModel() );
	
	}

	public function toolbar()
	{

		try
		{
		}
		catch( \Exception $e )
		{
		}
		
		return $this->render( 'SSMAPIBundle:Console:toolbar.html.twig', $this->getModel() );
	
	}

	public function workspace()
	{

		return $this->render( 'SSMAPIBundle:Console:workspace.html.twig', $this->getModel() );
	
	}

	public function namespace()
	{

		return $this->render( 'SSMAPIBundle:Console:namespace.html.twig', $this->getModel() );
	
	}

	public function run()
	{

		$model = $this->getModel();
		
		$requestCommand = $this->getRequest()
			->get( 'command' );
		$requestArguments = $this->getRequest()
			->get( 'arguments' );
		$requestOptions = $this->getRequest()
			->get( 'options' );
		
		$cli = $this->getCliApplication();
		$command = $cli->get( $requestCommand );
		
		$input = new ArrayInput( array( 
			$command->getName(),
			'--no-interaction' 
		) );
		
		$output = new BufferedOutput();
		$cli->run( $input, $output );
		
		$model[ 'output' ] = $output->fetch();
		return $this->render( 'SSMAPIBundle:Console:run.html.twig', $model );
	
	}

	public function help()
	{

		$model = $this->getModel();
		
		$requestCommand = $this->getRequest()
			->get( 'command' );
		
		$cli = $this->getCliApplication();
		$command = $cli->get( $requestCommand );
		
		$model[ 'definition' ] = $command->getDefinition();
		
		$input = new ArrayInput( array( 
			sprintf( "help %s", $requestCommand ) 
		) );
		
		$output = new BufferedOutput();
		// $cli->run($input, $output);
		$model[ 'output' ] = $output->fetch();
		
		return $this->render( 'SSMAPIBundle:Console:help.html.twig', $model );
	
	}

	public function command()
	{

		return $this->render( 'SSMAPIBundle:Console:command.html.twig', $this->getModel() );
	
	}

	protected function getCliApplication()
	{

		if( NULL === $this->cliApplication )
		{
			
			$kernel = $this->get( 'kernel' );
			$container = $kernel->getContainer();
			
			$cliApplication = new Application( $kernel );
			$cliApplication->setAutoExit( false );
			
			/* @var $bundle Bundle  */
			foreach( $kernel->getBundles() as $bundle )
			{
				$bundle->registerCommands( $cliApplication );
			}
			
			if( $container->hasParameter( 'console.command.ids' ) )
			{
				foreach( $container->getParameter( 'console.command.ids' ) as $id )
				{
					$cliApplication->add( $container->get( $id ) );
				}
			}
			
			$this->cliApplication = $cliApplication;
		}
		return $this->cliApplication;
	
	}

	protected function getModel()
	{

		$model = parent::getModel();
		$model = $model[ 'model' ];
		$request = $this->getRequest();
		
		$kernel = $this->get( 'kernel' );
		$cli = $this->getCliApplication();
		$commands = $cli->all();
		
		$model[ 'bundles' ] = array_keys( $kernel->getBundles() );
		$model[ 'cli' ] = $this->getCliApplication();
		$model[ 'namespace' ] = $this->getRequest()
			->get( 'namespace' );
		
		$command = $this->getRequest()
			->get( 'command' );
		
		if( NULL !== $command )
		{
			$model[ 'command' ] = $cli->get( $command );
		}
		
		return array( 
			'model' => $model 
		);
	
	}

}