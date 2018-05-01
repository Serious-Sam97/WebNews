<?php

use Illuminate\Database\Seeder;

class relacaoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relacao')->insert([
            'nome' => str_random(10),
        ]);
    }
}
