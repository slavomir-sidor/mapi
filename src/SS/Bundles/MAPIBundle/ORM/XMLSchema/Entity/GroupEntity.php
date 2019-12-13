<?php

/**
 * SS MAPI Bundle XML Schema GroupEntity Field
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;

class GroupEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity GroupEntity Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'group';

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

}