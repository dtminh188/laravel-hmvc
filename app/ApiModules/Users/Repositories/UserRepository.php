<?php

namespace App\ApiModules\Users\Repositories;

use App\Repositories\Repository;
use App\ApiModules\Users\Models\User;
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
            ->verifiedEmail()
            ->paginate(5);
    }

    public function create($user)
    {
        return $this->model->create($user);
    }

    public function firstWithPosts($id, $columns = ['*'])
    {
        return $this->model->select($columns)
            ->with(['posts' => function ($query) {
                $query->select(['id', 'title', 'description', 'image', 'user_id']);
            }])
            ->find($id);
    }
}
