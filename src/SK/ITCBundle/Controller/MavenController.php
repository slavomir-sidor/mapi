<?php

/**
 * SK ITC Bundle Maven Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MavenController extends AbstractController
{

	public function index()
	{

		return $this->render( 'SKITCBundle:Maven:index.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

	public function toolbar()
	{

		return $this->render( 'SKITCBundle:Maven:toolbar.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

	public function workspace()
	{

		return $this->render( 'SKITCBundle:Maven:workspace.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

	public function command()
	{

		return $this->render( 'SKITCBundle:Maven:command.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

	public function help()
	{

		return $this->render( 'SKITCBundle:Maven:command.html.twig', array( 
			'path' => getcwd() 
		) );
	
	}

}