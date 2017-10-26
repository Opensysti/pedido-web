<?php

use Faker\Factory as Faker;
use App\Models\produtoWeb;
use App\Repositories\produtoWebRepository;

trait MakeprodutoWebTrait
{
    /**
     * Create fake instance of produtoWeb and save it in database
     *
     * @param array $produtoWebFields
     * @return produtoWeb
     */
    public function makeprodutoWeb($produtoWebFields = [])
    {
        /** @var produtoWebRepository $produtoWebRepo */
        $produtoWebRepo = App::make(produtoWebRepository::class);
        $theme = $this->fakeprodutoWebData($produtoWebFields);
        return $produtoWebRepo->create($theme);
    }

    /**
     * Get fake instance of produtoWeb
     *
     * @param array $produtoWebFields
     * @return produtoWeb
     */
    public function fakeprodutoWeb($produtoWebFields = [])
    {
        return new produtoWeb($this->fakeprodutoWebData($produtoWebFields));
    }

    /**
     * Get fake data of produtoWeb
     *
     * @param array $postFields
     * @return array
     */
    public function fakeprodutoWebData($produtoWebFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $produtoWebFields);
    }
}
