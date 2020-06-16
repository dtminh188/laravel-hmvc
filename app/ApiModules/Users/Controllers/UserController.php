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
        return response()->json($this->userRepo->getPaginate());
    }

    public function store(Request $request)
    {
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
        ];
        return response()->json($this->userRepo->create($user));
    }

    public function show($id)
    {
        $user = $this->userRepo->firstWithPosts($id, ['id', 'name', 'email']);

        return response()->json($user);
    }
}
