<?php

/**
 * SS MAPI Bundle Command Tests Permutation
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Service\Command\Tests;

use SS\Bundle\MAPIBundle\Service\Code\Generator\PHPUnit\PHPUnit;

class Permutation extends PHPUnit
{

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\Bundle\MAPIBundle\Service\Code\Generator\PHPUnit\AbstractGenerator::execute($input, $output)
	 */
	public function generate()
	{

		parent::execute( $input, $output );
	
	}

}