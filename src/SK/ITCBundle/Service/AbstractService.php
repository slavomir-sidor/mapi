<?php
namespace SK\ITCBundle\Service;


use Psr\Log\LoggerInterface;

abstract class AbstractService
{

	/**
	 *
	 * @var LoggerInterface
	 */
	protected $logger;

	/**
	 * Constructs Console Bundle Code Generator
	 */
	public function __construct( LoggerInterface $logger )
	{
		$this->setLogger( $logger );
	}

	/**
	 *
	 * @return the Logger
	 */
	protected function getLogger()
	{
		return $this->logger;
	}

	/**
	 *
	 * @param LoggerInterface $logger
	 */
	protected function setLogger( LoggerInterface $logger )
	{
		$this->logger = $logger;
		return $this;
	}
}