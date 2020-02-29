<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Auth;

class AdminController extends Controller
{
    public function __invoke()
    {
        if (Auth::check() === false) {
            return redirect()->route('auth.login');
        }

        // $posts = factory(Post::class, 10)->make();

        return view('admin.index', [
            // 'posts' => $posts,
        ]);
    }

}
