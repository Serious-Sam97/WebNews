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

        if(!Schema::hasTable('noticia')) {
            Schema::create('noticia', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->longText('text');
                $table->string('imagem');
                $tagle->integer('cat');
                $table->timestamps();
            });
        }

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
