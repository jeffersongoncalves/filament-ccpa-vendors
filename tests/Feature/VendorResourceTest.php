<?php

use JeffersonGoncalves\CcpaVendors\Enums\VendorRole;
use JeffersonGoncalves\CcpaVendors\Models\Vendor;
use JeffersonGoncalves\Filament\CcpaVendors\CcpaVendorsPlugin;
use JeffersonGoncalves\Filament\CcpaVendors\Resources\Vendors\Pages\CreateVendor;
use JeffersonGoncalves\Filament\CcpaVendors\Resources\Vendors\Pages\EditVendor;
use JeffersonGoncalves\Filament\CcpaVendors\Resources\Vendors\Pages\ListVendors;
use JeffersonGoncalves\Filament\CcpaVendors\Resources\Vendors\VendorResource;
use JeffersonGoncalves\Filament\CcpaVendors\Tests\Fixtures\TestUser;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
});

it('creates a service provider with its contract checklist', function () {
    Livewire::test(CreateVendor::class)
        ->fillForm([
            'name' => 'Stripe',
            'role' => 'service_provider',
            'risk' => 'high',
            'business_purpose' => 'Payment processing',
            'dpa_signed_at' => '2026-01-10',
            'dpa_checklist' => ['no_sale_or_sharing', 'specified_purpose'],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Vendor::sole())
        ->role->toBe(VendorRole::ServiceProvider)
        ->business_purpose->toBe('Payment processing')
        ->dpa_checklist->toBe(['no_sale_or_sharing' => true, 'specified_purpose' => true]);
});

it('requires a name and a role', function () {
    Livewire::test(CreateVendor::class)
        ->fillForm(['name' => '', 'role' => null])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required', 'role' => 'required']);
});

it('lists vendors with their issues', function () {
    $vendor = Vendor::create(['name' => 'Mailer', 'role' => VendorRole::ServiceProvider]);

    Livewire::test(ListVendors::class)
        ->assertCanSeeTableRecords([$vendor])
        ->assertSee('No signed contract');
});

it('edits the checklist, keeping the stored map', function () {
    $vendor = Vendor::create(['name' => 'Ad network', 'role' => VendorRole::ThirdParty, 'dpa_signed_at' => now(), 'dpa_checklist' => ['limited_purposes' => true]]);

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])
        ->assertFormSet(['dpa_checklist' => ['limited_purposes']])
        ->assertSee('Limits the use to the specified purposes of the sale or sharing')
        ->assertDontSee('Contractor certifies')
        ->fillForm(['dpa_checklist' => ['limited_purposes', 'same_protection']])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($vendor->fresh()->dpa_checklist)->toBe(['limited_purposes' => true, 'same_protection' => true]);
});

it('reviews, terminates and confirms the data return', function () {
    $vendor = Vendor::create(['name' => 'Old CRM', 'role' => VendorRole::Contractor]);

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('review');
    expect($vendor->fresh()->reviewed_at)->not->toBeNull();

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('terminate');
    expect($vendor->fresh()->terminated_at)->not->toBeNull();

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('dataReturned');
    expect($vendor->fresh()->issues())->toBe([]);
    expect($vendor->fresh()->data_returned_at)->not->toBeNull();
});

it('applies the fluent plugin options', function () {
    CcpaVendorsPlugin::get()->navigationGroup('CCPA')->slug('suppliers');

    expect(VendorResource::getNavigationGroup())->toBe('CCPA')
        ->and(VendorResource::getSlug())->toBe('suppliers');
});
