<?php

/**
 * SS MAPI Bundle DTD Annotation
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\DTD;

class Annotation
{

	/**
	 * SS MAPI Bundle DTD Annotation Content
	 *
	 * @var string
	 */
	protected $content;

	/**
	 * Constructs SS MAPI Bundle DTD Annotation Content
	 *
	 * @param string $content
	 *        	SS MAPI Bundle DTD Annotation Content
	 */
	public function __construct( 
		$content = "" )
	{

		$this->setContent( $content );
	
	}

	/**
	 * Creates SS MAPI Bundle DTD Annotation
	 *
	 * @param string $content
	 *        	SS MAPI Bundle DTD Annotation Content
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Annotation
	 */
	public static function create( 
		$content )
	{

		return new self( $content );
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Annotation Content
	 *
	 * @return string
	 */
	public function getContent()
	{

		return $this->content;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Annotation Content
	 *
	 * @param string $content        	
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Annotation
	 */
	public function setContent( 
		$content )
	{

		$this->content = trim( $content );
		return $this;
	
	}

}