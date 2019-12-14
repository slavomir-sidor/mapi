<?php
namespace SS\Bundle\MAPIBundle\Service\Code\Reflection\Collection;

use SS\Bundle\MAPIBundle\Service\Code\Collection;
use TokenReflection\ReflectionNamespace;

class PackageCollection extends Collection
{

	/**
	 *
	 * @var ReflectionNamespace[]
	 */
	protected $elements;

	/**
	 *
	 * @var array $columns
	 */
	protected $columns = array('Namespace','DocBlock'
	);

	/**
	 *
	 * @return array
	 */
	public function toArray()
	{
		$rows = [];

		/* @var $package ReflectionNamespace */
		foreach( $this->getIterator() as $package )
		{
			$row = [];
			$row['Namespace'] = $package->getName();
			$row['DocBlock'] = "Package ".implode(" ", explode("\\", $package->getName()));
			$rows[] = $row;
		}

		return $rows;
	}
}