<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\CommentNotification;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            "content" => "required:max:250",
        ]);

        $comment = new Comment();
        $comment->user_id = $request->user()->id;
        $comment->content = $request->get('content');

        $post = Post::find($request->get('post_id'));
        $post->comments()->save($comment);

        $user_id = $post->user_id;

        User::find($user_id)
            ->notify(new CommentNotification($comment));

        return redirect()->route('post', ['id' => $request->get('post_id')]);
    }

    public function notificaciones(Request $request){
        $user = $request->user();
        $notificaciones = $user->unreadNotifications;
        return view('posts.notification', ['notificaciones' => $notificaciones]);
    }
}