<?php

/**
 * SS MAPI Bundle Generator Route
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Command\Code\Generator\WSDL;

use SS\Bundle\MAPIBundle\Command\Code\Generator\WSDL\AbstractGenerator;

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
			'controllerClass' => 'SS\\MAPIBundle\\Controller\\AbstractController' 
		) );
	
	}

}