<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('convidados')) {
            Schema::create('convidados', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
                $table->string('nome_convidado', 50);
                $table->string('email', 100)->unique();
                $table->string('telefone', 50)->unique();
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
        Schema::drop('convidados');
    }
}
