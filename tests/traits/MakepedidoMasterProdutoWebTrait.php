<?php

use Faker\Factory as Faker;
use App\Models\pedidoMasterProdutoWeb;
use App\Repositories\pedidoMasterProdutoWebRepository;

trait MakepedidoMasterProdutoWebTrait
{
    /**
     * Create fake instance of pedidoMasterProdutoWeb and save it in database
     *
     * @param array $pedidoMasterProdutoWebFields
     * @return pedidoMasterProdutoWeb
     */
    public function makepedidoMasterProdutoWeb($pedidoMasterProdutoWebFields = [])
    {
        /** @var pedidoMasterProdutoWebRepository $pedidoMasterProdutoWebRepo */
        $pedidoMasterProdutoWebRepo = App::make(pedidoMasterProdutoWebRepository::class);
        $theme = $this->fakepedidoMasterProdutoWebData($pedidoMasterProdutoWebFields);
        return $pedidoMasterProdutoWebRepo->create($theme);
    }

    /**
     * Get fake instance of pedidoMasterProdutoWeb
     *
     * @param array $pedidoMasterProdutoWebFields
     * @return pedidoMasterProdutoWeb
     */
    public function fakepedidoMasterProdutoWeb($pedidoMasterProdutoWebFields = [])
    {
        return new pedidoMasterProdutoWeb($this->fakepedidoMasterProdutoWebData($pedidoMasterProdutoWebFields));
    }

    /**
     * Get fake data of pedidoMasterProdutoWeb
     *
     * @param array $postFields
     * @return array
     */
    public function fakepedidoMasterProdutoWebData($pedidoMasterProdutoWebFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'pedido' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $pedidoMasterProdutoWebFields);
    }
}
