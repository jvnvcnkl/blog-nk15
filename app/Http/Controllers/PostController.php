<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\User;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests\CreatePostRequest;
use App\Comment;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        DB::listen(function ($query) {
            info($query->sql);
        });
        $posts = Post::published()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        // if ($post->is_published) {
        //     throw new ModelNotFoundException;
        // }

        $comment = Comment::with('post')->where('id', $post->id);

        // $post = Post::with('comments')->findorFail($post);
        return view('posts.show', compact('post', 'comment'));
    }



    public function create()
    {
        return view('posts.create');
    }

    public function store(CreatePostRequest $request)
    {
        // $post = new Post;
        // $post->title = $request->get('title');
        // $post->body = $request->get('body');
        // $post->is_published = $request->get('is_published', false);

        // $post->save();

        $data = $request->validated();

        // $newPost = Post::create($data);
        // $newPost = auth()->user()->posts()->create($data);

        $newPost = auth()->user()->posts()->create($data);

        return redirect('/posts');
    }

    public function getAuthorsPosts(User $author)
    {
        $posts = $author->posts()->where('is_published', true)->get();
        return view('posts.index', compact('posts'));
    }
}
