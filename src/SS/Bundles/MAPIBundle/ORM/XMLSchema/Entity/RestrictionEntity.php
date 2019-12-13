<?php

/**
 * SS MAPI Bundle XML Schema Entity RestrictionEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;

class RestrictionEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity RestrictionEntity Tag Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'restriction';

	/**
	 *
	 * @var AnyAttributeEntity[]
	 */
	protected $anyAttribute;

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
	 * @var EnumerationEntity[]
	 */
	protected $enumeration;

	/**
	 *
	 * @var AttributeEntity[]
	 */
	protected $attribute;

	/**
	 *
	 * @var GroupEntity[]
	 */
	protected $group;

	/**
	 *
	 * @var MinLengthEntity[]
	 */
	protected $minLength;

}