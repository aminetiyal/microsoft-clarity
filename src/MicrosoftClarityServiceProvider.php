<?php

namespace AmineTiyal\MicrosoftClarity;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AmineTiyal\MicrosoftClarity\Commands\MicrosoftClarityCommand;

class MicrosoftClarityServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('microsoft-clarity')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_microsoft-clarity_table')
            ->hasCommand(MicrosoftClarityCommand::class);
    }
}
