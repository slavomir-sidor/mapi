<?php
/**
 * SS MAPI Bundle Mylyn Editor
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 *
 */
namespace SS\MAPIBundle\Service\Mylyn;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

class Editor
{

	/**
	 * @Type("SS\MAPIBundle\Service\Mylyn\Input")
	 * @SerializedName("input")
	 *
	 * @var Input
	 */
	protected $input;

	/**
	 * @XmlAttribute
	 * @Type("integer")
	 */
	protected $id;

	/**
	 * @XmlAttribute
	 * @Type("string")
	 */
	protected $name;

	/**
	 * @XmlAttribute
	 * @Type("string")
	 */
	protected $partName;

	/**
	 * @XmlAttribute
	 * @Type("string")
	 */
	protected $title;

	/**
	 * @XmlAttribute
	 * @Type("string")
	 */
	protected $tooltip;
}