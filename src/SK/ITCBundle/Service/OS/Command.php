<?php
namespace SK\ITCBundle\Service\OS;

use Symfony\Component\Process\Exception\ProcessFailedException;
use SK\ITCBundle\Service\AbstractService;
use Symfony\Component\HttpKernel\Log\Logger;
use Symfony\Component\Process\Process;

class Command extends AbstractService
{

	/**
	 * Prefix
	 *
	 * @var string
	 */
	protected $prefix;

	/**
	 *
	 * @var []
	 */
	protected $arguments;

	/**
	 *
	 * @var Process
	 */
	protected $process;

	/**
	 */
	public function __construct( Logger $logger, $prefix, $arguments )
	{
		parent::__construct( $logger );

		$this->setPrefix( $prefix );
		$this->setArguments( $arguments );
	}

	/**
	 *
	 * @throws ProcessFailedException
	 */
	public function run()
	{
		$result = $this->getProcess()->run();
		return $result;
	}

	/**
	 *
	 * @return string
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}

	/**
	 *
	 * @param string $prefix
	 */
	public function setPrefix( $prefix )
	{
		$this->prefix = $prefix;
		return $this;
	}

	/**
	 *
	 * @return []
	 */
	public function getArguments()
	{
		return $this->arguments;
	}

	/**
	 *
	 * @param [] $arguments
	 */
	public function setArguments( array $arguments )
	{
		$this->arguments = $arguments;
		return $this;
	}

	/**
	 *
	 * @return Process
	 */
	public function getProcess()
	{
		if( null === $this->process )
		{
			$cmd = [$this->getPrefix()];
			$cmd = array_merge( $cmd, $this->getArguments() );
			$this->setProcess( new Process( $cmd ) );
		}
		return $this->process;
	}

	/**
	 *
	 * @param Process $process
	 */
	public function setProcess( Process $process )
	{
		$this->process = $process;
		return $this;
	}
}