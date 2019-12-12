<?php

/**
 * SK ITC Bundle Default Controller
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Controller;

use Symfony\Component\Finder\Finder;

class FilesystemController extends AbstractController
{

	protected $excludeDirs = array(
		'.git',
		'target',
		'var'
	);

	public function index()
	{
		return $this->render( 'SKITCBundle:Filesystem:index.html.twig', $this->getModel() );
	}

	public function toolbar()
	{
		return $this->render( 'SKITCBundle:Filesystem:toolbar.html.twig', $this->getModel() );
	}

	public function workspace()
	{
		return $this->render( 'SKITCBundle:Filesystem:workspace.html.twig', $this->getModel() );
	}

	public function create()
	{
		return $this->render( 'SKITCBundle:Filesystem:Create/index.html.twig', $this->getModel() );
	}

	public function edit()
	{
		return $this->render( 'SKITCBundle:Filesystem:Edit/index.html.twig', $this->getModel() );
	}

	public function save()
	{
		return $this->render( 'SKITCBundle:Filesystem:Save/index.html.twig', $this->getModel() );
	}

	public function detail()
	{
		$model = $this->getModel();
		return $this->render( 'SKITCBundle:Filesystem:Detail/index.html.twig', $model );
	}

	public function delete()
	{
		return $this->render( 'SKITCBundle:Filesystem:Delete/index.html.twig', $this->getModel() );
	}

	/**
	 *
	 * @return multitype:\SplFileInfo \Symfony\Component\Finder\Finder
	 *         \Symfony\Component\HttpFoundation\mixed
	 */
	protected function getModel()
	{
		// $model = new Model();
		$model = array();
		$request = $this->getRequest();
		$model['request'] = $request;
		$model['currentRoute'] = $request->get( '_route' );

		$path = $request->get( 'path', '' );
		$rootDir = $this->getAppKernel()->getProjectDir();
		$rootDirInfo = new \SplFileInfo( $rootDir );

		$filesystemPath = sprintf( "%s/%s", $rootDirInfo->getPath(), $path );
		$filesystemInfo = new \SplFileInfo( $filesystemPath );
		// $pathInfo->getPathname()
		$model['path'] = $path;
		$model['filesystemPath'] = $filesystemPath;
		$model['filesystemPathInfo'] = $filesystemInfo;


		if( is_dir( $filesystemPath ) )
		{
			$model['finder'] = $this->getFinder( $filesystemPath );
		}
		else
		{
			$source = file_get_contents( $filesystemPath );
			$extention = $filesystemInfo->getExtension();
			$language = $filesystemInfo->getExtension();
			switch( $language )
			{
				case '':
					{
						$language = "txt";
						break;
					}
				case 'js':
					{
						$language = "javascript";
						break;
					}
				case 'yml':
					{
						$language = "yaml";
						break;
					}
				case 'xmi':
				case 'xsd':
				case 'wsdl':
					{
						$language = "xml";
						break;
					}
			}
			$geshi = new \GeSHi( $source, $language );

			$model['highlight'] = $geshi->parse_code();
			$model['source'] = $source;
		}

		return array(
			'model' => $model
		);
	}

	/**
	 *
	 * @param string $path
	 * @return \Symfony\Component\Finder\Finder
	 */
	protected function getFinder( $path )
	{
		$finder = new Finder();

		$finder->ignoreDotFiles( TRUE );
		$finder->depth( 0 );
		$finder->exclude( $this->excludeDirs );

		if( ! is_dir( $path ) )
		{
			return $finder;
		}
		$finder->in( $path );

		return $finder;
	}
}