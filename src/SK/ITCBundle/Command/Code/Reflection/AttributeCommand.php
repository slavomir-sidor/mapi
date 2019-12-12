<?php
/**
 * SK ITCBundle Command Code Reflection Attributes
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Command\Code\Reflection;

class AttributeCommand extends ReflectionCommand
{

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SK\ITCBundle\Command\TableCommand::getColumns()
	 */
	protected function getColumns()
	{
		return $this->getReflection()
			->getAttributes()
			->getColumns();
	}

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SK\ITCBundle\Command\TableCommand::getRows()
	 */
	protected function getRows()
	{
		if( null === $this->rows )
		{
			$this->setRows( $this->getReflection()
				->getAttributes()
				->toArray() );
		}

		return $this->rows;
	}
}