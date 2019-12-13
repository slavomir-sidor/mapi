<?php

/**
 * SS MAPI Bundle Code Generator PHPUnit Performance
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Service\Code\Generator\PHPUnit;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use SS\Bundle\MAPIBundle\Service\Code\Generator\CodeGenerator;

class Performance extends PHPUnit
{

	public function generate()
	{

		parent::execute( $input, $output );
		$this->generateClassPerformanceCase( $input, $output );
	
	}

}