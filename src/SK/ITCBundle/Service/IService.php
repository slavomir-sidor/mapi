<?php
namespace SK\ITCBundle\Service\IService;

use Psr\Log\LoggerInterface;

interface IService
{

	/**
	 *
	 * @return LoggerInterface
	 */
	public function getLogger();

	/**
	 *
	 * @param LoggerInterface $logger
	 */
	public function setLogger( LoggerInterface $logger );
}