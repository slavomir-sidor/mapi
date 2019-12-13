<?php
/**
 * SS MAPI Bundle Command Code Reflection Namespaces
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Command\Code\Reflection;

class PackageCommand extends ReflectionCommand
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
			->getPackages()
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
				->getPackages()
				->toArray() );
		}

		return $this->rows;
	}
}