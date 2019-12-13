<?php
/**
 * SK ITC Monitor Bundle Dependency Injection Configuration
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 *
 */
namespace SS\MonitorBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{

	/**
	 *
	 * {@inheritdoc}
	 *
	 */
	public function getConfigTreeBuilder()
	{
		$treeBuilder = new TreeBuilder();
		$rootNode = $treeBuilder->root( 'monitor' );
		$rootNode->children()
			->scalarNode( 'token' )
			->end()
			->scalarNode( 'url' )
			->end()
			->end();
		return $treeBuilder;
	}
}