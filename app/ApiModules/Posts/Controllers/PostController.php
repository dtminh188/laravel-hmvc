<?php
namespace App\ApiModules\Posts\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ApiModules\Posts\Resources\PostListResource;
use App\ApiModules\Posts\Requests\CreatePostRequest;
use App\ApiModules\Posts\Repositories\Interfaces\PostRepositoryInterface;

class PostController extends Controller {
    private $postRepo;

     /**
     * Create a new controller instance.
     *
     * @param UserRepositoryInterface $userRepo userRepo
     *
     * @return void
     */
    public function __construct(PostRepositoryInterface $postRepo) {
        $this->postRepo = $postRepo;
    }

    public function index() {
        $list = $this->postRepo->get();
        return PostListResource::collection($list);
    }

    public function show($id) {
        $post = $this->postRepo->getById($id);
        return new PostListResource($post);
    }

    public function store(CreatePostRequest $request)
    {
        $post = $this->postRepo->create($request);
        return new PostListResource($post);
    }
}
