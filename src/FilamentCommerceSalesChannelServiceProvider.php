<?php

namespace JeffersonGoncalves\FilamentCommerce\SalesChannel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceSalesChannelServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-sales-channel';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
