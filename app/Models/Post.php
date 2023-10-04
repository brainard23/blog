<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //casting convert the array to json or array
    protected $casts = [
        'body' => 'array',
    ];

    public function comments() 
    {
        //a post has many comments
        return $this->hasMany(Comment::class, 'post_id');
    }
}
