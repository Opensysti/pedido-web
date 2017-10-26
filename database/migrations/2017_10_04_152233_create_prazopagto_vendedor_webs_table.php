<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateprazopagtoVendedorWebsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prazopagto_vendedor_webs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_pagamento');
            $table->string('descricao_prazopgto');
            $table->integer('codigo_vendedor');
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
        Schema::drop('prazopagto_vendedor_webs');
    }
}
