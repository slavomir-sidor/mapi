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
	private const CONFIG_EXTS = '.{php,xml}';

	/**
	 *
	 * {@inheritdoc}
	 * @see \Symfony\Component\HttpKernel\KernelInterface::registerBundles()
	 */
	public function registerBundles(): iterable
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
	public function getProjectDir(): string
	{
		$projectDir = \dirname( __DIR__, 3 );
		return $projectDir;
	}

	/**
	 *
	 * @param ContainerBuilder $container
	 * @param LoaderInterface $loader
	 */
	protected function configureContainer( ContainerBuilder $container, LoaderInterface $loader ): void
	{
		$container->addResource( new FileResource( $this->getProjectDir() . '/config/bundles.php' ) );

		$container->setParameter( 'container.dumper.inline_class_loader',
			\PHP_VERSION_ID < 70400 || ! ini_get( 'opcache.preload' ) );

		$container->setParameter( 'container.dumper.inline_factories', true );

		$confDir = $this->getProjectDir() . '/config';

		$loader->load( $confDir . '/{packages}' . self::CONFIG_EXTS, 'glob' );
		$loader->load( $confDir . '/' . $this->environment . '/{packages}' . self::CONFIG_EXTS, 'glob' );
	}

	/**
	 *
	 * @param RouteCollectionBuilder $routes
	 */
	protected function configureRoutes( RouteCollectionBuilder $routes ): void
	{
		$confDir = $this->getProjectDir() . '/config';
		$routes->import( $confDir . '/routes' . self::CONFIG_EXTS, '/', 'glob' );
		$routes->import( $confDir . '/' . $this->environment . '/routes' . self::CONFIG_EXTS, '/', 'glob' );
	}
}
