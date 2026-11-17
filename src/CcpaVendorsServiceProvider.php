<?php

namespace JeffersonGoncalves\Filament\CcpaVendors;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaVendorsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-ccpa-vendors')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
