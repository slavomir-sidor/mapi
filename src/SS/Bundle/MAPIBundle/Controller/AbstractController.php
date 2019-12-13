<?php
namespace SS\Bundle\MAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as SymfonyAbstractController;
use Symfony\Component\HttpKernel\KernelInterface;

abstract class AbstractController extends SymfonyAbstractController
{

	private $appKernel;

	/**
	 *
	 * @return \Symfony\Component\HttpKernel\KernelInterface
	 */
	protected function getAppKernel()
	{
		return $this->appKernel;
	}

	/**
	 *
	 * @param \Symfony\Component\HttpKernel\KernelInterface $appKernel
	 */
	protected function setAppKernel( $appKernel )
	{
		$this->appKernel = $appKernel;
	}

	public function __construct( KernelInterface $appKernel )
	{
		$this->setAppKernel($appKernel);
	}

	public function getRequest()
	{
		return $this->container->get( 'request_stack' )->getCurrentRequest();
	}
}

