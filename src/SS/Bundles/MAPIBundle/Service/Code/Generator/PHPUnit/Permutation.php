<?php

/**
 * SS MAPI Bundle Command Tests Permutation
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Service\Command\Tests;

use SS\MAPIBundle\Service\Code\Generator\PHPUnit\PHPUnit;

class Permutation extends PHPUnit
{

	/**
	 * (non-PHPdoc)
	 *
	 * @see \SS\MAPIBundle\Service\Code\Generator\PHPUnit\AbstractGenerator::execute($input, $output)
	 */
	public function generate()
	{

		parent::execute( $input, $output );
	
	}

}