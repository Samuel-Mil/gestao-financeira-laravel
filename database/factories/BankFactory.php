<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\BankStatus;
use App\Models\BankType;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bank>
 */
class BankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => fake()->randomNumber(6),
            'holder_name' => fake()->name,
            'type' => function () {
                return BankType::inRandomOrder()->first()->id;
            },
            'opening_date' => fake()->date,
            'agency' => fake()->numerify('####'),
            'agency_identification' => fake()->unique()->numerify('#########'), // Número de identificação da agência
            'status' => function () {
                return BankStatus::inRandomOrder()->first()->id;
            },
            'info_contact' => fake()->paragraph,
            'notes' => fake()->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
