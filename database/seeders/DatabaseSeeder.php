<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\InsuranceType;
use App\Models\User;
use App\Models\Insuree;
use App\Models\Provider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        // Insuree::factory(50)->create();
        Provider::factory(10)->create();
        InsuranceType::factory(10)->create();
        \App\Models\Insuree::factory(50)->create(); // Adjust the number of Insurees as needed
        \App\Models\InsureeDetail::factory(50)->create(); // Adjust the number of InsureeDetails as needed
  

       
    }
}
