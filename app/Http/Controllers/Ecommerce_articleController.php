<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEcommerce_articleRequest;
use App\Http\Requests\UpdateEcommerce_articleRequest;
use App\Repositories\Ecommerce_articleRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Response;

class Ecommerce_articleController extends AppBaseController
{
    /** @var  Ecommerce_articleRepository */
    private $ecommerceArticleRepository;

    public function __construct(Ecommerce_articleRepository $ecommerceArticleRepo)
    {
        $this->ecommerceArticleRepository = $ecommerceArticleRepo;
    }

    /**
     * Display a listing of the Ecommerce_article.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ecommerceArticles = $this->ecommerceArticleRepository->paginate(10);

        return view('ecommerce_articles.index')
            ->with('ecommerceArticles', $ecommerceArticles);
    }

    /**
     * Show the form for creating a new Ecommerce_article.
     *
     * @return Response
     */
    public function create()
    {
        return view('ecommerce_articles.create');
    }

    /**
     * Store a newly created Ecommerce_article in storage.
     *
     * @param CreateEcommerce_articleRequest $request
     *
     * @return Response
     */
    public function store(CreateEcommerce_articleRequest $request)
    {
        $input = $request->all();

        $ecommerceArticle = $this->ecommerceArticleRepository->create($input);


        $dir = "Ecommerce/Articles/$ecommerceArticle->id/images";
        Storage::disk('public')->put("$dir/". $request->file('images')->getClientOriginalName() , File::get($request->file('images')));

        $ecommerceArticle->images = $request->file('images')->getClientOriginalName();
        $ecommerceArticle->save();

        Flash::success('Ecommerce Article saved successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified Ecommerce_article.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ecommerceArticle = $this->ecommerceArticleRepository->find($id);

        if (empty($ecommerceArticle)) {
            Flash::error('Ecommerce Article not found');

            return redirect(route('ecommerceArticles.index'));
        }

        return view('ecommerce_articles.show')->with('ecommerceArticle', $ecommerceArticle);
    }

    /**
     * Show the form for editing the specified Ecommerce_article.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ecommerceArticle = $this->ecommerceArticleRepository->find($id);

        if (empty($ecommerceArticle)) {
            Flash::error('Ecommerce Article not found');

            return redirect(route('ecommerceArticles.index'));
        }

        return view('ecommerce_articles.edit')->with('ecommerceArticle', $ecommerceArticle);
    }

    /**
     * Update the specified Ecommerce_article in storage.
     *
     * @param int $id
     * @param UpdateEcommerce_articleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEcommerce_articleRequest $request)
    {
        $ecommerceArticle = $this->ecommerceArticleRepository->find($id);

        if (empty($ecommerceArticle)) {
            Flash::error('Ecommerce Article not found');

            return redirect(route('ecommerceArticles.index'));
        }

        $ecommerceArticle = $this->ecommerceArticleRepository->update($request->all(), $id);

        Flash::success('Ecommerce Article updated successfully.');

        return redirect()->back();
    }

    /**
     * Remove the specified Ecommerce_article from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ecommerceArticle = $this->ecommerceArticleRepository->find($id);

        if (empty($ecommerceArticle)) {
            Flash::error('Ecommerce Article not found');

            return redirect(route('ecommerceArticles.index'));
        }

        $this->ecommerceArticleRepository->delete($id);

        Flash::success('Ecommerce Article deleted successfully.');

        return redirect()->back();
    }
}
