<?php

/**
 * SS MAPI Bundle Code Abstract Generator
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SS\MAPIBundle\Service\Code\Generator;

use SS\MAPIBundle\Service\Code\Reflection;
use Psr\Log\LoggerInterface;

class ConfigurationCodeGenerator extends CodeGenerator
{
    /**
     *
     * @var Reflection
     */
    protected $reflection;

    /**
     *
     * @param LoggerInterface $logger
     * @param Reflection $reflection
     */
    public function __construct(LoggerInterface $logger, Reflection $reflection)
    {
        parent::__construct ( $logger );

        $this->setReflection ( $reflection );
    }

    /**
     *
     * @return Reflection
     */
    public function getReflection()
    {
        return $this->reflection;
    }

    /**
     *
     * @param Reflection $reflection
     */
    public function setReflection(Reflection $reflection)
    {
        $this->reflection = $reflection;
        return $this;
    }
}