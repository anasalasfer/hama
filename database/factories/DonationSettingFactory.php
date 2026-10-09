<?php

namespace Database\Factories;

use App\Models\DonationSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DonationSetting>
 */
class DonationSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_name' => 'شام كاش',
            'account_number' => fake()->numerify('##########'),
            'target_amount' => fake()->numberBetween(100_000, 1_000_000),
            'collected_amount' => 0,
            'currency' => 'ل.س',
        ];
    }
}
