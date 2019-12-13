<?php
/**
 * SS MAPI Bundle Command Code Reflection Attributes
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Command\Code\Generator\DocBlock;

class AttributeCommand extends DocBlockCommand
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
			->getAttributes()
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
				->getAttributes()
				->toArray() );
		}

		return $this->rows;
	}
}