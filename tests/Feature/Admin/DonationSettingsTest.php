<?php

use App\Livewire\Admin\DonationSettings;
use App\Models\DonationSetting;
use App\Models\User;
use Livewire\Livewire;

test('guests are redirected to the login page', function () {
    $response = $this->get(route('admin.donations.edit'));

    $response->assertRedirect(route('login'));
});

test('forbids users without the admin role', function () {
    $user = User::factory()->create();

    $response = $this->actingAs($user)->get(route('admin.donations.edit'));

    $response->assertForbidden();
});

test('allows administrators to view the donation settings form', function () {
    $admin = User::factory()->admin()->create();

    $response = $this->actingAs($admin)->get(route('admin.donations.edit'));

    $response->assertOk();
    $response->assertSee('إدارة التبرعات');
    $response->assertSee('المبلغ المراد جمعه');
});

test('loads the saved donation settings into the form', function () {
    $admin = User::factory()->admin()->create();
    DonationSetting::factory()->create([
        'account_number' => '5555555555',
        'target_amount' => 300000,
    ]);

    $this->actingAs($admin);

    Livewire::test(DonationSettings::class)
        ->assertSet('account_number', '5555555555')
        ->assertSet('target_amount', '300000');
});

test('administrators can update the donation settings', function () {
    $admin = User::factory()->admin()->create();
    $setting = DonationSetting::factory()->create([
        'account_name' => 'حساب قديم',
        'account_number' => '0000000000',
        'target_amount' => 1,
        'collected_amount' => 0,
        'currency' => 'ل.ت',
    ]);

    $this->actingAs($admin);

    Livewire::test(DonationSettings::class)
        ->set('account_name', 'حساب المجمع')
        ->set('account_number', '9876543210')
        ->set('target_amount', '250000')
        ->set('collected_amount', '75000')
        ->set('currency', 'ل.س')
        ->call('update')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('donation_settings', [
        'id' => $setting->id,
        'account_name' => 'حساب المجمع',
        'account_number' => '9876543210',
        'target_amount' => 250000,
        'collected_amount' => 75000,
        'currency' => 'ل.س',
    ]);
});

test('rejects invalid target amounts without saving', function (string $value, string $message) {
    $admin = User::factory()->admin()->create();
    $setting = DonationSetting::factory()->create(['target_amount' => 100000]);

    $this->actingAs($admin);

    Livewire::test(DonationSettings::class)
        ->set('target_amount', $value)
        ->call('update')
        ->assertHasErrors(['target_amount' => $message]);

    $this->assertDatabaseHas('donation_settings', [
        'id' => $setting->id,
        'target_amount' => 100000,
    ]);
})->with([
    'negative amount' => ['-1', 'المبلغ المراد جمعه لا يمكن أن يكون سالباً.'],
    'non-numeric amount' => ['abc', 'المبلغ المراد جمعه يجب أن يكون عدداً صحيحاً.'],
]);

test('requires every donation setting field with an Arabic message', function () {
    $admin = User::factory()->admin()->create();

    $this->actingAs($admin);

    Livewire::test(DonationSettings::class)
        ->set('account_name', '')
        ->set('account_number', '')
        ->set('target_amount', '')
        ->set('collected_amount', '')
        ->set('currency', '')
        ->call('update')
        ->assertHasErrors([
            'account_name' => 'حقل اسم الحساب مطلوب.',
            'account_number',
            'target_amount',
            'collected_amount',
            'currency',
        ]);
});

test('shows the sidebar donation link to administrators only', function () {
    $admin = User::factory()->admin()->create();
    $user = User::factory()->create();

    $this->actingAs($admin)->get(route('dashboard'))->assertSee('إدارة التبرعات');
    $this->actingAs($user)->get(route('dashboard'))->assertDontSee('إدارة التبرعات');
});
