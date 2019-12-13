<?php

/**
 * SS MAPI Bundle XML Schema Entity Complex Content
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

use SS\Bundle\MAPIBundle\ORM\XMLSchema\Entity;

class ComplexContentEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity Complex Content Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'complexContent';

	/**
	 *
	 * @var AnnotationEntity[]
	 */
	protected $annotation;

	/**
	 *
	 * @var RestrictionEntity[]
	 */
	protected $restriction;

	/**
	 *
	 * @var ExtensionEntity[]
	 */
	protected $extension;

}