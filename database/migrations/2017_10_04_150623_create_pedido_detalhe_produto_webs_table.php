<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatepedidoDetalheProdutoWebsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_detalhe_produto_webs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido');
            $table->integer('item');
            $table->integer('quant');
            $table->string('produto');
            $table->float('preco');
            $table->float('faturar');
            $table->string('inf_adicional');
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
        Schema::drop('pedido_detalhe_produto_webs');
    }
}
