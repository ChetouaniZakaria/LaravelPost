<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'my-posts';
    protected $fillable = ['title','content','slug','active'];
}
