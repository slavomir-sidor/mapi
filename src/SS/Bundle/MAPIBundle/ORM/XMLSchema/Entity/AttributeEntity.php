<?php

/**
 * SS MAPI Bundle XML Schema Entity AttributeEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

use SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

class AttributeEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity AttributeEntity Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'attribute';

	/**
	 *
	 * @var AnnotationEntity[]
	 */
	protected $annotation;

	/**
	 *
	 * @var WhiteSpaceAttrsEntity[]
	 */
	protected $whiteSpaceAttrs;

}