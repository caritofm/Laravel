<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Tag extends Model
{
    protected $guarded = [];

    public function posts(): MorphToMany
    {
        return $this -> morphedByMany(Post::class, 'taggable'); //asociado a numeros o elementos
    }

    public function videos():MorphToMany
    {
        return $this -> morphedByMany(Video::class, 'taggable');
    }
}
