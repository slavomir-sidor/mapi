<?php

/**
 * SS MAPI Bundle XML Schema Entity ExtensionEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;
use Doctrine\Common\Annotations\Annotation\Attribute;

class ExtensionEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity Simple Content Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'extension';

	/**
	 *
	 * @var AnnotationEntity[]
	 */
	protected $annotation;

	/**
	 *
	 * @var AllEntity[]
	 */
	protected $all;

	/**
	 *
	 * @var ChoiceEntity[]
	 */
	protected $choice;

	/**
	 *
	 * @var SequenceEntity[]
	 */
	protected $sequence;

	/**
	 *
	 * @var GroupEntity[]
	 */
	protected $group;

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
	 * @var AnyAttributeEntity[]
	 */
	protected $anyAttribute;

}
