<?php

/**
 * SS MAPI Bundle Default Controller
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Controller;

class DefaultController extends FilesystemController
{

	public function index()
	{
		return $this->render( '@SSMAPIBundle/Default/index.html.twig', $this->getModel() );
	}

	public function toolbar( $path = NULL )
	{
		return $this->render( 'SSMAPIBundle/Default/toolbar.html.twig', $this->getModel() );
	}

	public function workspace( $path = NULL )
	{
		return $this->render( 'SSMAPIBundle:Default:workspace.html.twig', $this->getModel() );
	}

	public function eastPane( $path = NULL )
	{
		return $this->render( 'SSMAPIBundle:Default:eastPane.html.twig', $this->getModel() );
	}
}