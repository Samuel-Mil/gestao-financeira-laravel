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
        DB::table('bank_account_status')->insert([
            'status' => 'ativa',
            
        ]);

        DB::table('bank_account_status')->insert([
            'status' => 'inativa'
        ]);

        DB::table('bank_account_status')->insert([
            'status' => 'bloqueada'
        ]);

        DB::table('bank_account_status')->insert([
            'status' => 'encerrada'
        ]);
    }
}
