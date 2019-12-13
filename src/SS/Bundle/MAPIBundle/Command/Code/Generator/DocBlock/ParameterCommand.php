<?php
/**
 * SS MAPI Bundle Command Code Reflection Operations Attributes
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Command\Code\Generator\DocBlock;

class ParameterCommand extends DocBlockCommand
{

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SS\Bundle\MAPIBundle\Command\TableCommand::getColumns()
	 */
	protected function getColumns()
	{
		return $this->getReflection()
			->getParameters()
			->getColumns();
	}

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SS\Bundle\MAPIBundle\Command\TableCommand::getRows()
	 */
	protected function getRows()
	{
		if( null === $this->rows )
		{
			$this->setRows( $this->getReflection()
				->getParameters()
				->toArray() );
		}

		return $this->rows;
	}
}