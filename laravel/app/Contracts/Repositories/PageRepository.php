<?php

namespace App\Contracts\Repositories;

use App\Page;

interface PageRepository
{
    /**
     * Finds a page by the given slug.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function findBySlug(string $slug): Page;
}
