<?php

namespace JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\SalesChannelResource;

class EditSalesChannel extends EditRecord
{
    protected static string $resource = SalesChannelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
