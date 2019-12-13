<?php

/**
 * SS MAPI Bundle Continuos Integration Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Finder\Finder;
use Symfony\Component\ClassLoader\ClassMapGenerator;
use Zend\Code\Reflection\FileReflection;
use Zend\Code\Reflection\ClassReflection;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use Zend\Code\Scanner\AggregateDirectoryScanner;
use SS\Bundle\MAPIBundle\Service\Code\Reflection\BundleReflection;
use Zend\Soap\Wsdl;
use Zend\Soap\AutoDiscover;

class ITCController extends FilesystemController
{

	public function index()
	{

		return $this->render( 'SSMAPIBundle:Filesystem:index.html.twig', $this->getModel() );
	
	}

	public function toolbar()
	{

		return $this->render( 'SSMAPIBundle:ITC:toolbar.html.twig', $this->getModel() );
	
	}

	public function workspace()
	{

		return $this->render( 'SSMAPIBundle:ITC:workspace.html.twig', $this->getModel() );
	
	}

	public function jenkins()
	{

		return $this->render( 'SSMAPIBundle:ITC:Jenkins/index.html.twig', $this->getModel() );
	
	}

	public function tomcat()
	{

		return $this->render( 'SSMAPIBundle:ITC:Tomcat/index.html.twig', $this->getModel() );
	
	}

	public function nexus()
	{

		return $this->render( 'SSMAPIBundle:ITC:Nexus/index.html.twig', $this->getModel() );
	
	}

	public function sonar()
	{

		return $this->render( 'SSMAPIBundle:ITC:Sonar/index.html.twig', $this->getModel() );
	
	}

	public function admin()
	{

		return $this->render( 'SSMAPIBundle:ITC:Admin/index.html.twig', $this->getModel() );
	
	}

	public function git()
	{

		return $this->render( 'SSMAPIBundle:ITC:Git/index.html.twig', $this->getModel() );
	
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