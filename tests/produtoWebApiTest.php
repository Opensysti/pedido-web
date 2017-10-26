<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class produtoWebApiTest extends TestCase
{
    use MakeprodutoWebTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateprodutoWeb()
    {
        $produtoWeb = $this->fakeprodutoWebData();
        $this->json('POST', '/api/v1/produtoWebs', $produtoWeb);

        $this->assertApiResponse($produtoWeb);
    }

    /**
     * @test
     */
    public function testReadprodutoWeb()
    {
        $produtoWeb = $this->makeprodutoWeb();
        $this->json('GET', '/api/v1/produtoWebs/'.$produtoWeb->id);

        $this->assertApiResponse($produtoWeb->toArray());
    }

    /**
     * @test
     */
    public function testUpdateprodutoWeb()
    {
        $produtoWeb = $this->makeprodutoWeb();
        $editedprodutoWeb = $this->fakeprodutoWebData();

        $this->json('PUT', '/api/v1/produtoWebs/'.$produtoWeb->id, $editedprodutoWeb);

        $this->assertApiResponse($editedprodutoWeb);
    }

    /**
     * @test
     */
    public function testDeleteprodutoWeb()
    {
        $produtoWeb = $this->makeprodutoWeb();
        $this->json('DELETE', '/api/v1/produtoWebs/'.$produtoWeb->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/produtoWebs/'.$produtoWeb->id);

        $this->assertResponseStatus(404);
    }
}
