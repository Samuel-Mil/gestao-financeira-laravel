<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserRole;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    return [
        'name' => fake()->name,
        'email' => fake()->unique()->safeEmail,
        'cpf' => fake()->unique()->numerify('###.###.###-##'), // Gera CPF fictício
        'password' => bcrypt('0000'), // Senha fictícia para exemplo
        'role' => function () {
            return UserRole::inRandomOrder()->first()->id;
        },
        'image' => 'profile_pic.png', // Nome da imagem padrão
        'remember_token' => Str::random(10),
        'created_at' => now(),
        'updated_at' => now(),
    ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
