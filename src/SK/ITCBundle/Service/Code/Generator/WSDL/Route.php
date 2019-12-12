<?php

/**
 * SK ITCBundle Generator Route
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Service\Code\Generator\WSDL;

use SK\ITCBundle\Service\Code\Generator\WSDL\AbstractGenerator;

class Route extends AbstractGenerator
{

	/**
	 *
	 * @param OptionsResolverInterface $resolver        	
	 */
	protected function configureOptions( 
		OptionsResolverInterface $resolver )
	{

		$resolver->setDefaults( array( 
			'controllerClass' => 'SK\\ITCBundle\\Controller\\AbstractController' 
		) );
	
	}

}