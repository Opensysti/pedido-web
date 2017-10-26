<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatevendedorWebRequest;
use App\Http\Requests\UpdatevendedorWebRequest;
use App\Repositories\vendedorWebRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class vendedorWebController extends AppBaseController
{
    /** @var  vendedorWebRepository */
    private $vendedorWebRepository;

    public function __construct(vendedorWebRepository $vendedorWebRepo)
    {
        $this->vendedorWebRepository = $vendedorWebRepo;
    }

    /**
     * Display a listing of the vendedorWeb.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vendedorWebRepository->pushCriteria(new RequestCriteria($request));
        $vendedorWebs = $this->vendedorWebRepository->all();

        return view('vendedor_webs.index')
            ->with('vendedorWebs', $vendedorWebs);
    }

    /**
     * Show the form for creating a new vendedorWeb.
     *
     * @return Response
     */
    public function create()
    {
        return view('vendedor_webs.create');
    }

    /**
     * Store a newly created vendedorWeb in storage.
     *
     * @param CreatevendedorWebRequest $request
     *
     * @return Response
     */
    public function store(CreatevendedorWebRequest $request)
    {
        $input = $request->all();

        $vendedorWeb = $this->vendedorWebRepository->create($input);

        Flash::success('Vendedor Web saved successfully.');

        return redirect(route('vendedorWebs.index'));
    }

    /**
     * Display the specified vendedorWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendedorWeb = $this->vendedorWebRepository->findWithoutFail($id);

        if (empty($vendedorWeb)) {
            Flash::error('Vendedor Web not found');

            return redirect(route('vendedorWebs.index'));
        }

        return view('vendedor_webs.show')->with('vendedorWeb', $vendedorWeb);
    }

    /**
     * Show the form for editing the specified vendedorWeb.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendedorWeb = $this->vendedorWebRepository->findWithoutFail($id);

        if (empty($vendedorWeb)) {
            Flash::error('Vendedor Web not found');

            return redirect(route('vendedorWebs.index'));
        }

        return view('vendedor_webs.edit')->with('vendedorWeb', $vendedorWeb);
    }

    /**
     * Update the specified vendedorWeb in storage.
     *
     * @param  int              $id
     * @param UpdatevendedorWebRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatevendedorWebRequest $request)
    {
        $vendedorWeb = $this->vendedorWebRepository->findWithoutFail($id);

        if (empty($vendedorWeb)) {
            Flash::error('Vendedor Web not found');

            return redirect(route('vendedorWebs.index'));
        }

        $vendedorWeb = $this->vendedorWebRepository->update($request->all(), $id);

        Flash::success('Vendedor Web updated successfully.');

        return redirect(route('vendedorWebs.index'));
    }

    /**
     * Remove the specified vendedorWeb from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendedorWeb = $this->vendedorWebRepository->findWithoutFail($id);

        if (empty($vendedorWeb)) {
            Flash::error('Vendedor Web not found');

            return redirect(route('vendedorWebs.index'));
        }

        $this->vendedorWebRepository->delete($id);

        Flash::success('Vendedor Web deleted successfully.');

        return redirect(route('vendedorWebs.index'));
    }
}
