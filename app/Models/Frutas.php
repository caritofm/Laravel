<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frutas extends Model
{
    protected $guarded = [];


    protected $fillable = ['name', 'color'];

    // un atajo
}
