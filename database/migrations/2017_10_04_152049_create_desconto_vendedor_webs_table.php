<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatedescontoVendedorWebsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desconto_vendedor_webs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_vendedor');
            $table->string('descricao_desconto');
            $table->string('descricao_vendedor');
            $table->float('percentual');
            $table->string('log');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('desconto_vendedor_webs');
    }
}
