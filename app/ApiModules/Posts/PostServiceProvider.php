<?php

namespace App\ApiModules\Posts;

use Illuminate\Support\ServiceProvider;
use App\ApiModules\Posts\Repositories\PostRepository;
use App\ApiModules\Posts\Repositories\Interfaces\PostRepositoryInterface;

class PostSeviceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
