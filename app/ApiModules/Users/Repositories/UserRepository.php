<?php

namespace App\ApiModules\Users\Repositories;

use App\User;
use App\Repositories\Repository;
use App\ApiModules\Users\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository extends Repository implements UserRepositoryInterface
{
    /**
     * Get model.
     *
     * @return string
     */
    public function getModel()
    {
        return User::class;
    }

    public function getPaginate()
    {
        return $this->model
            ->paginate(5);
    }
}
