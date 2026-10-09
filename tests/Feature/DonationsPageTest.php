<?php

use App\Models\DonationSetting;

test('renders the account, amounts, and progress on the donation page', function () {
    DonationSetting::factory()->create([
        'account_number' => '1234567890',
        'target_amount' => 500000,
        'collected_amount' => 200000,
    ]);

    $response = $this->get(route('donations'));

    $response->assertSee('1234567890');
    $response->assertSee('500,000');
    $response->assertSee('200,000');
    $response->assertSee('300,000');
    $response->assertSee('40%');
});

test('creates the donation settings once with defaults on the first visits', function () {
    $this->get(route('donations'))->assertOk();
    $this->get(route('donations'))->assertOk();

    $this->assertDatabaseCount('donation_settings', 1);
    $this->assertDatabaseHas('donation_settings', [
        'account_name' => 'شام كاش',
        'target_amount' => 0,
        'collected_amount' => 0,
    ]);
});

test('never shows a negative remaining amount when the target is exceeded', function () {
    DonationSetting::factory()->create([
        'target_amount' => 100000,
        'collected_amount' => 150000,
    ]);

    $response = $this->get(route('donations'));

    $response->assertSee('150,000');
    $response->assertSee('100%');
    $response->assertDontSee('-50,000');
});

test('escapes the account name on the donation page', function () {
    DonationSetting::factory()->create([
        'account_name' => '<script>alert("xss")</script>',
    ]);

    $response = $this->get(route('donations'));

    $response->assertSee('&lt;script&gt;', false);
    $response->assertDontSee('<script>alert("xss")</script>', false);
});
