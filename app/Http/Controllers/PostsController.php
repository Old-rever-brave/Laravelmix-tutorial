<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Post;
use App\Http\Requests\CreatePost;


class PostsController extends Controller
{
    public function index() {
      $posts = Post::latest()->get();   
      $posts = Post::latest()->paginate(5);
      return view('posts.index')->with('posts', $posts);
    }

     public function show(Post $post) {
      return view('posts.show')->with('post', $post);
    }

     public function create() {
      return view('posts.create');
    }

     public function store(Request $request) {
      $post = new Post();
      $post->category = $request->category;
      $post->fulstack = $request->fulstack;
      $post->frontend = $request->frontend;
      $post->sqls = $request->sqls;
      $post->gengo = $request->gengo;
      $post->serveres = $request->serveres;
      $post->os = $request->os;
      $post->save();
      return redirect('/');
    }

    public function destroy(Post $post) {
     $post->delete();
     return redirect('/');
   }

}
