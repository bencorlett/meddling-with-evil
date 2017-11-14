<?php

namespace App\Repositories;

use App\Contracts\Repositories\SlideRepository as Contract;
use App\Slide;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;

class WordPressSlideRepository implements Contract
{
    /**
     * @var Client
     */
    private $client;

    /**
     * Creates a new WordPress Slide Repository.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function all(): Collection
    {
        $response = $this->client->get('slides?_embed');

        return collect(json_decode($response->getBody(), true))
            ->filter(function (array $payload) {
                return isset($payload['_embedded']['wp:featuredmedia']);
            })
            ->map(function (array $payload) {
                return new Slide([
                    'caption' => $payload['title']['rendered'],
                    'image_url' => $payload['_embedded']['wp:featuredmedia'][0]['source_url'],
                ]);
            });
    }
}
