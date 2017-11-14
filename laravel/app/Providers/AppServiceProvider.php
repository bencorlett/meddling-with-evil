<?php

namespace App\Providers;

use App\Contracts;
use App\Repositories;
use GuzzleHttp\Client;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Contracts\Repositories\PageRepository::class, function (Application $app) {
            $client = new Client([
                'base_uri' => config('services.wordpress.base_uri'),
            ]);

            return new Repositories\WordPressPageRepository($client);
        });

        $this->app->bind(Contracts\Repositories\SlideRepository::class, function (Application $app) {
            $client = new Client([
                'base_uri' => config('services.wordpress.base_uri'),
            ]);

            return new Repositories\WordPressSlideRepository($client);
        });
    }
}
