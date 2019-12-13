<?php
/**
 * SS MAPI Bundle Command Code Reflection Classes
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Command\Code\Generator\DocBlock;

class ClassCommand extends DocBlockCommand
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
			->getClasses()
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
		if( NULL === $this->rows )
		{
			$this->setRows( $this->getReflection()
				->getClasses()
				->toArray() );
		}

		return $this->rows;
	}
}