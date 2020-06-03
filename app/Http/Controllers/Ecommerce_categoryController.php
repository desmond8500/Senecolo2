<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEcommerce_categoryRequest;
use App\Http\Requests\UpdateEcommerce_categoryRequest;
use App\Repositories\Ecommerce_categoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Ecommerce_categoryController extends AppBaseController
{
    /** @var  Ecommerce_categoryRepository */
    private $ecommerceCategoryRepository;

    public function __construct(Ecommerce_categoryRepository $ecommerceCategoryRepo)
    {
        $this->ecommerceCategoryRepository = $ecommerceCategoryRepo;
    }

    /**
     * Display a listing of the Ecommerce_category.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ecommerceCategories = $this->ecommerceCategoryRepository->paginate(10);

        return view('ecommerce_categories.index')
            ->with('ecommerceCategories', $ecommerceCategories);
    }

    /**
     * Show the form for creating a new Ecommerce_category.
     *
     * @return Response
     */
    public function create()
    {
        return view('ecommerce_categories.create');
    }

    /**
     * Store a newly created Ecommerce_category in storage.
     *
     * @param CreateEcommerce_categoryRequest $request
     *
     * @return Response
     */
    public function store(CreateEcommerce_categoryRequest $request)
    {
        $input = $request->all();

        $ecommerceCategory = $this->ecommerceCategoryRepository->create($input);

        Flash::success('Ecommerce Category saved successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified Ecommerce_category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ecommerceCategory = $this->ecommerceCategoryRepository->find($id);

        if (empty($ecommerceCategory)) {
            Flash::error('Ecommerce Category not found');

            return redirect(route('ecommerceCategories.index'));
        }

        return view('ecommerce_categories.show')->with('ecommerceCategory', $ecommerceCategory);
    }

    /**
     * Show the form for editing the specified Ecommerce_category.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ecommerceCategory = $this->ecommerceCategoryRepository->find($id);

        if (empty($ecommerceCategory)) {
            Flash::error('Ecommerce Category not found');

            return redirect(route('ecommerceCategories.index'));
        }

        return view('ecommerce_categories.edit')->with('ecommerceCategory', $ecommerceCategory);
    }

    /**
     * Update the specified Ecommerce_category in storage.
     *
     * @param int $id
     * @param UpdateEcommerce_categoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEcommerce_categoryRequest $request)
    {
        $ecommerceCategory = $this->ecommerceCategoryRepository->find($id);

        if (empty($ecommerceCategory)) {
            Flash::error('Ecommerce Category not found');

            return redirect(route('ecommerceCategories.index'));
        }

        $ecommerceCategory = $this->ecommerceCategoryRepository->update($request->all(), $id);

        Flash::success('Ecommerce Category updated successfully.');

        return redirect(route('ecommerceCategories.index'));
    }

    /**
     * Remove the specified Ecommerce_category from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ecommerceCategory = $this->ecommerceCategoryRepository->find($id);

        if (empty($ecommerceCategory)) {
            Flash::error('Ecommerce Category not found');

            return redirect(route('ecommerceCategories.index'));
        }

        $this->ecommerceCategoryRepository->delete($id);

        Flash::success('Ecommerce Category deleted successfully.');

        return redirect(route('ecommerceCategories.index'));
    }
}
