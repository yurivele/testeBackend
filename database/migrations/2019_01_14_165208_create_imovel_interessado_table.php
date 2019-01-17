<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelInteressadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovel_interessado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('imovel_id')->unsigned();
            $table->integer('interessado_id')->unsigned();
            $table->timestamps();

            $table->foreign('imovel_id')
                    ->references('id')
                    ->on('imovels')
                    ->onDelete('cascade');

            $table->foreign('interessado_id')
                    ->references('id')
                    ->on('interessados')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovel_interessado');
    }
}
