<?php
/**
 * SS MAPI Bundle Console Controller
 *
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Controller;

class APIModelController extends AbstractController
{

	/**
	 */
	public function index()
	{
		$method = $this->getMethod();
		$version = $this->getVersion();
		$model = $this->getModel();
		$operation = $this->getMethod();
	}

	protected function getModel()
	{}

	protected function getOperation()
	{}

	protected function getMethod()
	{}

	protected function getType()
	{}

	protected function getVersion()
	{}
}