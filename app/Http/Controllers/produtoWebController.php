<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprodutoWebRequest;
use App\Http\Requests\UpdateprodutoWebRequest;
use App\Repositories\produtoWebRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class produtoWebController extends AppBaseController
{
    /** @var  produtoWebRepository */
    private $produtoWebRepository;

    public function __construct(produtoWebRepository $produtoWebRepo)
    {
        $this->produtoWebRepository = $produtoWebRepo;
    }

    /**
     * Display a listing of the produtoWeb.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->produtoWebRepository->pushCriteria(new RequestCriteria($request));
        $produtoWebs = $this->produtoWebRepository->paginate(15);

        return view('produto_webs.index')
            ->with('produtoWebs', $produtoWebs);
    }

    /**
     * Show the form for creating a new produtoWeb.
     *
     * @return Response
     */
    public function create()
    {
        return view('produto_webs.create');
    }

    /**
     * Store a newly created produtoWeb in storage.
     *
     * @param CreateprodutoWebRequest $request
     *
     * @return Response
     */
    public function store(CreateprodutoWebRequest $request)
    {
        $input = $request->all();

        $produtoWeb = $this->produtoWebRepository->create($input);

        Flash::success('Produto Web saved successfully.');

        return redirect(route('produtoWebs.index'));
    }

    /**
     * Display the specified produtoWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $produtoWeb = $this->produtoWebRepository->findWithoutFail($id);

        if (empty($produtoWeb)) {
            Flash::error('Produto Web not found');

            return redirect(route('produtoWebs.index'));
        }

        return view('produto_webs.show')->with('produtoWeb', $produtoWeb);
    }

    /**
     * Show the form for editing the specified produtoWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $produtoWeb = $this->produtoWebRepository->findWithoutFail($id);

        if (empty($produtoWeb)) {
            Flash::error('Produto Web not found');

            return redirect(route('produtoWebs.index'));
        }

        return view('produto_webs.edit')->with('produtoWeb', $produtoWeb);
    }

    /**
     * Update the specified produtoWeb in storage.
     *
     * @param  int              $id
     * @param UpdateprodutoWebRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprodutoWebRequest $request)
    {
        $produtoWeb = $this->produtoWebRepository->findWithoutFail($id);

        if (empty($produtoWeb)) {
            Flash::error('Produto Web not found');

            return redirect(route('produtoWebs.index'));
        }

        $produtoWeb = $this->produtoWebRepository->update($request->all(), $id);

        Flash::success('Produto Web updated successfully.');

        return redirect(route('produtoWebs.index'));
    }

    /**
     * Remove the specified produtoWeb from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $produtoWeb = $this->produtoWebRepository->findWithoutFail($id);

        if (empty($produtoWeb)) {
            Flash::error('Produto Web not found');

            return redirect(route('produtoWebs.index'));
        }

        $this->produtoWebRepository->delete($id);

        Flash::success('Produto Web deleted successfully.');

        return redirect(route('produtoWebs.index'));
    }
}
