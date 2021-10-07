<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function unPublished()
    {
        return self::where('is_published', false);
    }
}
