<?php

namespace App\ApiModules\Posts\Repositories\Interfaces;

interface PostRepositoryInterface
{
    public function get();
    public function getById(int $id);
}
