<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bank_account_type')->insert([
            'type' => 'corrente',
        ]);

        DB::table('bank_account_type')->insert([
            'type' => 'poupança',
        ]);
        
        DB::table('bank_account_type')->insert([
            'type' => 'conjunta',
        ]);
    }   
}
