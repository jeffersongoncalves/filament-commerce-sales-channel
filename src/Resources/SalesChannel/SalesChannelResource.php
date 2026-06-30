<?php

namespace JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel;

use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\SalesChannel\Models\SalesChannel;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\CommerceSalesChannelPlugin;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Pages\CreateSalesChannel;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Pages\EditSalesChannel;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Pages\ListSalesChannel;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Schemas\SalesChannelForm;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Tables\SalesChannelTable;

class SalesChannelResource extends Resource
{
    protected static ?string $model = SalesChannel::class;

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceSalesChannelPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-sales-channel.navigation_group', 'Commerce — Configuration');
        }
    }

    public static function form(Form $form): Form
    {
        return SalesChannelForm::configure($form);
    }

    public static function table(Table $table): Table
    {
        return SalesChannelTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSalesChannel::route('/'),
            'create' => CreateSalesChannel::route('/create'),
            'edit' => EditSalesChannel::route('/{record}/edit'),
        ];
    }
}
