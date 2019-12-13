<?php

/**
 * SS MAPI Bundle XML Schema Simple Type
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

use SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

class SimpleTypeEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity Simple Type Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'whiteSpaceAttrs';

	/**
	 *
	 * @var AnnotationEntity
	 */
	protected $annotation;

	/**
	 *
	 * @var RestrictionEntity
	 */
	protected $restriction;

	/**
	 *
	 * @var ListEntity
	 */
	protected $list;

	/**
	 *
	 * @var UnionEntity
	 */
	protected $union;

}