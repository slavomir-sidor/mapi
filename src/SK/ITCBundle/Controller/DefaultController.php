<?php

/**
 * SK ITC Bundle Default Controller
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Controller;

class DefaultController extends FilesystemController
{

	public function index()
	{
		return $this->render( 'SKITCBundle:Default:index.html.twig', $this->getModel() );
	}

	public function toolbar( $path = NULL )
	{
		return $this->render( 'SKITCBundle:Default:toolbar.html.twig', $this->getModel() );
	}

	public function workspace( $path = NULL )
	{
		return $this->render( 'SKITCBundle:Default:workspace.html.twig', $this->getModel() );
	}

	public function eastPane( $path = NULL )
	{
		return $this->render( 'SKITCBundle:Default:eastPane.html.twig', $this->getModel() );
	}
}