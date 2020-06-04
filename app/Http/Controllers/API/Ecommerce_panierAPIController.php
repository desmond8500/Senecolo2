<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEcommerce_panierAPIRequest;
use App\Http\Requests\API\UpdateEcommerce_panierAPIRequest;
use App\Models\Ecommerce_panier;
use App\Repositories\Ecommerce_panierRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Ecommerce_panierController
 * @package App\Http\Controllers\API
 */

class Ecommerce_panierAPIController extends AppBaseController
{
    /** @var  Ecommerce_panierRepository */
    private $ecommercePanierRepository;

    public function __construct(Ecommerce_panierRepository $ecommercePanierRepo)
    {
        $this->ecommercePanierRepository = $ecommercePanierRepo;
    }

    /**
     * Display a listing of the Ecommerce_panier.
     * GET|HEAD /ecommercePaniers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $ecommercePaniers = $this->ecommercePanierRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($ecommercePaniers->toArray(), 'Ecommerce Paniers retrieved successfully');
    }

    /**
     * Store a newly created Ecommerce_panier in storage.
     * POST /ecommercePaniers
     *
     * @param CreateEcommerce_panierAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEcommerce_panierAPIRequest $request)
    {
        $input = $request->all();

        $ecommercePanier = $this->ecommercePanierRepository->create($input);

        return $this->sendResponse($ecommercePanier->toArray(), 'Ecommerce Panier saved successfully');
    }

    /**
     * Display the specified Ecommerce_panier.
     * GET|HEAD /ecommercePaniers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Ecommerce_panier $ecommercePanier */
        $ecommercePanier = $this->ecommercePanierRepository->find($id);

        if (empty($ecommercePanier)) {
            return $this->sendError('Ecommerce Panier not found');
        }

        return $this->sendResponse($ecommercePanier->toArray(), 'Ecommerce Panier retrieved successfully');
    }

    /**
     * Update the specified Ecommerce_panier in storage.
     * PUT/PATCH /ecommercePaniers/{id}
     *
     * @param int $id
     * @param UpdateEcommerce_panierAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEcommerce_panierAPIRequest $request)
    {
        $input = $request->all();

        /** @var Ecommerce_panier $ecommercePanier */
        $ecommercePanier = $this->ecommercePanierRepository->find($id);

        if (empty($ecommercePanier)) {
            return $this->sendError('Ecommerce Panier not found');
        }

        $ecommercePanier = $this->ecommercePanierRepository->update($input, $id);

        return $this->sendResponse($ecommercePanier->toArray(), 'Ecommerce_panier updated successfully');
    }

    /**
     * Remove the specified Ecommerce_panier from storage.
     * DELETE /ecommercePaniers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Ecommerce_panier $ecommercePanier */
        $ecommercePanier = $this->ecommercePanierRepository->find($id);

        if (empty($ecommercePanier)) {
            return $this->sendError('Ecommerce Panier not found');
        }

        $ecommercePanier->delete();

        return $this->sendSuccess('Ecommerce Panier deleted successfully');
    }
}
