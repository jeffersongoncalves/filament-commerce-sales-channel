<?php

namespace JeffersonGoncalves\FilamentCommerce\SalesChannel\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\CommerceSalesChannelPlugin;

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
                CommerceSalesChannelPlugin::make(),
            ]);
    }
}
