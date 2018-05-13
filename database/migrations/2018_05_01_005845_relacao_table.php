<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('relacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noticia');
            $table->string('categoria');
            $table->foreign('noticia')->references('noticia')->on('id');
            $table->foreign('categoria')->references('categoria')->on('id');
            $table->timestamps();
        });
        */
        //PUTA QUE PARIU
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacao');
    }
}
