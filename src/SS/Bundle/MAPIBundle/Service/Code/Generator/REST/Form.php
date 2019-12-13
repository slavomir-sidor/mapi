<?php

/**
 * SS MAPI Bundle Code Abstract Generator
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Service\Code\Generator\REST;

class Form extends CodeGenerator
{

	public function __construct()
	{
		$manager = new DisconnectedMetadataFactory( $this->getContainer()->get( 'doctrine' ) );
	}
}