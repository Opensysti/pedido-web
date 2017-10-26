<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateprodutoWebAPIRequest;
use App\Http\Requests\API\UpdateprodutoWebAPIRequest;
use App\Models\produtoWeb;
use App\Repositories\produtoWebRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class produtoWebController
 * @package App\Http\Controllers\API
 */

class produtoWebAPIController extends AppBaseController
{
    /** @var  produtoWebRepository */
    private $produtoWebRepository;

    public function __construct(produtoWebRepository $produtoWebRepo)
    {
        $this->produtoWebRepository = $produtoWebRepo;
    }

    /**
     * Display a listing of the produtoWeb.
     * GET|HEAD /produtoWebs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->produtoWebRepository->pushCriteria(new RequestCriteria($request));
        $this->produtoWebRepository->pushCriteria(new LimitOffsetCriteria($request));
        $produtoWebs = $this->produtoWebRepository->all();

        return $this->sendResponse($produtoWebs->toArray(), 'Produto Webs retrieved successfully');
    }

    /**
     * Store a newly created produtoWeb in storage.
     * POST /produtoWebs
     *
     * @param CreateprodutoWebAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateprodutoWebAPIRequest $request)
    {
        $input = $request->all();

        $produtoWebs = $this->produtoWebRepository->create($input);

        return $this->sendResponse($produtoWebs->toArray(), 'Produto Web saved successfully');
    }

    /**
     * Display the specified produtoWeb.
     * GET|HEAD /produtoWebs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var produtoWeb $produtoWeb */
        $produtoWeb = $this->produtoWebRepository->findWithoutFail($id);

        if (empty($produtoWeb)) {
            return $this->sendError('Produto Web not found');
        }

        return $this->sendResponse($produtoWeb->toArray(), 'Produto Web retrieved successfully');
    }

    /**
     * Update the specified produtoWeb in storage.
     * PUT/PATCH /produtoWebs/{id}
     *
     * @param  int $id
     * @param UpdateprodutoWebAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprodutoWebAPIRequest $request)
    {
        $input = $request->all();

        /** @var produtoWeb $produtoWeb */
        $produtoWeb = $this->produtoWebRepository->findWithoutFail($id);

        if (empty($produtoWeb)) {
            return $this->sendError('Produto Web not found');
        }

        $produtoWeb = $this->produtoWebRepository->update($input, $id);

        return $this->sendResponse($produtoWeb->toArray(), 'produtoWeb updated successfully');
    }

    /**
     * Remove the specified produtoWeb from storage.
     * DELETE /produtoWebs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var produtoWeb $produtoWeb */
        $produtoWeb = $this->produtoWebRepository->findWithoutFail($id);

        if (empty($produtoWeb)) {
            return $this->sendError('Produto Web not found');
        }

        $produtoWeb->delete();

        return $this->sendResponse($id, 'Produto Web deleted successfully');
    }
}
