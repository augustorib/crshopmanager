<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_tabela_servico extends Seeder
{
    public function run()
    {
        DB::table('servico')->insert([
            'codigo' => 'LAN100',
            'titulo' => 'Lanternagem',
            'valor' => '200',
        ]);
    }
}
