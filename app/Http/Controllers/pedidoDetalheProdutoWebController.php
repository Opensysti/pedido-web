<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepedidoDetalheProdutoWebRequest;
use App\Http\Requests\UpdatepedidoDetalheProdutoWebRequest;
use App\Repositories\pedidoDetalheProdutoWebRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class pedidoDetalheProdutoWebController extends AppBaseController
{
    /** @var  pedidoDetalheProdutoWebRepository */
    private $pedidoDetalheProdutoWebRepository;

    public function __construct(pedidoDetalheProdutoWebRepository $pedidoDetalheProdutoWebRepo)
    {
        $this->pedidoDetalheProdutoWebRepository = $pedidoDetalheProdutoWebRepo;
    }

    /**
     * Display a listing of the pedidoDetalheProdutoWeb.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pedidoDetalheProdutoWebRepository->pushCriteria(new RequestCriteria($request));
        $pedidoDetalheProdutoWebs = $this->pedidoDetalheProdutoWebRepository->all()->paginate(15);

        return view('pedido_detalhe_produto_webs.index')
            ->with('pedidoDetalheProdutoWebs', $pedidoDetalheProdutoWebs);
    }

    /**
     * Show the form for creating a new pedidoDetalheProdutoWeb.
     *
     * @return Response
     */
    public function create()
    {
        return view('pedido_detalhe_produto_webs.create');
    }

    /**
     * Store a newly created pedidoDetalheProdutoWeb in storage.
     *
     * @param CreatepedidoDetalheProdutoWebRequest $request
     *
     * @return Response
     */
    public function store(CreatepedidoDetalheProdutoWebRequest $request)
    {
        $input = $request->all();

        $pedidoDetalheProdutoWeb = $this->pedidoDetalheProdutoWebRepository->create($input);

        Flash::success('Pedido Detalhe Produto Web saved successfully.');

        return redirect(route('pedidoDetalheProdutoWebs.index'));
    }

    /**
     * Display the specified pedidoDetalheProdutoWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pedidoDetalheProdutoWeb = $this->pedidoDetalheProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoDetalheProdutoWeb)) {
            Flash::error('Pedido Detalhe Produto Web not found');

            return redirect(route('pedidoDetalheProdutoWebs.index'));
        }

        return view('pedido_detalhe_produto_webs.show')->with('pedidoDetalheProdutoWeb', $pedidoDetalheProdutoWeb);
    }

    /**
     * Show the form for editing the specified pedidoDetalheProdutoWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pedidoDetalheProdutoWeb = $this->pedidoDetalheProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoDetalheProdutoWeb)) {
            Flash::error('Pedido Detalhe Produto Web not found');

            return redirect(route('pedidoDetalheProdutoWebs.index'));
        }

        return view('pedido_detalhe_produto_webs.edit')->with('pedidoDetalheProdutoWeb', $pedidoDetalheProdutoWeb);
    }

    /**
     * Update the specified pedidoDetalheProdutoWeb in storage.
     *
     * @param  int              $id
     * @param UpdatepedidoDetalheProdutoWebRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepedidoDetalheProdutoWebRequest $request)
    {
        $pedidoDetalheProdutoWeb = $this->pedidoDetalheProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoDetalheProdutoWeb)) {
            Flash::error('Pedido Detalhe Produto Web not found');

            return redirect(route('pedidoDetalheProdutoWebs.index'));
        }

        $pedidoDetalheProdutoWeb = $this->pedidoDetalheProdutoWebRepository->update($request->all(), $id);

        Flash::success('Pedido Detalhe Produto Web updated successfully.');

        return redirect(route('pedidoDetalheProdutoWebs.index'));
    }

    /**
     * Remove the specified pedidoDetalheProdutoWeb from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pedidoDetalheProdutoWeb = $this->pedidoDetalheProdutoWebRepository->findWithoutFail($id);

        if (empty($pedidoDetalheProdutoWeb)) {
            Flash::error('Pedido Detalhe Produto Web not found');

            return redirect(route('pedidoDetalheProdutoWebs.index'));
        }

        $this->pedidoDetalheProdutoWebRepository->delete($id);

        Flash::success('Pedido Detalhe Produto Web deleted successfully.');

        return redirect(route('pedidoDetalheProdutoWebs.index'));
    }
}
