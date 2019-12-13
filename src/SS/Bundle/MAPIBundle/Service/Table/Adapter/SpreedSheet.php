<?php
namespace SS\Bundle\MAPIBundle\Service\Table\Adapter;

use SS\Bundle\MAPIBundle\Service\Table\Table;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table as STable;
use Symfony\Component\Console\Helper\TableStyle;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Helper\TableCell;

class SpreedSheet implements IAdapter
{

	/**
	 *
	 * @var string
	 */
	const name = 'SpreedSheet';

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \SS\Bundle\MAPIBundle\Service\Table\Adapter\IAdapter::write()
	 */
	public function write(Table $table, OutputInterface $output)
	{}
}