<?php

namespace App\Http\Controllers\Voyager;

use App\Post;
use Illuminate\Http\Request;
use \TCG\Voyager\Http\Controllers\VoyagerBaseController;

class PostController extends VoyagerBaseController
{
    public function getPosts()
    {
        return view("posts", ["posts"=>Post::all()]);
    }

    public function getPost($id)
    {
        $post = Post::findOrFail($id);
        dd($post->created_at);
        return view("post", ["post"=>$post]);
    }
}
