<?php

namespace JeffersonGoncalves\FilamentCommerce\SalesChannel;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Concerns\HasCommerceSalesChannelPluginConfig;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\SalesChannelResource;

class CommerceSalesChannelPlugin implements Plugin
{
    use HasCommerceSalesChannelPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-sales-channel';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'sales-channel' => SalesChannelResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
