<?php

namespace App\ApiModules\Users\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ApiModules\Users\Repositories\Interfaces\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepo;

    /**
     * Create a new controller instance.
     *
     * @param UserRepositoryInterface $userRepo userRepo
     *
     * @return void
     */
    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function index()
    {
        dd(123);
        return $this->userRepo->getPaginate();
    }
}
