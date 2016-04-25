<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('eventos')) {
            Schema::create('eventos', function (Blueprint $table) {
                $table->increments('id');
                $table->string('designacao', 100);
                $table->string('imagem', 100);
                $table->date('data');
                $table->time('hora_inicio');
                $table->time('hora_fim');
                $table->string('tipo_evento', 100);
                $table->string('estado_evento', 50);
                $table->string('descricao', 255);
                $table->timestamps();
                $table->softDeletes();
                $table->integer('user_id')->unsigned();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::drop('eventos');
    }
}
