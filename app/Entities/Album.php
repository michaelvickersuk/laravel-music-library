<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Album
 * @package App
 * @property int         $id
 * @property string      $name
 * @property string      $release_date
 * @property string|null $artwork
 */
class Album extends Model
{
    protected $dates = [
        'release_date',
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
