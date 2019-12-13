<?php

/**
 * SS MAPI Bundle Web Service Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Controller;

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

		return $this->render( 'SSMAPIBundle:WS:index.html.twig', $this->getModel() );
	
	}

	public function toolbar()
	{

		return $this->render( 'SSMAPIBundle:WS:toolbar.html.twig', $this->getModel() );
	
	}

	public function workspace()
	{

		return $this->render( 'SSMAPIBundle:WS:workspace.html.twig', $this->getModel() );
	
	}

	public function create()
	{

		return $this->render( 'SSMAPIBundle:WS:create.html.twig', $this->getModel() );
	
	}

	public function edit()
	{

		return $this->render( 'SSMAPIBundle:WS:edit.html.twig', $this->getModel() );
	
	}

	public function view()
	{

		return $this->render( 'SSMAPIBundle:WS:view.html.twig', $this->getModel() );
	
	}

	public function soap()
	{

		$x = new \SoapClient( "" );
		$x->__setSoapHeaders();
	
	}

	public function wsdl()
	{

		return $this->render( 'SSMAPIBundle:WS:WSDL/index.html.twig', $this->getModel() );
	
	}

	public function bundle()
	{

		return $this->render( 'SSMAPIBundle:WS:Bundle/index.html.twig', $this->getModel() );
	
	}

	public function delete()
	{

		return $this->render( 'SSMAPIBundle:WS:delete.html.twig', $this->getModel() );
	
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
		
		// $wsdlService = $this->container->get('SSMAPIBundleServiceWSDL');
		// $wsdl = $this->getRequest()->get('wsld');
		// $model['wsdlService']=$wsdlService;
		return array( 
			'model' => $model 
		);
	
	}

}