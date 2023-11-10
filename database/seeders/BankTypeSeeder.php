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
        DB::table('tipo_conta_bancaria')->insert([
            'type' => 'corrente',
        ]);

        DB::table('tipo_conta_bancaria')->insert([
            'type' => 'poupança',
        ]);
        
        DB::table('tipo_conta_bancaria')->insert([
            'type' => 'conjunta',
        ]);
    }   
}
