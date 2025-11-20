<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserVendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'nome_completo' => 'Teste vendedor',
            'email' => 'vendedor@email.com',
            'cpf' => '9852',
            'password' => Hash::make('123'),
            'telefone' => '561',
            'is_vendedor' => true,
            'dt_nasc' => '2023-08-09'
        ]);
    }
}
