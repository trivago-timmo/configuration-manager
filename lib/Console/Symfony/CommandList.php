<?php

namespace Magium\Configuration\Console\Symfony;

use Magium\Configuration\Console\Command\ConfigurationBuild;
use Magium\Configuration\Console\Command\ConfigurationList;
use Magium\Configuration\Console\Command\ContextList;
use Magium\Configuration\Console\Command\CreateTable;
use Magium\Configuration\Console\Command\DefaultCommand;
use Symfony\Component\Console\Application;

class CommandList
{

    public function addCommands(Application $application)
    {
        $application->add(new DefaultCommand());
        $application->add(new ConfigurationBuild());
        $application->add(new ConfigurationList());
        $application->add(new ContextList());
        $application->add(new CreateTable());
        $application->setDefaultCommand(DefaultCommand::COMMAND);
    }

}
