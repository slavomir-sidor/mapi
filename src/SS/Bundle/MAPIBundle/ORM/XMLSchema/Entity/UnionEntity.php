<?php

/**
 * SS MAPI Bundle XML Schema Entity UnionEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

use SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

class UnionEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity UnionEntity Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'union';

	/**
	 *
	 * @var string
	 */
	protected $id;

	/**
	 *
	 * @var QNamesEntity
	 */
	protected $memberTypes;

	/**
	 *
	 * @var AnnotationEntity
	 */
	protected $annotation;

	/**
	 *
	 * @var SimpleTypeEntity[]
	 */
	protected $simpleType;

	/**
	 *
	 * @var WhiteSpaceAttrsEntity
	 */
	protected $whiteSpaceAttrs;

}