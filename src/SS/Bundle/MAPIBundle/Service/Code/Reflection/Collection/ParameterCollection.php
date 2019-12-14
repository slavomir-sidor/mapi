<?php
namespace SS\Bundle\MAPIBundle\Service\Code\Reflection\Collection;

use SS\Bundle\MAPIBundle\Service\Code\Collection;
use TokenReflection\Php\ReflectionParameter;

class ParameterCollection extends Collection
{

	/**
	 *
	 * @var ReflectionParameter[]
	 */
	protected $elements;

	/**
	 *
	 * @var array $columns
	 */
	protected $columns = array(
		'Class'=>'Class Name',
		'Operation'=>'Operation',
		'Parameter'=>'Parameter',
		'Type'=>'Type',
		'Default'=>'Default',
		'DocBlock'=>'DocBlock'
	);

	/**
	 *
	 * @return array
	 */
	public function toArray()
	{
		$rows = [];

		/* @var $reflection  ReflectionParameter */
		foreach( $this->getIterator() as $reflection )
		{
			$row = [];

			$row['Class'] = $reflection->getDeclaringClassName();
			$row['Operation'] = $reflection->getDeclaringFunctionName();
			$row['Parameter'] = $reflection->getName();
			$row[ 'Type' ] ="";//self::getParameterType($reflection);
			//$reflection->getOriginalTypeHint();

			if($reflection->isOptional())
			{
				//$row[ 'Default' ] = is_array( $reflection->getDefaultValue() ) ? 'array' : $reflection->getDefaultValue();
			}
			$row[ 'Default' ]="";
			$row[ 'DocBlock' ]=$reflection->getDocComment();

			$rows[] = $row;
		}

		return $rows;
	}
}