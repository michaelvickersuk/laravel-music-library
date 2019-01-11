<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function songs()
    {
        return $this->belongsToMany('App\Entities\Song')
            ->as('library')
            ->withPivot('loved');
    }
    
    public function lovedSongs()
    {
        return $this->belongsToMany('App\Entities\Song')
            ->wherePivot('loved', 1)
            ->as('library')
            ->withPivot('loved');
    }
}
