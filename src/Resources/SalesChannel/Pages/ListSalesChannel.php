<?php

namespace JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\SalesChannelResource;

class ListSalesChannel extends ListRecords
{
    protected static string $resource = SalesChannelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
