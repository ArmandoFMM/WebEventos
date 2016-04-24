<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadoEventoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convidado_evento', function (Blueprint $table) {
            $table->integer('evento_id')->unsigned();
            $table->foreign('evento_id')->references('id')->on('eventos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('convidado_id')->unsigned();
            $table->foreign('convidado_id')->references('id')->on('convidados')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->primary(['evento_id', 'convidado_id']);
            $table->timestamps();
            $table->string('nr_convite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('convidado_evento');
    }
}
