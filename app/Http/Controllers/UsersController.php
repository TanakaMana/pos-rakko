<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Post;

class UsersController extends Controller
{
    public function show()
    {
        $name = Auth::user()->name;
        $posts = Post::where('user_id', Auth::user()->id);

        return view('users.show')->with($name, $posts);
    }

    public function edit()
    {
    }
}
