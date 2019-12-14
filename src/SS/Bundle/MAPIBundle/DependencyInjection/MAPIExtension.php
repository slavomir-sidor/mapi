<?php
/**
 * SS Bundle MAPI
 *
 * @author Slavomir Sidor <slavomir.Sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Resource\FileExistenceResource;
use Symfony\Component\Console\Application;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Twig\Extension\ExtensionInterface;
use Twig\Extension\RuntimeExtensionInterface;
use Twig\Loader\LoaderInterface;

class MAPIExtension extends Extension
{

	/**
	 *
	 * {@inheritdoc}
	 * @see \Symfony\Component\DependencyInjection\Extension\ExtensionInterface::load()
	 */
	public function load( array $configs, ContainerBuilder $container )
	{
		$loader = new XmlFileLoader( $container,
			new FileLocator( __DIR__ . '/../Resources/config' ) );
		
		$loader->load( 'mapi.xml' );
		$loader->load( 'menu.xml' );
		$loader->load( 'services.xml' );

		foreach( $configs as $key => $config )
		{
			if( isset( $config['globals'] ) )
			{
				foreach( $config['globals'] as $name => $value )
				{
					if( \is_array( $value ) && isset( $value['key'] ) )
					{
						$configs[$key]['globals'][$name] = ['key' => $name,
							'value' => $value
						];
					}
				}
			}
		}
	}

	private function normalizeBundleName( string $name ): string
	{
		if( 'Bundle' === substr( $name, - 6 ) )
		{
			$name = substr( $name, 0, - 6 );
		}

		return $name;
	}

	/**
	 *
	 * {@inheritdoc}
	 * @see \Symfony\Component\DependencyInjection\Extension\Extension::getXsdValidationBasePath()
	 */
	public function getXsdValidationBasePath()
	{
		return __DIR__ . '/../Resources/config/schema';
	}

	/**
	 *
	 * {@inheritdoc}
	 * @see \Symfony\Component\DependencyInjection\Extension\Extension::getNamespace()
	 */
	public function getNamespace()
	{
		return 'http://symfony.com/schema/dic/mapi';
	}
}
