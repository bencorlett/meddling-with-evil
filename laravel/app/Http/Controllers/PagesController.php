<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\PageRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * @var PageRepository
     */
    private $pages;

    /**
     * Creates a new Controller instance.
     */
    public function __construct(PageRepository $pages)
    {
        $this->pages = $pages;
    }


    /**
     * Shows all posts.
     */
    public function show($slug): View
    {
        $page = $this->pages->findBySlug($slug);

        return view('page')->with('page', $page);
    }
}
