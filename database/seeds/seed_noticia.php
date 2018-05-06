<?php

use Illuminate\Database\Seeder;

class seed_noticia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('noticia')->insert([
            'text' => str_random(10),
            'imagem' => str_random(10).'@gmail.com',
        ]);
    }
}
