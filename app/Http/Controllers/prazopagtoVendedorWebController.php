<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateprazopagtoVendedorWebRequest;
use App\Http\Requests\UpdateprazopagtoVendedorWebRequest;
use App\Repositories\prazopagtoVendedorWebRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class prazopagtoVendedorWebController extends AppBaseController
{
    /** @var  prazopagtoVendedorWebRepository */
    private $prazopagtoVendedorWebRepository;

    public function __construct(prazopagtoVendedorWebRepository $prazopagtoVendedorWebRepo)
    {
        $this->prazopagtoVendedorWebRepository = $prazopagtoVendedorWebRepo;
    }

    /**
     * Display a listing of the prazopagtoVendedorWeb.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->prazopagtoVendedorWebRepository->pushCriteria(new RequestCriteria($request));
        $prazopagtoVendedorWebs = $this->prazopagtoVendedorWebRepository->all();

        return view('prazopagto_vendedor_webs.index')
            ->with('prazopagtoVendedorWebs', $prazopagtoVendedorWebs);
    }

    /**
     * Show the form for creating a new prazopagtoVendedorWeb.
     *
     * @return Response
     */
    public function create()
    {
        return view('prazopagto_vendedor_webs.create');
    }

    /**
     * Store a newly created prazopagtoVendedorWeb in storage.
     *
     * @param CreateprazopagtoVendedorWebRequest $request
     *
     * @return Response
     */
    public function store(CreateprazopagtoVendedorWebRequest $request)
    {
        $input = $request->all();

        $prazopagtoVendedorWeb = $this->prazopagtoVendedorWebRepository->create($input);

        Flash::success('Prazopagto Vendedor Web saved successfully.');

        return redirect(route('prazopagtoVendedorWebs.index'));
    }

    /**
     * Display the specified prazopagtoVendedorWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $prazopagtoVendedorWeb = $this->prazopagtoVendedorWebRepository->findWithoutFail($id);

        if (empty($prazopagtoVendedorWeb)) {
            Flash::error('Prazopagto Vendedor Web not found');

            return redirect(route('prazopagtoVendedorWebs.index'));
        }

        return view('prazopagto_vendedor_webs.show')->with('prazopagtoVendedorWeb', $prazopagtoVendedorWeb);
    }

    /**
     * Show the form for editing the specified prazopagtoVendedorWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $prazopagtoVendedorWeb = $this->prazopagtoVendedorWebRepository->findWithoutFail($id);

        if (empty($prazopagtoVendedorWeb)) {
            Flash::error('Prazopagto Vendedor Web not found');

            return redirect(route('prazopagtoVendedorWebs.index'));
        }

        return view('prazopagto_vendedor_webs.edit')->with('prazopagtoVendedorWeb', $prazopagtoVendedorWeb);
    }

    /**
     * Update the specified prazopagtoVendedorWeb in storage.
     *
     * @param  int              $id
     * @param UpdateprazopagtoVendedorWebRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprazopagtoVendedorWebRequest $request)
    {
        $prazopagtoVendedorWeb = $this->prazopagtoVendedorWebRepository->findWithoutFail($id);

        if (empty($prazopagtoVendedorWeb)) {
            Flash::error('Prazopagto Vendedor Web not found');

            return redirect(route('prazopagtoVendedorWebs.index'));
        }

        $prazopagtoVendedorWeb = $this->prazopagtoVendedorWebRepository->update($request->all(), $id);

        Flash::success('Prazopagto Vendedor Web updated successfully.');

        return redirect(route('prazopagtoVendedorWebs.index'));
    }

    /**
     * Remove the specified prazopagtoVendedorWeb from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $prazopagtoVendedorWeb = $this->prazopagtoVendedorWebRepository->findWithoutFail($id);

        if (empty($prazopagtoVendedorWeb)) {
            Flash::error('Prazopagto Vendedor Web not found');

            return redirect(route('prazopagtoVendedorWebs.index'));
        }

        $this->prazopagtoVendedorWebRepository->delete($id);

        Flash::success('Prazopagto Vendedor Web deleted successfully.');

        return redirect(route('prazopagtoVendedorWebs.index'));
    }
}
