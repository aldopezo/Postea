<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class PostController extends Controller
{
    public function __construc()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        //$posts =Post::all();
        $posts= Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $resultado = Post::find($id);
        return view('posts.postUnico', ['post' => $resultado]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required:max:2200',
        ]);
        
        $imageName = $request->file('image')->store(
            'posts/' . Auth::id(),
            'public'
        );
        $title = $request->get('title');
        $content = $request->get('content');

        $post = $request->user()->posts()->create([
            'title' => $title,
            'image' => $imageName,
            'content' => $content,
        ]);

        return redirect()->route('post', ['id' => $post->id]);
    }
    
    public function userPosts()
    {
        $user_id = Auth::id();
        $posts = Post::where('user_id', '=', $user_id)->get();
        return view('posts.index', compact('posts'));
    }

    public function destroy()
    {
        $id = Auth::id();
        $user = User::where('_id', '=', $id)->delete();
        $posts = Post::where('user_id', '=', $id)->delete();
        return redirect()->route('allPosts');
    }
}