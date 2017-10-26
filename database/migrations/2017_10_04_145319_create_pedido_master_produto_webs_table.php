<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatepedidoMasterProdutoWebsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_master_produto_webs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido');
            $table->string('cgc');
            $table->integer('objetivo');
            $table->date('dataemis');
            $table->integer('vendedor');
            $table->decimal('comissao');
            $table->integer('transp');
            $table->integer('tabela');
            $table->string('pedvend');
            $table->string('ordcomp');
            $table->integer('frete');
            $table->float('bonus');
            $table->float('custo');
            $table->integer('status');
            $table->integer('desconto');
            $table->float('descval');
            $table->integer('modalidade');
            $table->integer('condpaga');
            $table->string('obs');
            $table->integer('usuario');
            $table->integer('tipouser');
            $table->date('data_envio');
            $table->date('hora_envio');
            $table->string('forne');
            $table->float('desc01');
            $table->float('desc02');
            $table->float('desc03');
            $table->float('desc04');
            $table->float('desc05');
            $table->float('desctotal');
            $table->float('prazo01');
            $table->float('prazo02');
            $table->float('prazo03');
            $table->float('prazo04');
            $table->float('prazo05');
            $table->string('desc_condpgto');
            $table->string('email_dest');
            $table->string('forma_cobranca');
            $table->integer('pedido_empresa');
            $table->string('nfe_empresa');
            $table->date('datanfe_empresa');
            $table->float('valornfe_empresa');
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
        Schema::drop('pedido_master_produto_webs');
    }
}
