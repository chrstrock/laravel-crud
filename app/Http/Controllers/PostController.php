<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Function to list the data
     */
    public function list()
    {
        $posts = Post::orderByDesc('created_at')->with('user')->get();
        return view ('list', [
            'posts' => $posts
        ]);
    }
    /**
     * The create function
     */
    public function create()
    {
        $users = User::all();
        
        return view('create', [
            'users' => $users
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'user_id' => ['integer', Rule::exists('users', 'id')],
            'content' => ['string']
        ]);

        Post::create($data);

        return redirect('/');
    }

    public function edit(Post $post)
    {
       
        return view('edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'content' => ['string']
        ]);

        $post->update($data);

        return redirect('/');
    }

    

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');
    }
}
