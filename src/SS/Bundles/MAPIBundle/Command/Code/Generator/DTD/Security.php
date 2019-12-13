<?php

/**
 * SS MAPI Bundle Command Code Generator DTD Security
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Command\Code\Generator\DTD;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use SS\MAPIBundle\Service\Code\Generator\DTD\Security as SecurityGenerator;

class Security extends AbstractGenerator
{

	/**
	 * * SS MAPI Bundle Command Code Generator DTD Security Generator
	 *
	 * @var SecurityGenerator
	 */
	protected $generator;

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\MAPIBundle\Service\Code\AbstractGenerator\Generator::configure()
	 */
	protected function configure()
	{

		$this->addArgument( 'output', InputArgument::OPTIONAL, 'Output Folder', 'src/AppBundle/Resource/config' );
		parent::configure();
	
	}

	/**
	 * (non-PHPdoc)
	 *
	 * @see \Symfony\Component\Console\Command\Command::execute()
	 */
	public function execute( 
		InputInterface $input, 
		OutputInterface $output )
	{

		$generator = $this->getGenerator();
	
	}

}