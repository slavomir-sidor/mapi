<?php

/**
 * SS MAPI Bundle ORM Document
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\Document;

abstract class Document extends \SplFileObject
{

	/**
	 * SS MAPI Bundle Document Source
	 *
	 * @var Source
	 */
	protected $source;

}