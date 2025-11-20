<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Exception;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_pass = env('APP_ADMIN_PASS');
        if (empty($admin_pass))
            throw new Exception("ERRO: Admin Password!");

        User::factory()->create([
            'nome_completo' => 'Test User',
            'email' => 'test@example.com',
            'cpf' => '1230',
            'password' => Hash::make($admin_pass),
            'telefone' => '14789',
            'is_admin' => true,
            'dt_nasc' => '2003-08-09'
        ]);
    }
}
