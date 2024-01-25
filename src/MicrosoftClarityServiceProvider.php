<?php

namespace AmineTiyal\MicrosoftClarity;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasViews();
    }

    public function boot()
    {
        parent::boot();

        Blade::directive('clarityScripts', function () {
            return "<?php echo view('microsoft-clarity::scripts'); ?>";
        });
    }
}
