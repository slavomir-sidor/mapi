<?php

/**
 * SS MAPI Bundle DTD Entity External Public
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\Bundle\MAPIBundle\ORM\DTD\Entity;

use SS\Bundle\MAPIBundle\ORM\DTD\Entity;

class ExternalPublic extends Entity
{

	/**
	 * SS MAPI Bundle DTD Entity External Public Identifier
	 *
	 * @var string
	 */
	protected $identifier;

	/**
	 * SS MAPI Bundle DTD Entity External Public Uri
	 *
	 * @var string
	 */
	protected $uri;

	/**
	 * Gets SS MAPI Bundle DTD Entity External Public Identifier
	 *
	 * @return the string
	 */
	public function getIdentifier()
	{

		return $this->identifier;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Entity External Public Identifier
	 *
	 * @param string $identifier
	 *        	SS MAPI Bundle DTD Entity External Public Identifier
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Entity\ExternalPublic
	 */
	public function setIdentifier( 
		$identifier )
	{

		$this->identifier = $identifier;
		return $this;
	
	}

	/**
	 * Gets SS MAPI Bundle DTD Entity External Public Uri
	 *
	 * @return the string
	 */
	public function getUri()
	{

		return $this->uri;
	
	}

	/**
	 * Sets SS MAPI Bundle DTD Entity External Public Uri
	 *
	 * @param string $uri
	 *        	SS MAPI Bundle DTD Entity External Public Uri
	 * @see \SS\Bundle\MAPIBundle\ORM\DTD\Entity\ExternalPublic
	 */
	public function setUri( 
		$uri )
	{

		$this->uri = $uri;
		return $this;
	
	}

}