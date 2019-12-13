<?php

/**
 * SS MAPI Bundle XML Schema Entity KeyEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

use SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

class KeyEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity KeyEntity Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'key';

	/**
	 *
	 * @var SelectorEntity[]
	 */
	protected $selector;

	/**
	 *
	 * @var FieldEntity[]
	 */
	protected $field;

}