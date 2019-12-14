<?php
namespace SS\Bundle\MAPIBundle\Service\Code\Reflection\Collection;

use SS\Bundle\MAPIBundle\Service\Code\Collection;
use TokenReflection\ReflectionProperty;

class AttributesCollection extends Collection
{

	/**
	 *
	 * @var ReflectionProperty[]
	 */
	protected $elements;

	/**
	 *
	 * @var array $columns
	 */
	protected $columns = array(
		'Accessibility',
		'Static',
		'Class',
		'Attribute',
		'Type',
		'Default',
		'DocBlock'
	);

	/**
	 *
	 * @return array
	 */
	public function toArray()
	{
		$rows = [];

		/* @var $reflection ReflectionProperty */
		foreach( $this->getIterator() as $reflection )
		{
			$row = [];

			$row['Accessibility'] = self::getAccessibility( $reflection );
			$row['Static'] = self::getStatic( $reflection );
			$row['Class'] = $reflection->getDeclaringClassName();
			$row['Attribute'] = $reflection->getName();
			$row['Type'] = self::getAttributeType( $reflection );
			$row['Default'] = self::getAttributeDefault($reflection);
			$row['DocBlock'] = $reflection->getDocComment();

			$rows[] = $row;
		}

		return $rows;
	}
}