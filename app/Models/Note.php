<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = "notes";

    //campos cumplimintado, se pueden manipular
    protected $fillable = ["title", "description"];
    
    //los que se guarden autoamticamente
    //protected $guarded = []

    
    
}
