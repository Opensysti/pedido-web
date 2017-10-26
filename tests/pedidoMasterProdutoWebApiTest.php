<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class pedidoMasterProdutoWebApiTest extends TestCase
{
    use MakepedidoMasterProdutoWebTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatepedidoMasterProdutoWeb()
    {
        $pedidoMasterProdutoWeb = $this->fakepedidoMasterProdutoWebData();
        $this->json('POST', '/api/v1/pedidoMasterProdutoWebs', $pedidoMasterProdutoWeb);

        $this->assertApiResponse($pedidoMasterProdutoWeb);
    }

    /**
     * @test
     */
    public function testReadpedidoMasterProdutoWeb()
    {
        $pedidoMasterProdutoWeb = $this->makepedidoMasterProdutoWeb();
        $this->json('GET', '/api/v1/pedidoMasterProdutoWebs/'.$pedidoMasterProdutoWeb->id);

        $this->assertApiResponse($pedidoMasterProdutoWeb->toArray());
    }

    /**
     * @test
     */
    public function testUpdatepedidoMasterProdutoWeb()
    {
        $pedidoMasterProdutoWeb = $this->makepedidoMasterProdutoWeb();
        $editedpedidoMasterProdutoWeb = $this->fakepedidoMasterProdutoWebData();

        $this->json('PUT', '/api/v1/pedidoMasterProdutoWebs/'.$pedidoMasterProdutoWeb->id, $editedpedidoMasterProdutoWeb);

        $this->assertApiResponse($editedpedidoMasterProdutoWeb);
    }

    /**
     * @test
     */
    public function testDeletepedidoMasterProdutoWeb()
    {
        $pedidoMasterProdutoWeb = $this->makepedidoMasterProdutoWeb();
        $this->json('DELETE', '/api/v1/pedidoMasterProdutoWebs/'.$pedidoMasterProdutoWeb->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/pedidoMasterProdutoWebs/'.$pedidoMasterProdutoWeb->id);

        $this->assertResponseStatus(404);
    }
}
