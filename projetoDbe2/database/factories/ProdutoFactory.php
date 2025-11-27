<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProdutoFactory extends Factory
{
    /**
     * The current password being used by the factory.
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vendedor_id' => fake()->numberBetween(1, 10),
            'nome' => fake()->words(3, true),
            'descricao' => fake()->sentence(10),
            'categoria_id' => fake()->numberBetween(1, 20),
            'marca' => fake()->word(),
            'atributos' => [
                'cor' => fake()->safeColorName(),
                'tamanho' => fake()->randomElement(['P', 'M', 'G']),
            ],
            'peso' => fake()->randomFloat(2, 0.1, 10),
            'preco' => fake()->randomFloat(2, 10, 999),
            'estoque' => fake()->numberBetween(0, 500),
            'dimensoes' => [
                'altura' => fake()->numberBetween(1, 50),
                'largura' => fake()->numberBetween(1, 50),
                'profundidade' => fake()->numberBetween(1, 50),
            ],
        ];
    }
}
