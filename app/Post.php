<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'is_published', 'user_id'];
    public static function unPublished()
    {
        return self::with('comments', 'user')->where('is_published', false);
    }
    public static function published()
    {
        return self::with('comments', 'user')->where('is_published', true);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
