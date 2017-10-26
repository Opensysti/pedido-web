<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatevendedorWebsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedor_webs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo');
            $table->string('nome');
            $table->string('fantasia');
            $table->string('cnpj');
            $table->string('fone');
            $table->string('fone1');
            $table->string('celular');
            $table->string('email');
            $table->integer('regiao');
            $table->float('comissao');
            $table->boolean('comissao_flutuante');
            $table->float('meta');
            $table->float('deduz');
            $table->float('permite_desconto_especial');
            $table->float('permite_prazo_especial');
            $table->boolean('status');
            $table->integer('nivel');
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
        Schema::drop('vendedor_webs');
    }
}
