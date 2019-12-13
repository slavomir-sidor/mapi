<?php

/**
 * SS MAPI Bundle Service Abstract Generator WSDL Generator
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Command\Code\Generator\WSDL;

use SS\MAPIBundle\SOAP\Client;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use SS\MAPIBundle\WSDL\Document;
use SS\MAPIBundle\Command\Code\Generator\GeneratorCommand;

abstract class AbstractGenerator extends GeneratorCommand
{

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\MAPIBundle\Service\Code\AbstractGenerator\Generator::configure()
	 */
	protected function configure()
	{

		$this->addArgument( 'wsdl', InputArgument::OPTIONAL, 'WSDL File' );
		$this->addOption( "clientClass", "client", InputOption::VALUE_OPTIONAL, "WSDL SOAP Client Class", 'SS\\MAPIBundle\SOAP\\Client' );
		$this->addOption( "serverClass", "server", InputOption::VALUE_OPTIONAL, "WSDL SOAP Server Class", 'SS\\MAPIBundle\SOAP\\Server' );
		$this->addOption( "namespace", "namespace", InputOption::VALUE_OPTIONAL, "WSDL SOAP Class Namespace", 'AppBundle' );
		parent::configure();
	
	}

	/**
	 * Gets SS MAPI Bundle Service Abstract Generator WSDL Generator Document
	 *
	 * @return Document
	 */
	public function getWsdlDocument( 
		$uri )
	{

		return new Document( $uri );
	
	}

}