<?php

/**
 * SS MAPI Bundle XML Schema Entity List
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;

class ListEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity List Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'list';

	/**
	 *
	 * @var WhiteSpaceAttrsEntity[]
	 */
	protected $whiteSpaceAttrs;

}