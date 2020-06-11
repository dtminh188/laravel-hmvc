<?php

namespace App\ApiModules\Users;

use Illuminate\Support\ServiceProvider;
use App\ApiModules\Users\Repositories\UserRepository;
use App\ApiModules\Users\Repositories\Interfaces\UserRepositoryInterface;

class UserSeviceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
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
