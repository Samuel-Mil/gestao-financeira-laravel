<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_conta_bancaria')->insert([
            'status' => 'ativa',
            
        ]);

        DB::table('status_conta_bancaria')->insert([
            'status' => 'inativa'
        ]);

        DB::table('status_conta_bancaria')->insert([
            'status' => 'bloqueada'
        ]);

        DB::table('status_conta_bancaria')->insert([
            'status' => 'encerrada'
        ]);
    }
}
