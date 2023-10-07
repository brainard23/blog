<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'body',
    ];
    //casting one of its funciton is convert the array to json or array
    protected $casts = [
        'body' => 'array',
    ];

    public function getTitleUpperCaseAttribute() 
    {
        //this is accesor. accessor always starts with get
        return strtoupper($this->title);
    }

    public function setTitleAttribute($value)
    {
        //mutation always starts with set
        $this->attributes['title'] = strtolower($value);
    }

    public function comments() 
    {
        //a post has many comments
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function users() 
    {

        //post_user is the pivot table
        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }
}
