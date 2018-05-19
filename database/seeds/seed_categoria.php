<?php

use Illuminate\Database\Seeder;

class seed_categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'nome' => 'tecnologia',
        ]);
        DB::table('categoria')->insert([
            'nome' => 'anime/manga',
        ]);
        DB::table('categoria')->insert([
            'nome' => 'hq/comics',
        ]);
        DB::table('categoria')->insert([
            'nome' => 'filmes',
        ]);
        DB::table('categoria')->insert([
            'nome' => 'series',
        ]);
        DB::table('categoria')->insert([
            'nome' => 'jogos',
        ]);
        DB::table('categoria')->insert([
            'nome' => 'livros'
        ]);
        
        
    }
}
