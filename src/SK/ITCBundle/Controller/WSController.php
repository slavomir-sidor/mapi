<?php

/**
 * SK ITC Bundle Web Service Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Controller;

use Symfony\Component\Finder\Finder;
use Zend\Code\Reflection\ClassReflection;
use Zend\Soap\Wsdl;

class WSController extends ApplicationController
{

	/**
	 *
	 * @var array
	 */
	protected $excludeDirs = array( 
		'.git',
		'target',
		'var',
		'vendor' 
	);

	const WSLD_RESOURCE_NAMSPACE_PATTERN = '%s/Resources/Schema/%s';

	public function index()
	{

		return $this->render( 'SKITCBundle:WS:index.html.twig', $this->getModel() );
	
	}

	public function toolbar()
	{

		return $this->render( 'SKITCBundle:WS:toolbar.html.twig', $this->getModel() );
	
	}

	public function workspace()
	{

		return $this->render( 'SKITCBundle:WS:workspace.html.twig', $this->getModel() );
	
	}

	public function create()
	{

		return $this->render( 'SKITCBundle:WS:create.html.twig', $this->getModel() );
	
	}

	public function edit()
	{

		return $this->render( 'SKITCBundle:WS:edit.html.twig', $this->getModel() );
	
	}

	public function view()
	{

		return $this->render( 'SKITCBundle:WS:view.html.twig', $this->getModel() );
	
	}

	public function soap()
	{

		$x = new \SoapClient( "" );
		$x->__setSoapHeaders();
	
	}

	public function wsdl()
	{

		return $this->render( 'SKITCBundle:WS:WSDL/index.html.twig', $this->getModel() );
	
	}

	public function bundle()
	{

		return $this->render( 'SKITCBundle:WS:Bundle/index.html.twig', $this->getModel() );
	
	}

	public function delete()
	{

		return $this->render( 'SKITCBundle:WS:delete.html.twig', $this->getModel() );
	
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
		$bundle = $model[ 'bundle' ];
		
		// $wsdlService = $this->container->get('SKITCBundleServiceWSDL');
		// $wsdl = $this->getRequest()->get('wsld');
		// $model['wsdlService']=$wsdlService;
		return array( 
			'model' => $model 
		);
	
	}

}