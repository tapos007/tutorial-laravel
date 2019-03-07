<?php
/**
 * Created by PhpStorm.
 * User: tapos
 * Date: 3/8/2019
 * Time: 12:56 AM
 */

namespace App\Service;


use App\Exceptions\AppErrorException;
use App\Post;
use Illuminate\Http\Request;

class PostService
{

    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $data = $request->all();
        $data["user_id"] = 1;

        $post = Post::create($data);

        if($post==null){
            throw new AppErrorException("something wrong");

        }
        return $post;
    }


    public function updatePost($id,Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->description = $request->description;

        if(!$post->isDirty()){
            throw new AppErrorException("u cant chagne anything");
        }

        $post->save();
        return $post;
    }
}
