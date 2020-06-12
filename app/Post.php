<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'title' => 'required',
        'name' => 'required',
        'gender' => 'required',
        'year' => 'required',
        'department' => 'required',
        'body' => 'required',
    );
}
