<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatepedidoMasterProdutoWebAPIRequest;
use App\Http\Requests\API\UpdatepedidoMasterProdutoWebAPIRequest;
use App\Models\pedidoMasterProdutoWeb;
use App\Repositories\pedidoMasterProdutoWebRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class pedidoMasterProdutoWebController
 * @package App\Http\Controllers\API
 */

class pedidoMasterProdutoWebAPIController extends AppBaseController
{
    /** @var  pedidoMasterProdutoWebRepository */
    private $pedidoMasterProdutoWebRepository;

    public function __construct(pedidoMasterProdutoWebRepository $pedidoMasterProdutoWebRepo)
    {
        $this->pedidoMasterProdutoWebRepository = $pedidoMasterProdutoWebRepo;
    }

    /**
     * Display a listing of the pedidoMasterProdutoWeb.
     * GET|HEAD /pedidoMasterProdutoWebs
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pedidoMasterProdutoWebRepository->pushCriteria(new RequestCriteria($request));
        $this->pedidoMasterProdutoWebRepository->pushCriteria(new LimitOffsetCriteria($request));
        $pedidoMasterProdutoWebs = $this->pedidoMasterProdutoWebRepository->all();

        return $this->sendResponse($pedidoMasterProdutoWebs->toArray(), 'Pedido Master Produto Webs retrieved successfully');
    }

    /**
     * Store a newly created pedidoMasterProdutoWeb in storage.
     * POST /pedidoMasterProdutoWebs
     *
     * @param CreatepedidoMasterProdutoWebAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatepedidoMasterProdutoWebAPIRequest $request)
    {
        $input = $request->all();

        $pedidoMasterProdutoWebs = $this->pedidoMasterProdutoWebRepository->create($input);

        return $this->sendResponse($pedidoMasterProdutoWebs->toArray(), 'Pedido Master Produto Web saved successfully');
    }

    /**
     * Display the specified pedidoMasterProdutoWeb.
     * GET|HEAD /pedidoMasterProdutoWebs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var pedidoMasterProdutoWeb $pedidoMasterProdutoWeb */
        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoMasterProdutoWeb)) {
            return $this->sendError('Pedido Master Produto Web not found');
        }

        return $this->sendResponse($pedidoMasterProdutoWeb->toArray(), 'Pedido Master Produto Web retrieved successfully');
    }

    /**
     * Update the specified pedidoMasterProdutoWeb in storage.
     * PUT/PATCH /pedidoMasterProdutoWebs/{id}
     *
     * @param  int $id
     * @param UpdatepedidoMasterProdutoWebAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepedidoMasterProdutoWebAPIRequest $request)
    {
        $input = $request->all();

        /** @var pedidoMasterProdutoWeb $pedidoMasterProdutoWeb */
        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoMasterProdutoWeb)) {
            return $this->sendError('Pedido Master Produto Web not found');
        }

        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->update($input, $id);

        return $this->sendResponse($pedidoMasterProdutoWeb->toArray(), 'pedidoMasterProdutoWeb updated successfully');
    }

    /**
     * Remove the specified pedidoMasterProdutoWeb from storage.
     * DELETE /pedidoMasterProdutoWebs/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var pedidoMasterProdutoWeb $pedidoMasterProdutoWeb */
        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoMasterProdutoWeb)) {
            return $this->sendError('Pedido Master Produto Web not found');
        }

        $pedidoMasterProdutoWeb->delete();

        return $this->sendResponse($id, 'Pedido Master Produto Web deleted successfully');
    }
}
