<?php

/**
 * SS MAPI Bundle PHPUnit Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Controller;

use Symfony\Component\Finder\Finder;
use Assetic\Exception\Exception;

class PHPUnitController extends ApplicationController
{

	protected $phpunit;

	public function index()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:index.html.twig', $this->getModel() );
	
	}

	public function toolbar()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:toolbar.html.twig', $this->getModel() );
	
	}

	public function workspace()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:workspace.html.twig', $this->getModel() );
	
	}

	public function bundle()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:Bundle/index.html.twig', $this->getModel() );
	
	}

	public function configuration()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:Configuration/index.html.twig', $this->getModel() );
	
	}

	public function configurationFilter()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:Configuration/filter.html.twig', $this->getModel() );
	
	}

	public function configurationLogging()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:Configuration/logging.html.twig', $this->getModel() );
	
	}

	public function configurationPhp()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:Configuration/php.html.twig', $this->getModel() );
	
	}

	public function group()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:Group/index.html.twig', $this->getModel() );
	
	}

	public function testsuite()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:TestSuite/index.html.twig', $this->getModel() );
	
	}

	public function test()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:Test/index.html.twig', $this->getModel() );
	
	}

	public function case()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:Case/index.html.twig', $this->getModel() );
	
	}

	public function report()
	{

		return $this->render( 'SSMAPIBundle:PHPUnit:Report/index.html.twig', $this->getModel() );
	
	}

	public function run()
	{
		// $model = $this->getModel();
		// $model = $model['model'];
		// $groups = $model['groups'];
		
		// $groupIndex = $this->getRequest()->get('group', NULL);
		// $suiteIndex = $this->getRequest()->get('suite', NULL);
		// $testIndex = $this->getRequest()->get('test', NULL);
		// $caseIndex = $this->getRequest()->get('case', NULL);
		
		// $group = $groups[$groupIndex];
		// $suite = $group[$suiteIndex];
		
		// foreach ($suite as $iSuiteTest => $suiteTest)
		// {
		// if ($testIndex == $iSuiteTest)
		// {
		// $test = $suiteTest;
		
		// foreach ($test as $iCaseIndex => $iCase)
		// {
		// if ($caseIndex == $iCaseIndex)
		// {
		// $case = $iCase;
		// }
		// }
		// }
		// }
		
		// $runner = new \PHPUnit_TextUI_TestRunner();
		// $runner->setPrinter();
		// ob_start();
		
		// if (NULL !== $case)
		// {
		// $runner->run($test);
		// }
		// else if (NULL !== $test)
		// {
		// $runner->run($test);
		// }
		// else if (NULL !== $suite)
		// {
		// $runner->run($suite);
		// }
		// else if (NULL !== $group)
		// {
		// $runner->run($group);
		// }
		
		// $output = ob_get_contents();
		// ob_clean();
		// $model['output'] = $output;
		return $this->render( 'SSMAPIBundle:PHPUnit:Run/index.html.twig', array( 
			'model' => $model 
		) );
	
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\Bundle\MAPIBundle\Controller\FilesystemController::getModel()
	 */
	protected function getModel()
	{

		$model = parent::getModel();
		
		$model = $model[ 'model' ];
		$bundlesPhpunit = array();
		
		foreach( $model[ 'bundles' ] as $id => $bundle )
		{
			$bundlePhpUnitFile = sprintf( "%s/%s", $bundle->getPath(), "phpunit.xml" );
			$bundlePhpUnitInfo = new \SplFileInfo( $bundlePhpUnitFile );
			$bundlesPhpunit[ $bundle->getName() ] = $bundlePhpUnitInfo;
		}
		$model[ 'bundlesPhpunit' ] = $bundlesPhpunit;
		
		$phpunit = sprintf( "%s/%s", $model[ 'path' ], "phpunit.xml" );
		$bundle = $model[ 'bundle' ];
		if( NULL != $bundle )
		{
			$phpunit = sprintf( "%s/%s", $bundle->getPath(), "phpunit.xml" );
		}
		
		if( is_file( $phpunit ) )
		{
			$configuration = \PHPUnit_Util_Configuration::getInstance( $phpunit );
			$configuration->handlePHPConfiguration();
			
			$groups = $configuration->getTestSuiteConfiguration()
				->getGroupDetails();
			
			$model[ 'configuration' ] = $configuration;
			$model[ 'groups' ] = $groups;
			$model[ 'group' ] = $this->getRequest()
				->get( 'group', NULL );
			$model[ 'suite' ] = $this->getRequest()
				->get( 'suite', NULL );
			$model[ 'test' ] = $this->getRequest()
				->get( 'test', NULL );
			$model[ 'case' ] = $this->getRequest()
				->get( 'case', NULL );
			$model[ 'phpunit' ] = $phpunit;
			
			// $geshi = new \GeSHi(file_get_contents($phpunit), 'xml');
			// $geshi->parse_code();
		}
		
		return array( 
			'model' => $model 
		);
	
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\Bundle\MAPIBundle\Controller\FilesystemController::getFinder()
	 */
	protected function getFinder( 
		$path )
	{

		$finder = new Finder();
		$finder->ignoreDotFiles( TRUE );
		$finder->depth( 0 );
		$finder->exclude( $this->excludeDirs );
		
		if( ! is_dir( $path ) )
		{
			return $finder;
		}
		
		$finder->in( $path );
		$finder->name( '/^phpunit.xml$/' );
		$finder->files();
		
		return $finder;
	
	}

}
