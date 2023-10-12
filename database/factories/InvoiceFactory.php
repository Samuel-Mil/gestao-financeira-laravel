<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero_fatura' => fake()->unique()->numerify('FAT-#####'), // Gera número de fatura fictício
            'data_fatura' => fake()->date,
            'data_vencimento' => fake()->date,
            'nome_emitente' => fake()->name,
            'endereco_emitente' => fake()->address,
            'cpf_cnpj_emitente' => fake()->numerify('##.###.###/####-##'), // CNPJ fictício
            'nome_cliente' => fake()->name,
            'endereco_cliente' => fake()->address,
            'cpf_cnpj_cliente' => fake()->numerify('###.###.###-##'), // CPF fictício
            'descricao_item' => fake()->sentence,
            'quantidade' => fake()->numberBetween(1, 10),
            'preco_unitario' => fake()->randomFloat(2, 10, 1000),
            'subtotal' => fake()->randomFloat(2, 10, 1000),
            'impostos' => fake()->randomFloat(2, 1, 100),
            'desconto' => fake()->randomFloat(2, 1, 100),
            'total' => fake()->randomFloat(2, 10, 1000),
            'metodo_pagamento' => fake()->creditCardType,
            'condicoes_pagamento' => fake()->word,
            'numero_pedido' => fake()->unique()->numerify('PED-#####'), // Número de pedido fictício
            'notas' => fake()->paragraph,
            'status' => fake()->randomElement(['pendente', 'pago', 'atrasado']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
