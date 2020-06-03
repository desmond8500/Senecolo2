<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateEcommerce_articleAPIRequest;
use App\Http\Requests\API\UpdateEcommerce_articleAPIRequest;
use App\Models\Ecommerce_article;
use App\Repositories\Ecommerce_articleRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class Ecommerce_articleController
 * @package App\Http\Controllers\API
 */

class Ecommerce_articleAPIController extends AppBaseController
{
    /** @var  Ecommerce_articleRepository */
    private $ecommerceArticleRepository;

    public function __construct(Ecommerce_articleRepository $ecommerceArticleRepo)
    {
        $this->ecommerceArticleRepository = $ecommerceArticleRepo;
    }

    /**
     * Display a listing of the Ecommerce_article.
     * GET|HEAD /ecommerceArticles
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $ecommerceArticles = $this->ecommerceArticleRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($ecommerceArticles->toArray(), 'Ecommerce Articles retrieved successfully');
    }

    /**
     * Store a newly created Ecommerce_article in storage.
     * POST /ecommerceArticles
     *
     * @param CreateEcommerce_articleAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateEcommerce_articleAPIRequest $request)
    {
        $input = $request->all();

        $ecommerceArticle = $this->ecommerceArticleRepository->create($input);

        return $this->sendResponse($ecommerceArticle->toArray(), 'Ecommerce Article saved successfully');
    }

    /**
     * Display the specified Ecommerce_article.
     * GET|HEAD /ecommerceArticles/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Ecommerce_article $ecommerceArticle */
        $ecommerceArticle = $this->ecommerceArticleRepository->find($id);

        if (empty($ecommerceArticle)) {
            return $this->sendError('Ecommerce Article not found');
        }

        return $this->sendResponse($ecommerceArticle->toArray(), 'Ecommerce Article retrieved successfully');
    }

    /**
     * Update the specified Ecommerce_article in storage.
     * PUT/PATCH /ecommerceArticles/{id}
     *
     * @param int $id
     * @param UpdateEcommerce_articleAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEcommerce_articleAPIRequest $request)
    {
        $input = $request->all();

        /** @var Ecommerce_article $ecommerceArticle */
        $ecommerceArticle = $this->ecommerceArticleRepository->find($id);

        if (empty($ecommerceArticle)) {
            return $this->sendError('Ecommerce Article not found');
        }

        $ecommerceArticle = $this->ecommerceArticleRepository->update($input, $id);

        return $this->sendResponse($ecommerceArticle->toArray(), 'Ecommerce_article updated successfully');
    }

    /**
     * Remove the specified Ecommerce_article from storage.
     * DELETE /ecommerceArticles/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Ecommerce_article $ecommerceArticle */
        $ecommerceArticle = $this->ecommerceArticleRepository->find($id);

        if (empty($ecommerceArticle)) {
            return $this->sendError('Ecommerce Article not found');
        }

        $ecommerceArticle->delete();

        return $this->sendSuccess('Ecommerce Article deleted successfully');
    }
}
