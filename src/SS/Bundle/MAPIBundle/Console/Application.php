<?php
/**
 * SS MAPI Bundle Console Application
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\Console;

use Symfony\Bundle\FrameworkBundle\Console\Application as SymfonyApplication;
use Symfony\Component\HttpKernel\KernelInterface;

class Application extends SymfonyApplication
{

	/**
	 *
	 * @var string
	 *      http://patorjk.com/software/taag/#p=display&h=2&v=1&f=Slant&t=MicroAPI%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%0A
	 */
	private static $logo = '

    __  ____                 ___    ____  ____
   /  |/  (_)_____________  /   |  / __ \/  _/
  / /|_/ / / ___/ ___/ __ \/ /| | / /_/ // /  
 / /  / / / /__/ /  / /_/ / ___ |/ ____// /   
/_/  /_/_/\___/_/   \____/_/  |_/_/   /___/   
                                              
                                              ';

	/**
	 * Constructs SS MAPI Bundle Application Console
	 *
	 * @param KernelInterface $kernel
	 * @param string $name
	 * @param string $version
	 */
	public function __construct( KernelInterface $kernel, $name = 'MicroAPI',
		$version = '${project.version}' )
	{
		parent::__construct( $kernel );

		$this->setName( $name );
		$this->setVersion( $version );
	}

	/**
	 *
	 * {@inheritdoc}
	 *
	 * @see \Symfony\Component\Console\Application::getHelp()
	 */
	public function getHelp()
	{
		return self::$logo . parent::getHelp();
	}
}