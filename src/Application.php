<?php

declare(strict_types=1);

namespace TweakFlux;

use Composer\InstalledVersions;
use Symfony\Component\Console\Application as SymfonyApplication;
use TweakFlux\Commands\ApplyCommand;
use TweakFlux\Commands\BoostCommand;
use TweakFlux\Commands\CreateCommand;
use TweakFlux\Commands\ListCommand;
use TweakFlux\Commands\UpdateCommand;

final class Application extends SymfonyApplication
{
    public function __construct()
    {
        $version = InstalledVersions::getPrettyVersion('joshcirre/tweakflux') ?? 'dev';

        parent::__construct('TweakFlux', $version);

        $this->addCommand(new ListCommand());
        $this->addCommand(new ApplyCommand());
        $this->addCommand(new CreateCommand());
        $this->addCommand(new BoostCommand());
        $this->addCommand(new UpdateCommand());
    }
}
