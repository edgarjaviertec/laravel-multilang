<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts')
            ->with('posts', $posts);
    }

    public function show($slug)
    {
        $post = Post::whereTranslation('slug', $slug)->firstOrFail();
        if ($post->translate()->where('slug', $slug)->first()->locale != app()->getLocale()) {
            return redirect()->route('blog.post', $post->translate()->slug);
        }
        return view('post')
            ->with('post', $post);
    }
}