<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoLocalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('evento_local')) {
            //
            Schema::create('evento_local', function (Blueprint $table) {
                $table->integer('local_id')->unsigned();
                $table->foreign('local_id')->references('id')->on('locals')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');;
                $table->integer('evento_id')->unsigned();
                $table->foreign('evento_id')->references('id')->on('eventos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                $table->primary(['local_id', 'evento_id']);
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
        Schema::drop('evento_local');
    }
}
