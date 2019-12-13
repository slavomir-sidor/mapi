<?php

/**
 * SS MAPI Bundle Code Generator WSDL Controller
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Service\Code\Generator\WSDL;

use SS\Bundle\MAPIBundle\Service\Code\Generator\WSDL\AbstractGenerator;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Psr\Log\LoggerInterface;

class Controller extends AbstractGenerator
{

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Zend\Code\Generator\GeneratorInterface::generate()
	 */
	public function generate( 
		Document $document )
	{

		$definition = $document->getDefinitions();
		$portTypes = $definition->getPortType();
	
	}

}