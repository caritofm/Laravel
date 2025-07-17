<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string, int>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'age',
        'address',
        'zip-code'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /*public function phones():HasMany
    {
        return $this -> hasMany(Phone::class, 'user_id', 'id'); // devuelve todos los phone
    }

       public function roles():BelongsToMany
    {
        return $this -> belongsToMany((Role::class));
    }

    public function phone_sims(): HasManyThrough
    {
        return $this -> hasManyThrough(Sim::class, Phone::class);
    }*/

    public function image(): MorphOne
    {
        return $this -> morphOne(Image::class, 'imageable');
    }
}
