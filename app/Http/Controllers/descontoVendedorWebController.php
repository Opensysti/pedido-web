<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedescontoVendedorWebRequest;
use App\Http\Requests\UpdatedescontoVendedorWebRequest;
use App\Repositories\descontoVendedorWebRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class descontoVendedorWebController extends AppBaseController
{
    /** @var  descontoVendedorWebRepository */
    private $descontoVendedorWebRepository;

    public function __construct(descontoVendedorWebRepository $descontoVendedorWebRepo)
    {
        $this->descontoVendedorWebRepository = $descontoVendedorWebRepo;
    }

    /**
     * Display a listing of the descontoVendedorWeb.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->descontoVendedorWebRepository->pushCriteria(new RequestCriteria($request));
        $descontoVendedorWebs = $this->descontoVendedorWebRepository->all();

        return view('desconto_vendedor_webs.index')
            ->with('descontoVendedorWebs', $descontoVendedorWebs);
    }

    /**
     * Show the form for creating a new descontoVendedorWeb.
     *
     * @return Response
     */
    public function create()
    {
        return view('desconto_vendedor_webs.create');
    }

    /**
     * Store a newly created descontoVendedorWeb in storage.
     *
     * @param CreatedescontoVendedorWebRequest $request
     *
     * @return Response
     */
    public function store(CreatedescontoVendedorWebRequest $request)
    {
        $input = $request->all();

        $descontoVendedorWeb = $this->descontoVendedorWebRepository->create($input);

        Flash::success('Desconto Vendedor Web saved successfully.');

        return redirect(route('descontoVendedorWebs.index'));
    }

    /**
     * Display the specified descontoVendedorWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $descontoVendedorWeb = $this->descontoVendedorWebRepository->findWithoutFail($id);

        if (empty($descontoVendedorWeb)) {
            Flash::error('Desconto Vendedor Web not found');

            return redirect(route('descontoVendedorWebs.index'));
        }

        return view('desconto_vendedor_webs.show')->with('descontoVendedorWeb', $descontoVendedorWeb);
    }

    /**
     * Show the form for editing the specified descontoVendedorWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $descontoVendedorWeb = $this->descontoVendedorWebRepository->findWithoutFail($id);

        if (empty($descontoVendedorWeb)) {
            Flash::error('Desconto Vendedor Web not found');

            return redirect(route('descontoVendedorWebs.index'));
        }

        return view('desconto_vendedor_webs.edit')->with('descontoVendedorWeb', $descontoVendedorWeb);
    }

    /**
     * Update the specified descontoVendedorWeb in storage.
     *
     * @param  int              $id
     * @param UpdatedescontoVendedorWebRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedescontoVendedorWebRequest $request)
    {
        $descontoVendedorWeb = $this->descontoVendedorWebRepository->findWithoutFail($id);

        if (empty($descontoVendedorWeb)) {
            Flash::error('Desconto Vendedor Web not found');

            return redirect(route('descontoVendedorWebs.index'));
        }

        $descontoVendedorWeb = $this->descontoVendedorWebRepository->update($request->all(), $id);

        Flash::success('Desconto Vendedor Web updated successfully.');

        return redirect(route('descontoVendedorWebs.index'));
    }

    /**
     * Remove the specified descontoVendedorWeb from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $descontoVendedorWeb = $this->descontoVendedorWebRepository->findWithoutFail($id);

        if (empty($descontoVendedorWeb)) {
            Flash::error('Desconto Vendedor Web not found');

            return redirect(route('descontoVendedorWebs.index'));
        }

        $this->descontoVendedorWebRepository->delete($id);

        Flash::success('Desconto Vendedor Web deleted successfully.');

        return redirect(route('descontoVendedorWebs.index'));
    }
}
