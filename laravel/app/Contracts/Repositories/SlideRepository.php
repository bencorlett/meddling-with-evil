<?php

namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface SlideRepository
{
    /**
     * Gets all Slides.
     */
    public function all(): Collection;
}
