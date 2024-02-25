<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Provider;
use App\Models\InsuranceType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insuree>
 */
class InsureeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->name, // Assuming 'name' is a suitable attribute for uniqueness
            'provider_id' => \App\Models\Provider::factory(),
            'insurancetype_id' => \App\Models\Insurancetype::factory(),
            'user_id' => \App\Models\User::factory(),
            'extras' => $this->faker->randomElements(["sport voucher", "travel coupon", "extra health care", "investing in our shares"], rand(1, 4)),
            'insurance_status' => $this->faker->randomElement(['Pending', 'Active', 'Expired', 'Cancelled', 'Suspended']),
            'created_at' => now(),
            'updated_at' => now(),


        ];
    }
}
