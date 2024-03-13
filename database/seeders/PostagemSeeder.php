<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postagens')->insert([
            'titulo' => 'Bolo de chocolate',
            'conteudo' => 'receita do bolo de chocolate',
            'user_id' => 1,
            'categoria_id' => 1,
        ]);

        DB::table('postagens')->insert([
            'titulo' => 'Guerra da Ucrania',
            'conteudo' => 'O acotencimento mais triste de 2022',
            'user_id' => 1,
            'categoria_id' => 2,
        ]);
    }
}
