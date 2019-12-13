<?php
namespace SS\Bundle\MAPIBundle\Service\Table\Adapter;

use Symfony\Component\Console\Output\OutputInterface;
use SS\Bundle\MAPIBundle\Service\Table\Table;

interface IAdapter
{

	/**
	 * Write Table
	 *
	 * @param Table $table
	 * @param OutputInterface $output
	 */
	public function write( Table $table, OutputInterface $output );
}