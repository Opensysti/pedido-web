<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateprodutoWebsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_webs', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('codigo');
            $table->string('descricao');
            $table->string('descestoque');
            $table->string('codbarra');
            $table->string('unidade');
            $table->integer('clasfis');
            $table->float('precocompra');
            $table->float('precocusto');
            $table->float('peso');
            $table->float('estoqueminimo');
            $table->float('estoqueideal');
            $table->float('embalagem');
            $table->float('cubagem');
            $table->float('caixa');
            $table->boolean('ativo');
            $table->binary('imagem');
            $table->string('grupo');
            $table->float('margem');
            $table->string('info_adicional');
            $table->boolean('subconjunto');
            $table->string('codigo_web');
            $table->float('certo');
            $table->string('localizacao');
            $table->float('capacidade');
            $table->float('icms');
            $table->float('icm');
            $table->integer('codigo_seq');
            $table->string('materia_prima');
            $table->string('codigo_dum');
            $table->string('linha_produto');

            
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
        Schema::drop('produto_webs');
    }
}
