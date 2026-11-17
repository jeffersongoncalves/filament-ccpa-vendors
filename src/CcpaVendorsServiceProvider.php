<?php

namespace JeffersonGoncalves\Filament\CcpaVendors;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class CcpaVendorsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-ccpa-vendors';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
