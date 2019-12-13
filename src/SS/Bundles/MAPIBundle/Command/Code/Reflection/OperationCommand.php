<?php
/**
 * SS MAPI Bundle Command Code Reflection Operations
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Command\Code\Reflection;

class OperationCommand extends ReflectionCommand
{

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SS\MAPIBundle\Command\TableCommand::getColumns()
	 */
	protected function getColumns()
	{
		return $this->getReflection()
			->getOperations()
			->getColumns();
	}

	/**
	 *
	 * {@inheritDoc}
	 *
	 * @see \SS\MAPIBundle\Command\TableCommand::getRows()
	 */
	protected function getRows()
	{
		if( null === $this->rows )
		{
			$this->setRows( $this->getReflection()
				->getOperations()
				->toArray() );
		}

		return $this->rows;
	}
}