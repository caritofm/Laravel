<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = "notes";

    //campos cumplimintado, se pueden manipular
    protected $fillable = ["title", "description", "deadline", "done"];
    
    //los que se guarden autoamticamente
    //protected $guarded = []


    //elementos que se mantienen ocultos
    protected $hidden = ['password'];
    
    
}
