<?php

namespace App\Http\Controllers\Api\v1;

use App\Exceptions\AppErrorException;
use App\Post;
use App\Service\PostService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    use ApiResponse;
    /**
     * @var PostService
     */
    private $postService;

    /**
     * PostController constructor.
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        return $this->showAll(Post::all());
    }



    public function apost($id)
    {
        $post = Post::find($id);
        if($post==null){
            throw new AppErrorException("post not found");
        }
        return $post;
    }

    public function insert(Request $request)
    {
        $this->postService->storePost($request);
        return $this->showMessage("post create successfully");
    }
}
