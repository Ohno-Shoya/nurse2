<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::all()->sortByDesc('updated_at');
        
         if (count($posts) > 0) {
            $headline = $posts->shift();
        } else {
            $headline = null;
        }
        
        return view('comment.index', ['headline' => $headline, 'posts' => $posts]);
    }
}
