<?php
/**
 * SS MAPI Bundle Mylyn Editors
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 *
 */
namespace SS\Bundle\MAPIBundle\Service\Mylyn;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

class MonitoredWindowOpenEditors
{

	/**
	 * @Type("SS\Bundle\MAPIBundle\Service\Mylyn\Editor")
	 * @SerializedName("editor")
	 *
	 * @var Editor
	 */
	protected $editor;
}