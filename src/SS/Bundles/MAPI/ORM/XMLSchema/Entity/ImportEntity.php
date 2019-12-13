<?php

/**
 * SS MAPI Bundle XML Schema Entity ImportEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;

class ImportEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity ImportEntity Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'import';

	/**
	 *
	 * @var AnnotationEntity[]
	 */
	protected $annotation;

}