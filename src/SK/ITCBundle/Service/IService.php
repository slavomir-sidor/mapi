<?php

namespace SK\ITCBundle\Service\IService;

use Symfony\Component\HttpKernel\Log\Logger;

interface IService
{
    /**
     *
     * @return the Logger
     */
    public function getLogger();

    /**
     *
     * @param Logger $logger
     */
    public function setLogger(Logger $logger);
}