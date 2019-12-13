<?php

/**
 * SS MAPI Bundle Code Generator REST Service
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Service\Code\Generator\REST;

use Doctrine\Bundle\DoctrineBundle\Mapping\DisconnectedMetadataFactory;

class Service extends CodeGenerator
{
	public function __construct()
	{
		$manager = new DisconnectedMetadataFactory( $this->getContainer()->get( 'doctrine' ) );
	}
}