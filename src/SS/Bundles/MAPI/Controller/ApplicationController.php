<?php

/**
 * SS MAPI Bundle Application Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Finder\Finder;
use Symfony\Component\ClassLoader\ClassMapGenerator;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use SS\MAPIBundle\Service\Code\Reflection\BundleReflection;
use AppBundle\DTD\Document\XMLSchema;
use Zend\Code\Reflection\FileReflection;
use Zend\Code\Reflection\ClassReflection;
use Zend\Code\Scanner\AggregateDirectoryScanner;
use Zend\Soap\Wsdl;
use Zend\Soap\AutoDiscover;

class ApplicationController extends FilesystemController
{

	public function index()
	{

		return $this->render( 'SSMAPIBundle:Application:index.html.twig', $this->getModel() );
	
	}

	public function toolbar()
	{

		return $this->render( 'SSMAPIBundle:Application:toolbar.html.twig', $this->getModel() );
	
	}

	public function workspace()
	{

		return $this->render( 'SSMAPIBundle:Application:workspace.html.twig', $this->getModel() );
	
	}

	public function container()
	{

		return $this->render( 'SSMAPIBundle:Application:Container/index.html.twig', $this->getModel() );
	
	}

	public function create()
	{

		return $this->render( 'SSMAPIBundle:Application:create.html.twig', $this->getModel() );
	
	}

	public function edit()
	{

		return $this->render( 'SSMAPIBundle:Application:edit.html.twig', $this->getModel() );
	
	}

	public function view()
	{

		return $this->render( 'SSMAPIBundle:Application:edit.html.twig', $this->getModel() );
	
	}

	public function filesystem()
	{

		return $this->render( 'SSMAPIBundle:Application:Filesystem/index.html.twig', $this->getModel() );
	
	}

	public function bundle()
	{

		return $this->render( 'SSMAPIBundle:Application:Bundle/index.html.twig', $this->getModel() );
	
	}

	public function service()
	{

		return $this->render( 'SSMAPIBundle:Application:service.html.twig', $this->getModel() );
	
	}

	public function model()
	{

		return $this->render( 'SSMAPIBundle:Application:namespace.html.twig', $this->getModel() );
	
	}

	public function namespace()
	{

		return $this->render( 'SSMAPIBundle:Application:Namespace/index.html.twig', $this->getModel() );
	
	}

	public function configuration()
	{

		$model = $this->getModel();
		
		$kernel = $this->get( 'kernel' );
		$configFile = sprintf( "%s/config/config.xml", $kernel->getRootDir() );
		
		$dom = new XMLSchema( $configFile );
		
		$model[ 'model' ][ 'dom' ] = $dom;
		
		return $this->render( 'SSMAPIBundle:Application:Configuration/index.html.twig', $model );
	
	}

	/**
	 *
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function class()
	{

		return $this->render( 'SSMAPIBundle:Application:class/index.html.twig', $this->getModel() );
	
	}

	public function classFile()
	{

		return $this->render( 'SSMAPIBundle:Application:class/file/index.html.twig', $this->getModel() );
	
	}

	public function classSchema()
	{

		$model = $this->getModel();
		
		$request = $this->getRequest();
		$model = $this->getModel();
		$systemCommand = sprintf( "%s %s", "phpuml", $model[ 'classFile' ] );
		
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
		$response->setContent( $content );
		$response->prepare( $request );
		return $response->send();
	
	}

	public function delete()
	{

		return $this->render( 'SSMAPIBundle:Application:delete.html.twig', $this->getModel() );
	
	}

	/**
	 *
	 * @return multitype:\SplFileInfo \Symfony\Component\Finder\Finder
	 *         \Symfony\Component\HttpFoundation\mixed
	 */
	protected function getModel()
	{

		$model = parent::getModel();
		$model = $model[ 'model' ];
		
		$bundle = $this->getRequest()
			->get( 'bundle', NULL );
		$namespace = $this->getRequest()
			->get( 'namespace', NULL );
		$class = $this->getRequest()
			->get( 'class', NULL );
		$kernel = $this->get( 'kernel' );
		$bundles = $kernel->getBundles();
		$classWsdl = null;
		$classWsdlDomDocument = null;
		
		if( NULL !== $bundle && array_key_exists( $bundle, $bundles ) )
		{
			$bundle = new BundleReflection( $bundles[ $bundle ] );
			$namespace = $bundle->getNamespace( $namespace );
			
			if( NULL !== $class )
			{
				try
				{
					$class = $namespace->getClassReflection( $class );
					$autodiscover = new AutoDiscover();
					$autodiscover->setClass( $class->getName() )
						->setUri( $this->getRequest()
						->getBaseUrl() . $this->getRequest()
						->getRequestUri() )
						->setServiceName( $class->getName() );
					
					$classWsdl = $autodiscover->generate();
					$classWsdlDomDocument = $classWsdl->toDomDocument();
					$classWsdlDomDocument->formatOutput = true;
				}
				catch( \Exception $e )
				{
				}
			}
		}
		
		$model[ 'bundle' ] = $bundle;
		$model[ 'bundles' ] = $bundles;
		$model[ 'namespace' ] = $namespace;
		$model[ 'class' ] = $class;
		$model[ 'classWsdl' ] = $classWsdl;
		$model[ 'classWsdlDomDocument' ] = $classWsdlDomDocument;
		
		return array( 
			'model' => $model 
		);
	
	}

	/**
	 *
	 * @param string $path        	
	 * @return \Symfony\Component\Finder\Finder
	 */
	protected function getFinder( 
		$path )
	{

		$finder = parent::getFinder( $path );
		$finder->name( '/\AppKernel.php$/' );
		$finder->files();
		return $finder;
	
	}

}