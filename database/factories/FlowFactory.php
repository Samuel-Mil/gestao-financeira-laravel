<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bank;
use App\Models\FlowType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flow>
 */
class FlowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => function () {
                return FlowType::inRandomOrder()->first()->id;
            },
            'amount' => fake()->randomFloat(2, 100, 10000), // Valor aleatório entre 100 e 10,000 com 2 casas decimais
            'entry_account' => function () {
                return Bank::inRandomOrder()->first()->id;
            },
            'outgoing_account' => function () {
                return Bank::inRandomOrder()->first()->id;
            },
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
