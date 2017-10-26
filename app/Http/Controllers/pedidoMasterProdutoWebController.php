<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepedidoMasterProdutoWebRequest;
use App\Http\Requests\UpdatepedidoMasterProdutoWebRequest;
use App\Repositories\pedidoMasterProdutoWebRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class pedidoMasterProdutoWebController extends AppBaseController
{
    /** @var  pedidoMasterProdutoWebRepository */
    private $pedidoMasterProdutoWebRepository;

    public function __construct(pedidoMasterProdutoWebRepository $pedidoMasterProdutoWebRepo)
    {
        $this->pedidoMasterProdutoWebRepository = $pedidoMasterProdutoWebRepo;
    }

    /**
     * Display a listing of the pedidoMasterProdutoWeb.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pedidoMasterProdutoWebRepository->pushCriteria(new RequestCriteria($request));
        $pedidoMasterProdutoWebs = $this->pedidoMasterProdutoWebRepository->all();

        return view('pedido_master_produto_webs.index')
            ->with('pedidoMasterProdutoWebs', $pedidoMasterProdutoWebs);
    }

    /**
     * Show the form for creating a new pedidoMasterProdutoWeb.
     *
     * @return Response
     */
    public function create()
    {
        return view('pedido_master_produto_webs.create');
    }

    /**
     * Store a newly created pedidoMasterProdutoWeb in storage.
     *
     * @param CreatepedidoMasterProdutoWebRequest $request
     *
     * @return Response
     */
    public function store(CreatepedidoMasterProdutoWebRequest $request)
    {
        $input = $request->all();

        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->create($input);

        Flash::success('Pedido Master Produto Web saved successfully.');

        return redirect(route('pedidoMasterProdutoWebs.index'));
    }

    /**
     * Display the specified pedidoMasterProdutoWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoMasterProdutoWeb)) {
            Flash::error('Pedido Master Produto Web not found');

            return redirect(route('pedidoMasterProdutoWebs.index'));
        }

        return view('pedido_master_produto_webs.show')->with('pedidoMasterProdutoWeb', $pedidoMasterProdutoWeb);
    }

    /**
     * Show the form for editing the specified pedidoMasterProdutoWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoMasterProdutoWeb)) {
            Flash::error('Pedido Master Produto Web not found');

            return redirect(route('pedidoMasterProdutoWebs.index'));
        }

        return view('pedido_master_produto_webs.edit')->with('pedidoMasterProdutoWeb', $pedidoMasterProdutoWeb);
    }

    /**
     * Update the specified pedidoMasterProdutoWeb in storage.
     *
     * @param  int              $id
     * @param UpdatepedidoMasterProdutoWebRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepedidoMasterProdutoWebRequest $request)
    {
        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoMasterProdutoWeb)) {
            Flash::error('Pedido Master Produto Web not found');

            return redirect(route('pedidoMasterProdutoWebs.index'));
        }

        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->update($request->all(), $id);

        Flash::success('Pedido Master Produto Web updated successfully.');

        return redirect(route('pedidoMasterProdutoWebs.index'));
    }

    /**
     * Remove the specified pedidoMasterProdutoWeb from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedidoMasterProdutoWeb = $this->pedidoMasterProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoMasterProdutoWeb)) {
            Flash::error('Pedido Master Produto Web not found');

            return redirect(route('pedidoMasterProdutoWebs.index'));
        }

        $this->pedidoMasterProdutoWebRepository->delete($id);

        Flash::success('Pedido Master Produto Web deleted successfully.');

        return redirect(route('pedidoMasterProdutoWebs.index'));
    }
}
