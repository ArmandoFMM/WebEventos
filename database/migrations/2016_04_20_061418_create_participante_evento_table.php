<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipanteEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante_evento', function (Blueprint $table) {
            $table->integer('evento_id')->unsigned();
            $table->foreign('evento_id')->references('id')->on('eventos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('participante_id')->unsigned();
            $table->foreign('participante_id')->references('id')->on('participantes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->primary(['evento_id', 'participante_id']);
            $table->timestamps();
            $table->string('nr_bilhete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participante_evento');
    }
}
