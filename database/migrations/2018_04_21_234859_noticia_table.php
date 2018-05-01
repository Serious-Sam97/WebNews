<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('noticia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('header');
            $table->string('body');
            $table->string('footer');
            $table->string('imagem');
            $table->timestamps();
        });
=======
        if(!Schema::hasTable('noticia')) {
            Schema::create('noticia', function (Blueprint $table) {
                $table->increments('id');
                $table->string('header');
                $table->string('body');
                $table->string('footer');
                $table->string('img');
                $table->timestamps();
            });
        }
>>>>>>> 8a8ceb8379eb23db9f12ccedef4f1b2ad819438c
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticia');
    }
}
