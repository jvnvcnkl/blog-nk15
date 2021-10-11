<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'is_published'];
    public static function unPublished()
    {
        return self::where('is_published', false);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
