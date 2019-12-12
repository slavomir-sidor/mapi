<?php

/**
 * SK ITCBundle Code Abstract Generator
 *
 * @licence GNU GPL
 *
 * @author Slavomir <slavomir.sidor@gmail.com>
 */
namespace SK\ITCBundle\Service\Code\Generator;

use SK\ITCBundle\Service\Code\Reflection;
use Symfony\Component\HttpKernel\Log\Logger;

class ConfigurationCodeGenerator extends CodeGenerator
{
    /**
     *
     * @var Reflection
     */
    protected $reflection;

    /**
     *
     * @param Logger $logger
     * @param Reflection $reflection
     */
    public function __construct(Logger $logger, Reflection $reflection)
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