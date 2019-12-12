<?php
/**
 * SK ITC Bundle Console Controller
 *
 * @licence SK ITClou
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Controller;

class APIModelController extends AbstractController
{

	/**
	 *
	 * @var unknown
	 */
	private $model;

	/**
	 *
	 */
	public function indexAction()
	{
		$method=$this->getMethod();
		$version=$this->getVersion();
		$model=$this->getModel();
		$operation=$this->getMethod();
	}

	protected function getModel()
	{
	}

	protected function getOperation()
	{}

	protected function getMethod()
	{}

	protected function getType()
	{}

	protected function getVersion()
	{}
}