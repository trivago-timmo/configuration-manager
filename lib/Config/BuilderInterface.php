<?php

namespace Magium\Configuration\Config;

interface BuilderInterface
{

    public function build($context = Config::CONTEXT_DEFAULT, Config $config = null);

}
