<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facades\App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\Post\PostStoreRequest;

class PostController extends Controller
{
    public function index(User $user)
    {
        $posts = $user->posts()->orderBy('updated_at', 'desc')->get();
        return view('post', ['user' => $user, 'posts' => $posts]);
    }

    public function store(PostStoreRequest $request)
    {
        try {
            $image = Post::storeImage($request);
            $data = $request->all();
            $data['photo'] = $image->basename;
            
            Post::saveOrUpdate($data);

            return redirect()->route('post', auth()->user()->username);
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
        
        

    }
}
