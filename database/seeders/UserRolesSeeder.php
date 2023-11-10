<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuario_cargos')->insert([
            'role' => 'Administrador'
        ]);

        DB::table('usuario_cargos')->insert([
            'role' => 'Funcionario'
        ]);

        DB::table('usuario_cargos')->insert([
            'role' => 'Gerente'
        ]);
    }
}
