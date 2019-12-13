<?php

/**
 * SS MAPI Bundle Maven Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MavenController extends AbstractController
{

	public function index()
	{

		return $this->render( 'SSMAPIBundle:Maven:index.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

	public function toolbar()
	{

		return $this->render( 'SSMAPIBundle:Maven:toolbar.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

	public function workspace()
	{

		return $this->render( 'SSMAPIBundle:Maven:workspace.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

	public function command()
	{

		return $this->render( 'SSMAPIBundle:Maven:command.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

	public function help()
	{

		return $this->render( 'SSMAPIBundle:Maven:command.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

}