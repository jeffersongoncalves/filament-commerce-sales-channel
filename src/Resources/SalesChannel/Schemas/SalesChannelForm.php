<?php

namespace JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Schemas;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;

class SalesChannelForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('description'),
                    ])->columns(2),
            ]);
    }
}
