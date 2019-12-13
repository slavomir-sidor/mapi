<?php

/**
 * SS MAPI Bundle XML Schema Entity SequenceEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

use SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;
use Doctrine\DBAL\Schema\Sequence;

class SequenceEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity SequenceEntity Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'sequence';

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

	protected $cs;

	/**
	 *
	 * @var SequenceEntity[]
	 */
	protected $sequence;

	/**
	 *
	 * @var AnyEntity[]
	 */
	protected $any;

	/**
	 *
	 * @var ChoiceEntity[]
	 */
	protected $choice;

}