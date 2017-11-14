<?php

namespace App\Repositories;

use App\Contracts\Repositories\PageRepository as Contract;
use App\Page;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class WordPressPageRepository implements Contract
{
    /**
     * @var Client
     */
    private $client;

    /**
     * Creates a new WordPress Page Repository.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function findBySlug(string $slug): Page
    {
        try {
            $response = $this->client->get(sprintf('pages?slug=%s', $slug));
        } catch (ClientException $e) {
            if (404 !== $e->getResponse()->getStatusCode()) {
                throw $e;
            }

            throw $this->notFound($slug);
        }

        $payload = json_decode($response->getBody(), true);

        if (empty($payload)) {
            throw $this->notFound($slug);
        }

        return new Page([
            'title' => $payload[0]['title']['rendered'],
            'content' => $payload[0]['content']['rendered'],
        ]);
    }

    /**
     * Returns a "Model Not Found" exception.
     */
    private function notFound(string $slug): ModelNotFoundException
    {
        return tap(new ModelNotFoundException(), function (ModelNotFoundException $e) use ($slug) {
            $e->setModel(Page::class, $slug);
        });;
    }
}
