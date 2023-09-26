<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
{
    return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
//getPaginateByLimit()はPost.phpで定義したメソッドです
}

    public function show(Post $post)
{
        return view('post/show')->with(['post'=>$post]);
    
}
    public function create()
{
        return view('posts/create');
        
}
    
    

}
?>