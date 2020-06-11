<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\RepositoryInterface;

abstract class Repository implements RepositoryInterface
{
    // model property on class instances
    protected $model;

    /**
     * Create a new controller instance.
     *
     * @return string
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * Get model.
     *
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model.
     *
     * @return string
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get all instances of model
     *
     * @return void
     */
    public function all()
    {
        return $this->model->all();
    }
}
