<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEcommerce_categoryAPIRequest;
use App\Http\Requests\API\UpdateEcommerce_categoryAPIRequest;
use App\Models\Ecommerce_category;
use App\Repositories\Ecommerce_categoryRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Ecommerce_categoryController
 * @package App\Http\Controllers\API
 */

class Ecommerce_categoryAPIController extends AppBaseController
{
    /** @var  Ecommerce_categoryRepository */
    private $ecommerceCategoryRepository;

    public function __construct(Ecommerce_categoryRepository $ecommerceCategoryRepo)
    {
        $this->ecommerceCategoryRepository = $ecommerceCategoryRepo;
    }

    /**
     * Display a listing of the Ecommerce_category.
     * GET|HEAD /ecommerceCategories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $ecommerceCategories = $this->ecommerceCategoryRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($ecommerceCategories->toArray(), 'Ecommerce Categories retrieved successfully');
    }

    /**
     * Store a newly created Ecommerce_category in storage.
     * POST /ecommerceCategories
     *
     * @param CreateEcommerce_categoryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEcommerce_categoryAPIRequest $request)
    {
        $input = $request->all();

        $ecommerceCategory = $this->ecommerceCategoryRepository->create($input);

        return $this->sendResponse($ecommerceCategory->toArray(), 'Ecommerce Category saved successfully');
    }

    /**
     * Display the specified Ecommerce_category.
     * GET|HEAD /ecommerceCategories/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Ecommerce_category $ecommerceCategory */
        $ecommerceCategory = $this->ecommerceCategoryRepository->find($id);

        if (empty($ecommerceCategory)) {
            return $this->sendError('Ecommerce Category not found');
        }

        return $this->sendResponse($ecommerceCategory->toArray(), 'Ecommerce Category retrieved successfully');
    }

    /**
     * Update the specified Ecommerce_category in storage.
     * PUT/PATCH /ecommerceCategories/{id}
     *
     * @param int $id
     * @param UpdateEcommerce_categoryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEcommerce_categoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var Ecommerce_category $ecommerceCategory */
        $ecommerceCategory = $this->ecommerceCategoryRepository->find($id);

        if (empty($ecommerceCategory)) {
            return $this->sendError('Ecommerce Category not found');
        }

        $ecommerceCategory = $this->ecommerceCategoryRepository->update($input, $id);

        return $this->sendResponse($ecommerceCategory->toArray(), 'Ecommerce_category updated successfully');
    }

    /**
     * Remove the specified Ecommerce_category from storage.
     * DELETE /ecommerceCategories/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Ecommerce_category $ecommerceCategory */
        $ecommerceCategory = $this->ecommerceCategoryRepository->find($id);

        if (empty($ecommerceCategory)) {
            return $this->sendError('Ecommerce Category not found');
        }

        $ecommerceCategory->delete();

        return $this->sendSuccess('Ecommerce Category deleted successfully');
    }
}
