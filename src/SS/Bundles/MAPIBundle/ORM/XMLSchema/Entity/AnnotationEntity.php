<?php

/**
 * SS MAPI Bundle XML Schema Entity AnnotationEntity
 *
 * @licence GNU GPL
 * 
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\ORM\XMLSchema\Entity;

use SS\MAPIBundle\ORM\XMLSchema\Entity;

class AnnotationEntity extends Entity
{

	/**
	 * SS MAPI Bundle XML Schema Entity AnnotationEntity Name
	 *
	 * @var string
	 */
	protected $elementTagName = 'annotation';

	/**
	 *
	 * @var AppinfoEntity[]
	 */
	protected $appinfo;

	/**
	 *
	 * @var DocumentationEntity[]
	 */
	protected $documentation;

}