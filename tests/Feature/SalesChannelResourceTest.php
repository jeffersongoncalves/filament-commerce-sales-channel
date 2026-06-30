<?php

use JeffersonGoncalves\Commerce\SalesChannel\Models\SalesChannel;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Pages\CreateSalesChannel;
use JeffersonGoncalves\FilamentCommerce\SalesChannel\Resources\SalesChannel\Pages\ListSalesChannel;
use Livewire\Livewire;

it('renders the sales-channel list page', function () {
    SalesChannel::factory()->count(2)->create();

    Livewire::test(ListSalesChannel::class)->assertOk();
});

it('creates a sales-channel record through the panel', function () {
    Livewire::test(CreateSalesChannel::class)
        ->fillForm([
            'name' => 'Web',
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(SalesChannel::query()->count())->toBe(1);
});
