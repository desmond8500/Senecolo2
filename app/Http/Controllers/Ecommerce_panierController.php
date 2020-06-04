<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEcommerce_panierRequest;
use App\Http\Requests\UpdateEcommerce_panierRequest;
use App\Repositories\Ecommerce_panierRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ecommerce_panierController extends AppBaseController
{
    /** @var  Ecommerce_panierRepository */
    private $ecommercePanierRepository;

    public function __construct(Ecommerce_panierRepository $ecommercePanierRepo)
    {
        $this->ecommercePanierRepository = $ecommercePanierRepo;
    }

    /**
     * Display a listing of the Ecommerce_panier.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ecommercePaniers = $this->ecommercePanierRepository->paginate(10);

        return view('ecommerce_paniers.index')
            ->with('ecommercePaniers', $ecommercePaniers);
    }

    /**
     * Show the form for creating a new Ecommerce_panier.
     *
     * @return Response
     */
    public function create()
    {
        return view('ecommerce_paniers.create');
    }

    /**
     * Store a newly created Ecommerce_panier in storage.
     *
     * @param CreateEcommerce_panierRequest $request
     *
     * @return Response
     */
    public function store(CreateEcommerce_panierRequest $request)
    {
        $input = $request->all();

        $ecommercePanier = $this->ecommercePanierRepository->create($input);

        Flash::success('Ecommerce Panier saved successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified Ecommerce_panier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ecommercePanier = $this->ecommercePanierRepository->find($id);

        if (empty($ecommercePanier)) {
            Flash::error('Ecommerce Panier not found');

            return redirect(route('ecommercePaniers.index'));
        }

        return view('ecommerce_paniers.show')->with('ecommercePanier', $ecommercePanier);
    }

    /**
     * Show the form for editing the specified Ecommerce_panier.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ecommercePanier = $this->ecommercePanierRepository->find($id);

        if (empty($ecommercePanier)) {
            Flash::error('Ecommerce Panier not found');

            return redirect(route('ecommercePaniers.index'));
        }

        return view('ecommerce_paniers.edit')->with('ecommercePanier', $ecommercePanier);
    }

    /**
     * Update the specified Ecommerce_panier in storage.
     *
     * @param int $id
     * @param UpdateEcommerce_panierRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEcommerce_panierRequest $request)
    {
        $ecommercePanier = $this->ecommercePanierRepository->find($id);

        if (empty($ecommercePanier)) {
            Flash::error('Ecommerce Panier not found');

            return redirect(route('ecommercePaniers.index'));
        }

        $ecommercePanier = $this->ecommercePanierRepository->update($request->all(), $id);

        Flash::success('Ecommerce Panier updated successfully.');

        return redirect()->back();
    }

    /**
     * Remove the specified Ecommerce_panier from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ecommercePanier = $this->ecommercePanierRepository->find($id);

        if (empty($ecommercePanier)) {
            Flash::error('Ecommerce Panier not found');

            return redirect(route('ecommercePaniers.index'));
        }

        $this->ecommercePanierRepository->delete($id);

        Flash::success('Ecommerce Panier deleted successfully.');

        return redirect()->back();
    }
}
