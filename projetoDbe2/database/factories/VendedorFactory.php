<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class VendedorFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'nome_loja' => fake()->company(),
            'cnpj' => fake()->numerify('##############'),
            'descricao_loja' => fake()->paragraph(),
            'email' => fake()->unique()->safeEmail(),
            'telefone' => fake()->numerify('(##) #####-####'),
            'categoria' => fake()->randomElement(['Moda', 'Eletrônicos', 'Casa', 'Beleza', 'Esportes', 'Pet']),
            'cep' => fake()->numerify('########'),
            'estado' => fake()->randomElement(['SP', 'RJ', 'MG', 'RS', 'BA', 'PR', 'SC', 'GO', 'PE', 'CE']),
            'cidade' => fake()->city(),
            'bairro' => fake()->streetName(),
            'rua' => fake()->streetName(),
            'numero' => fake()->buildingNumber(),
            'avaliacao_media' => fake()->randomFloat(2, 0, 5),
        ];
    }
}
