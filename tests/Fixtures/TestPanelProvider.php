<?php

namespace JeffersonGoncalves\Filament\CcpaVendors\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\Filament\CcpaVendors\CcpaVendorsPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CcpaVendorsPlugin::make(),
            ]);
    }
}
