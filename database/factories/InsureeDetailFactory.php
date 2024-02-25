<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class InsureeDetailFactory extends Factory
{
/**
* The name of the factory's corresponding model.
*
* @var string
*/
protected $model = \App\Models\InsureeDetail::class;

/**
* Define the model's default state.
*
* @return array
*/
public function definition()
{
return [
'phone_number' => $this->faker->phoneNumber,
'zip' => $this->faker->postcode,
'street' => $this->faker->streetName,
'street_number' => $this->faker->buildingNumber,
'city' => $this->faker->city,
'country' => $this->faker->country,
'birth_number' => $this->faker->numerify('##########'), // Adjust the pattern as needed
'bank_account' => $this->faker->bankAccountNumber,
'insuree_id' => \App\Models\Insuree::factory(),
'created_at' => now(),
'updated_at' => now(),
];
}
}