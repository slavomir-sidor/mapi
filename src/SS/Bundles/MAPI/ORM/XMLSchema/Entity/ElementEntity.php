<?php

/**
 * SS MAPI Bundle XML Schema Entity ElementEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;

class ElementEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity Entity Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'element';

	/**
	 *
	 * @var AnnotationEntity[]
	 */
	protected $annotation;

	/**
	 *
	 * @var ComplexTypeEntity[]
	 */
	protected $complexType;

	/**
	 *
	 * @var KeyEntity[]
	 */
	protected $key;

}