<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'slug', 'summary', 'body'];

    /**
     * change specific posts' url to slug
     * @return string slug
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
