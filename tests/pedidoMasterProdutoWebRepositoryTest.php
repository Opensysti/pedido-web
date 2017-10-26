<?php

use App\Models\pedidoMasterProdutoWeb;
use App\Repositories\pedidoMasterProdutoWebRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class pedidoMasterProdutoWebRepositoryTest extends TestCase
{
    use MakepedidoMasterProdutoWebTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var pedidoMasterProdutoWebRepository
     */
    protected $pedidoMasterProdutoWebRepo;

    public function setUp()
    {
        parent::setUp();
        $this->pedidoMasterProdutoWebRepo = App::make(pedidoMasterProdutoWebRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatepedidoMasterProdutoWeb()
    {
        $pedidoMasterProdutoWeb = $this->fakepedidoMasterProdutoWebData();
        $createdpedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepo->create($pedidoMasterProdutoWeb);
        $createdpedidoMasterProdutoWeb = $createdpedidoMasterProdutoWeb->toArray();
        $this->assertArrayHasKey('id', $createdpedidoMasterProdutoWeb);
        $this->assertNotNull($createdpedidoMasterProdutoWeb['id'], 'Created pedidoMasterProdutoWeb must have id specified');
        $this->assertNotNull(pedidoMasterProdutoWeb::find($createdpedidoMasterProdutoWeb['id']), 'pedidoMasterProdutoWeb with given id must be in DB');
        $this->assertModelData($pedidoMasterProdutoWeb, $createdpedidoMasterProdutoWeb);
    }

    /**
     * @test read
     */
    public function testReadpedidoMasterProdutoWeb()
    {
        $pedidoMasterProdutoWeb = $this->makepedidoMasterProdutoWeb();
        $dbpedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepo->find($pedidoMasterProdutoWeb->id);
        $dbpedidoMasterProdutoWeb = $dbpedidoMasterProdutoWeb->toArray();
        $this->assertModelData($pedidoMasterProdutoWeb->toArray(), $dbpedidoMasterProdutoWeb);
    }

    /**
     * @test update
     */
    public function testUpdatepedidoMasterProdutoWeb()
    {
        $pedidoMasterProdutoWeb = $this->makepedidoMasterProdutoWeb();
        $fakepedidoMasterProdutoWeb = $this->fakepedidoMasterProdutoWebData();
        $updatedpedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepo->update($fakepedidoMasterProdutoWeb, $pedidoMasterProdutoWeb->id);
        $this->assertModelData($fakepedidoMasterProdutoWeb, $updatedpedidoMasterProdutoWeb->toArray());
        $dbpedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepo->find($pedidoMasterProdutoWeb->id);
        $this->assertModelData($fakepedidoMasterProdutoWeb, $dbpedidoMasterProdutoWeb->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletepedidoMasterProdutoWeb()
    {
        $pedidoMasterProdutoWeb = $this->makepedidoMasterProdutoWeb();
        $resp = $this->pedidoMasterProdutoWebRepo->delete($pedidoMasterProdutoWeb->id);
        $this->assertTrue($resp);
        $this->assertNull(pedidoMasterProdutoWeb::find($pedidoMasterProdutoWeb->id), 'pedidoMasterProdutoWeb should not exist in DB');
    }
}
