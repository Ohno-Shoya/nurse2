<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comment;

class CommentController extends Controller
{
    public function add()
    {
        return view('admin.comment.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Comment::$rules);
        
        $comment = new Comment;
        $form = $request->all();
        
        unset($form['_token']);
        
        $comment->fill($form);
        $comment->save();
        
        redirect('admin/comment/create');
    }
}
