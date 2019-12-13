<?php

/**
 * SS MAPI Bundle XML SchemaEntity Entity SchemaEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;
use Doctrine\Common\Annotations\Annotation\Attribute;

class SchemaEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML SchemaEntity Tag Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'schema';

	/**
	 *
	 * @var IncludeEntity[]
	 */
	protected $include;

	/**
	 *
	 * @var ImportEntity[]
	 */
	protected $import;

	/**
	 *
	 * @var RedefineEntity[]
	 */
	protected $redefine;

	/**
	 *
	 * @var AnnotationEntity[]
	 */
	protected $annotation;

	/**
	 *
	 * @var SimpleTypeEntity[]
	 */
	protected $simpleType;

	/**
	 *
	 * @var ComplexType[]
	 */
	protected $complexType;

	/**
	 *
	 * @var ElementEntity[]
	 */
	protected $element;

	/**
	 *
	 * @var AttributeEntity[]
	 */
	protected $attribute;

	/**
	 *
	 * @var AttributeGroupEntity[]
	 */
	protected $attributeGroup;

	/**
	 *
	 * @var GroupEntity[]
	 */
	protected $group;

	/**
	 *
	 * @var NotationEntity[]
	 */
	protected $notation;

	/**
	 *
	 * @var WhiteSpaceAttrsEntity
	 */
	protected $whiteSpaceAttrs;

}