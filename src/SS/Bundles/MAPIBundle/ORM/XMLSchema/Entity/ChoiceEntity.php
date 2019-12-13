<?php

/**
 * SS MAPI Bundle XML Schema Entity ChoiceEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;

class ChoiceEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity ChoiceEntity Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'choice';

	/**
	 *
	 * @var AnnotationEntity[]
	 */
	protected $annotation;

	/**
	 *
	 * @var ElementEntity[]
	 */
	protected $element;

	/**
	 *
	 * @var GroupEntity[]
	 */
	protected $group;

	/**
	 *
	 * @var AnyAttributeEntity[]
	 */
	protected $any;

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

}