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
        DB::table('users_roles')->insert([
            'role' => 'Administrador'
        ]);

        DB::table('users_roles')->insert([
            'role' => 'Funcionario'
        ]);

        DB::table('users_roles')->insert([
            'role' => 'Gerente'
        ]);
    }
}
