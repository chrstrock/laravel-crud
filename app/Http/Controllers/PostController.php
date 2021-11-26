<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Function to list the data
     */
    public function list()
    {
        $user = Auth::user();
        $posts = Post::where('user_id','=', Auth::id())->get();
        
        return view ('list', [
            'posts' => $posts

        ]);
    }
    /**
     * The create function
     */
    public function create()
    {
        $user = Auth::user();
        
        return view('create', [
            'user' => $user
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'user_id' => ['integer', Rule::exists('users', 'id')],
            'content' => ['string']
        ]);

        Post::create($data);

        return redirect('/list');
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

        return redirect('/list');
    }

    

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/list');
    }
}
