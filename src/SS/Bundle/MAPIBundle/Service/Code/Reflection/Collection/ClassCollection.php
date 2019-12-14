<?php
namespace SS\Bundle\MAPIBundle\Service\Code\Reflection\Collection;

use TokenReflection\Php\ReflectionClass;
use SS\Bundle\MAPIBundle\Service\Code\Collection;

class ClassCollection extends Collection
{

	/**
	 *
	 * @var ReflectionClass[]
	 */
	protected $elements;

	/**
	 *
	 * @var array
	 */
	protected $columns = array(
	 	'Class'=>'PHP Class',
		'Final'=>'Final',
		'Abstract'=>'Abstract',
		'Name'=>'Namespace Name',
		'Parent'=>'Parent',
		'Interface'=>'Implements Interfaces',
		'DocBlock'=>'Dock Block'
	);

	/**
	 *
	 * @return array
	 */
	public function getColumns()
	{
		return $this->columns;
	}

	/**
	 *
	 * @return array
	 */
	public function toArray()
	{
		$rows = [];

		/* @var $reflection ReflectionClass */
		foreach( $this->getIterator() as $reflection )
		{
			$row = [];

			$row['Class'] = self::getObjectType( $reflection );
			$row['Final'] = self::getFinal( $reflection );
			$row['Abstract'] = self::getAbstract( $reflection );
			$row['Name'] = $reflection->getName();
			$row['Parent'] = self::getParents( $reflection );
			$row['Interface'] = self::getInterfaces( $reflection );
			$row['DocBlock'] = $reflection->getDocComment();

			$rows[] = $row;
		}
		return $rows;
	}
}