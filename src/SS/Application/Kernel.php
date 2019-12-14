<?php
/**
 * SS Application Kernel
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Application;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class Kernel extends BaseKernel
{
	use MicroKernelTrait;

	/**
	 *
	 * @var string
	 */
	private const CONFIG_EXTS = '.{php,xml,yaml}';

	/**
	 *
	 * {@inheritdoc}
	 * @see \Symfony\Component\HttpKernel\KernelInterface::registerBundles()
	 */
	public function registerBundles()
	{
		$contents = require $this->getProjectDir() . '/config/bundles.php';

		foreach( $contents as $class => $envs )
		{
			if( $envs[$this->environment] ?? $envs['all'] ?? false)
			{
				yield new $class();
			}
		}
	}

	/**
	 *
	 * {@inheritdoc}
	 * @see \Symfony\Component\HttpKernel\Kernel::getProjectDir()
	 */
	public function getProjectDir()
	{
		$projectDir = \dirname( __DIR__, 3 );
		return $projectDir;
	}
	
	protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader)
	{
		$container->addResource(new FileResource($this->getProjectDir().'/config/bundles.php'));
		$container->setParameter('container.dumper.inline_class_loader', \PHP_VERSION_ID < 70400 || !ini_get('opcache.preload'));
		$container->setParameter('container.dumper.inline_factories', true);
		$container->setParameter('ss.mapibundle.api.version', "1.1");
		$confDir = $this->getProjectDir().'/config';
		
		$loader->load($confDir.'/{packages}/*'.self::CONFIG_EXTS, 'glob');
		$loader->load($confDir.'/{packages}/'.$this->environment.'/*'.self::CONFIG_EXTS, 'glob');
		$loader->load($confDir.'/{services}'.self::CONFIG_EXTS, 'glob');
		$loader->load($confDir.'/{services}_'.$this->environment.self::CONFIG_EXTS, 'glob');
	}
	
	protected function configureRoutes(RouteCollectionBuilder $routes)
	{
		$confDir = $this->getProjectDir().'/config';
		
		$routes->import($confDir.'/{routes}/'.$this->environment.'/*'.self::CONFIG_EXTS, '/', 'glob');
		$routes->import($confDir.'/{routes}/*'.self::CONFIG_EXTS, '/', 'glob');
		$routes->import($confDir.'/{routes}'.self::CONFIG_EXTS, '/', 'glob');
	}
}
