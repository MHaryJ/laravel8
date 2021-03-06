<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "POST",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $isi)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $isi
        ]);
    }
}
