<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Post;

class PostController extends Controller
{
    protected $post;

    public function __construct(Post $post)
    {
    	$this->post = $post;
    }

    public function index()
    {
    	// Get all the post
    	$posts = $this->post->all();

        // return view('someview', compact('posts'));
        return $posts;
    }

    public function show($id)
    {
    	$post = $this->post->findById($id);

        // return view('someview', compact('post'));
        return $post;
    }
}
