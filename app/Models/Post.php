<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    protected $guarded = [];


    //RELACION MORFICAS MUCHOS 

    public function image(): MorphMany
    {
        return $this -> morphMany(Image::class, 'imageable');
    }

    public function tags():MorphToMany
    {
        return $this -> morphToMany(Tag::class, 'taggable');
    }
}
