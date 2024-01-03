<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        //$posts = Post::get(); Todos
        //$post = Post::first(); El primero
        //$post = Post::find(18); Buscar por:
        $posts = Post::latest()->paginate(); //Desendente y Paginanción

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
