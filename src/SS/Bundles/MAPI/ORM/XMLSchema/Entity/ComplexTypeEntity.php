<?php

/**
 * SS MAPI Bundle XML Schema Entity Complex Type
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;

class ComplexTypeEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity Complex Type Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'complexType';

	/**
	 *
	 * @var string
	 */
	protected $id;

	/**
	 *
	 * @var NCNameEntity
	 */
	protected $name;

	/**
	 * SS MAPI Bundle XML Schema
	 *
	 * @var BooleanEntity
	 */
	protected $abstract;

	/**
	 *
	 * @var ComplexDerivationSetEntity
	 */
	protected $final;

	/**
	 *
	 * @var ComplexDerivationSetEntity
	 */
	protected $block;

	/**
	 *
	 * @var boolean
	 */
	protected $mixed;

	/**
	 *
	 * @var ComplexTypeAttrsEntity
	 */
	protected $complexTypeAttrs;

	/**
	 *
	 * @var AnnotationEntity
	 */
	protected $annotation;

	/**
	 *
	 * @var SimpleContentEntity
	 */
	protected $simpleContent;

	/**
	 *
	 * @var ComplexContentEntity
	 */
	protected $complexContent;

	/**
	 *
	 * @var SequenceEntity[]
	 */
	protected $sequence;

	/**
	 *
	 * @var AttributeEntity[]
	 */
	protected $attribute;

	/**
	 *
	 * @var AnyAttributeEntity[]
	 */
	protected $anyAttribute;

}