<?php

/**
 * SS MAPI Bundle Code Generator PHPUnit Config
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Service\Code\Generator\PHPUnit;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Config extends PHPUnit
{

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\Bundle\MAPIBundle\Service\Command\Tests\Generate::execute($input, $output)
	 */
	public function generate()
	{

		parent::execute( $input, $output );
		
		$this->generateConfigCase( $input, $output );
		$this->generateConfigServices( $input, $output );
	
	}

}