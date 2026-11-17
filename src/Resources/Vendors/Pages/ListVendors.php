<?php

namespace JeffersonGoncalves\Filament\CcpaVendors\Resources\Vendors\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\Filament\CcpaVendors\Resources\Vendors\VendorResource;

class ListVendors extends ListRecords
{
    protected static string $resource = VendorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
