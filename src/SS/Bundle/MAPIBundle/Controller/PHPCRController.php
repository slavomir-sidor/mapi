<?php

/**
 * SS MAPI Bundle PHPCR Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;
use SS\Bundle\MAPIBundle\Response\Model;

class PHPCRController extends FilesystemController
{

	public function index()
	{

		return $this->render( 'SSMAPIBundle:PHPCR:index.html.twig', $this->getModel() );
	
	}

	public function toolbar()
	{

		return $this->render( 'SSMAPIBundle:PHPCR:toolbar.html.twig', $this->getModel() );
	
	}

	public function workspace()
	{

		return $this->render( 'SSMAPIBundle:PHPCR:workspace.html.twig', $this->getModel() );
	
	}

	public function create()
	{

		return $this->render( 'SSMAPIBundle:PHPCR:Create/index.html.twig', $this->getModel() );
	
	}

	public function edit()
	{

		return $this->render( 'SSMAPIBundle:PHPCR:Edit/index.html.twig', $this->getModel() );
	
	}

	public function save()
	{

		return $this->render( 'SSMAPIBundle:PHPCR:Save/index.html.twig', $this->getModel() );
	
	}

	public function detail()
	{

		$model = $this->getModel();
		return $this->render( 'SSMAPIBundle:PHPCR:Detail/index.html.twig', $model );
	
	}

	public function delete()
	{

		return $this->render( 'SSMAPIBundle:PHPCR:Delete/index.html.twig', $this->getModel() );
	
	}

	/**
	 *
	 * @return multitype:\SplFileInfo \Symfony\Component\Finder\Finder
	 *         \Symfony\Component\HttpFoundation\mixed
	 */
	protected function getModel()
	{
		// $model = new Model();
		$model = parent::getModel();
		$model = $model[ 'model' ];
		$request = $this->getRequest();
		
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