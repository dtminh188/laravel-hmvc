<?php

namespace App\ApiModules\Posts\Repositories;

use App\ApiModules\Posts\Models\Post;
use App\Repositories\Repository;
use App\ApiModules\Posts\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository extends Repository implements PostRepositoryInterface
{
    /**
     * Get model.
     *
     * @return string
     */
    public function getModel()
    {
        return Post::class;
    }

    public function get()
    {
        return $this->model->paginate(20);
    }

    public function getById(int $id)
    {
        return $this->model->findOrFail($id);
    }

    public function create($request)
    {
        return $this->model->create($request->all());
    }
}
