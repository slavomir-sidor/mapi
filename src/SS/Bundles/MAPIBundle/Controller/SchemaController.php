<?php

/**
 * SS MAPI Bundle Schema Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Response;

class SchemaController extends ApplicationController
{

	/**
	 * SS MAPI Bundle Console Controller
	 *
	 * @var Application
	 */
	protected $cliApplication;

	public function index()
	{

		return $this->render( 'SSMAPIBundle:Schema:index.html.twig', $this->getModel() );
	
	}

	public function toolbar()
	{

		return $this->render( 'SSMAPIBundle:Schema:toolbar.html.twig', $this->getModel() );
	
	}

	public function workspace()
	{

		return $this->render( 'SSMAPIBundle:Schema:workspace.html.twig', $this->getModel() );
	
	}

	public function namespace()
	{

		return $this->render( 'SSMAPIBundle:Schema:namespace.html.twig', $this->getModel() );
	
	}

	public function interchange()
	{

		$model = $this->getModel();
		$model = $model[ 'model' ];
		$request = $this->getRequest();
		$xmi = $model[ 'xmi' ];
		
		if( $xmi !== null )
		{
		}
		
		$response = new Response( 'Content', Response::HTTP_OK, array( 
			'content-type' => 'text/xml' 
		) );
		$response->prepare( $request );
		return $response->setContent( $xmi );
	
	}

	public function documentation()
	{

		$request = $this->getRequest();
		$model = $this->getModel();
		$systemCommand = sprintf( "%s %s", "phpuml %s", $model[ 'model' ][ 'path' ] );
		
		$output = array();
		$content = "";
		
		if( exec( $systemCommand, $output ) || true )
		{
			foreach( $output as $line )
			{
				$content .= $line;
			}
		}
		
		$response = new Response( 
			'Content', 
			Response::HTTP_OK, 
			array( 
				
				// 'content-type' => 'application/xml',
				'content-type' => 'text/plain' 
			) );
		$response->prepare( $request );
		$response->setContent( $content );
		return $this->render( 'SSMAPIBundle:Schema:Documentation/index.html.twig', $this->getModel() );
	
	}

	/**
	 * SS MAPI Bundle Schema Controller Gateway 
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function gateway()
	{

		return $this->render( 'SSMAPIBundle:Schema:Gateway/index.html.twig', $this->getModel() );
	
	}

	public function explorer()
	{

		$model = $this->getModel();
		$model = $model[ 'model' ];
		$request = $this->getRequest();
		
		$xmiFile = sprintf( "%s%s", $this->get( 'kernel' )
			->getRootDir(), "/src/SS/Bundles/MAPI/Bundle.xmi" );
		$xmi = new \DOMDocument();
		$xmi->load( $xmiFile );
		
		$svgFileTemplate = sprintf( "%s%s", $this->get( 'kernel' )
			->getRootDir(), "/../SS/MAPIBundle/Resources/transformations/umbrello-xmi-to-html.xsl" );
		$svgFile = new \DOMDocument();
		$svgFile->load( $svgFileTemplate );
		
		$xsl = new \XSLTProcessor();
		$xsl->importStyleSheet( $svgFile );
		
		$svg = $xsl->transformToXML( $xmi );
		
		$response = new Response( 'Content', Response::HTTP_OK, array( 
			'content-type' => 'text/xml' 
		) );
		$response->prepare( $request );
		$svg->saveXML();
		
		return $response->setContent();
	
	}

	protected function getModel()
	{

		$model = parent::getModel();
		$model = $model[ 'model' ];
		$path = $this->getRequest()
			->get( "path", NULL );
		
		$xmi = null;
		if( $path !== NULL )
		{
			$systemCommand = sprintf( "phpuml %s", $path );
			$output = array();
			$xmi = "";
			
			if( exec( $systemCommand, $output ) || true )
			{
				foreach( $output as $line )
				{
					$xmi .= $line;
				}
			}
		}
		$model[ 'xmi' ] = $xmi;
		
		return array( 
			'model' => $model 
		);
	
	}

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
		
		return $finder;
	
	}

}