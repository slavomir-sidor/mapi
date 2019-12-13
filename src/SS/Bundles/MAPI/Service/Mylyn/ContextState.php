<?php
/**
 * SS MAPI Bundle Mylyn Context State
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Service\Mylyn;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @XmlRoot("ContextState")
 */
class ContextState
{

	/**
	 * @Type("SS\MAPIBundle\Service\Mylyn\MylynEditors")
	 * @SerializedName("org.eclipse.mylyn.context.ui.editors")
	 *
	 * @var MylynEditors
	 */
	protected $mylynEditors;

	/**
	 *
	 */
	public function toArray()
	{

	}
}