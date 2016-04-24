<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('locals')) {
            Schema::create('locals', function (Blueprint $table) {
                $table->increments('id');
                $table->timestamps();
                $table->string('nome_local', 45);
                $table->string('cidade', 100);
                $table->string('bairro', 100);
                $table->string('avenida_rua', 100);
                $table->string('descricao_local');
                $table->softDeletes();
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
        Schema::drop('locals');
    }
}
