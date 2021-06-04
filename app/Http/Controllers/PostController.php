<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('post'));
    }

    public function show($id)
    {
        $resultado = Post::find($id);
        return view('postUnico', ['post' => $resultado]);
    }
    
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required:max:120',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'content' => 'required:max:2200',
        ]);

        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();
        $title = $request->get('title');
        $content = $request->get('content');

        $post = new Post();
        $post->title = $title;
        $post->image = 'img/' . $imageName;
        $post->content = $content;
        $post->save();

        $request->image->move(public_path('img'), $imageName);

        return redirect()->route('post', ['id' => $post->id]);
    }
    ////////////////////////////////////////////////////////////
    //public function today()
    //{
      //  $posts = Post::all();
       // $posts = Post::wheretoday('registered_at', '2021-05-26')->get();
       // return view('today', compact('posts')) 
    //}
    
}