<?php

use App\Models\produtoWeb;
use App\Repositories\produtoWebRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class produtoWebRepositoryTest extends TestCase
{
    use MakeprodutoWebTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var produtoWebRepository
     */
    protected $produtoWebRepo;

    public function setUp()
    {
        parent::setUp();
        $this->produtoWebRepo = App::make(produtoWebRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateprodutoWeb()
    {
        $produtoWeb = $this->fakeprodutoWebData();
        $createdprodutoWeb = $this->produtoWebRepo->create($produtoWeb);
        $createdprodutoWeb = $createdprodutoWeb->toArray();
        $this->assertArrayHasKey('id', $createdprodutoWeb);
        $this->assertNotNull($createdprodutoWeb['id'], 'Created produtoWeb must have id specified');
        $this->assertNotNull(produtoWeb::find($createdprodutoWeb['id']), 'produtoWeb with given id must be in DB');
        $this->assertModelData($produtoWeb, $createdprodutoWeb);
    }

    /**
     * @test read
     */
    public function testReadprodutoWeb()
    {
        $produtoWeb = $this->makeprodutoWeb();
        $dbprodutoWeb = $this->produtoWebRepo->find($produtoWeb->id);
        $dbprodutoWeb = $dbprodutoWeb->toArray();
        $this->assertModelData($produtoWeb->toArray(), $dbprodutoWeb);
    }

    /**
     * @test update
     */
    public function testUpdateprodutoWeb()
    {
        $produtoWeb = $this->makeprodutoWeb();
        $fakeprodutoWeb = $this->fakeprodutoWebData();
        $updatedprodutoWeb = $this->produtoWebRepo->update($fakeprodutoWeb, $produtoWeb->id);
        $this->assertModelData($fakeprodutoWeb, $updatedprodutoWeb->toArray());
        $dbprodutoWeb = $this->produtoWebRepo->find($produtoWeb->id);
        $this->assertModelData($fakeprodutoWeb, $dbprodutoWeb->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteprodutoWeb()
    {
        $produtoWeb = $this->makeprodutoWeb();
        $resp = $this->produtoWebRepo->delete($produtoWeb->id);
        $this->assertTrue($resp);
        $this->assertNull(produtoWeb::find($produtoWeb->id), 'produtoWeb should not exist in DB');
    }
}
