<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateNewsletterAPIRequest;
use App\Http\Requests\API\UpdateNewsletterAPIRequest;
use App\Models\Newsletter;
use App\Repositories\NewsletterRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class NewsletterController
 * @package App\Http\Controllers\API
 */

class NewsletterAPIController extends AppBaseController
{
    /** @var  NewsletterRepository */
    private $newsletterRepository;

    public function __construct(NewsletterRepository $newsletterRepo)
    {
        $this->newsletterRepository = $newsletterRepo;
    }

    /**
     * Display a listing of the Newsletter.
     * GET|HEAD /newsletters
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $newsletters = $this->newsletterRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($newsletters->toArray(), 'Newsletters retrieved successfully');
    }

    /**
     * Store a newly created Newsletter in storage.
     * POST /newsletters
     *
     * @param CreateNewsletterAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsletterAPIRequest $request)
    {
        $input = $request->all();

        $newsletter = $this->newsletterRepository->create($input);

        return $this->sendResponse($newsletter->toArray(), 'Newsletter saved successfully');
    }

    /**
     * Display the specified Newsletter.
     * GET|HEAD /newsletters/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Newsletter $newsletter */
        $newsletter = $this->newsletterRepository->find($id);

        if (empty($newsletter)) {
            return $this->sendError('Newsletter not found');
        }

        return $this->sendResponse($newsletter->toArray(), 'Newsletter retrieved successfully');
    }

    /**
     * Update the specified Newsletter in storage.
     * PUT/PATCH /newsletters/{id}
     *
     * @param int $id
     * @param UpdateNewsletterAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNewsletterAPIRequest $request)
    {
        $input = $request->all();

        /** @var Newsletter $newsletter */
        $newsletter = $this->newsletterRepository->find($id);

        if (empty($newsletter)) {
            return $this->sendError('Newsletter not found');
        }

        $newsletter = $this->newsletterRepository->update($input, $id);

        return $this->sendResponse($newsletter->toArray(), 'Newsletter updated successfully');
    }

    /**
     * Remove the specified Newsletter from storage.
     * DELETE /newsletters/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Newsletter $newsletter */
        $newsletter = $this->newsletterRepository->find($id);

        if (empty($newsletter)) {
            return $this->sendError('Newsletter not found');
        }

        $newsletter->delete();

        return $this->sendSuccess('Newsletter deleted successfully');
    }
}
