<?php

/**
 * SS MAPI Bundle XML Schema Entity Attribute Group
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

use SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

class AttributeGroupEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity Attribute Group Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'attributeGroup';

	/**
	 *
	 * @var AnnotationEntity[]
	 */
	protected $annotation;

	/**
	 *
	 * @var AttributeEntity[]
	 */
	protected $attribute;

	/**
	 *
	 * @var WhiteSpaceAttrsEntity[]
	 */
	protected $whiteSpaceAttrs;

}