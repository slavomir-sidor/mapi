<?php
/**
 * SS MAPI Bundle Command Code Reflection Files
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Command\Code\Reflection;

class FileCommand extends ReflectionCommand
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
			->getFiles()
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
				->getFiles()
				->toArray() );
		}

		return $this->rows;
	}
}