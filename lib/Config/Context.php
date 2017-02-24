<?php

namespace Magium\Configuration\Config;

class Context
{

    protected $context;

    public function __construct($context = ConfigurationRepository::CONTEXT_DEFAULT)
    {
        $this->context = $context;
    }

    public function getContext()
    {
        return $this->context;
    }

    public function __toString()
    {
        return $this->context;
    }

}
