<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BankTypeSeeder::class,
            BankStatusSeeder::class,
            BankSeeder::class,
            UserRolesSeeder::class,
            UserSeeder::class,
            FlowTypeSeeder::class,
            FlowSeeder::class,
            InvoiceSeeder::class
        ]);
    }
}
