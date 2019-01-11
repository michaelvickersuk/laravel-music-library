<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Artist
 * @package App
 * @property int         $id
 * @property string      $name
 * @property string|null $image
 * @property string|null $bio
 * @property string      $created_at
 * @property string      $updated_at
 */
class Artist extends Model
{
    protected $fillable = [
        'name',
        'image',
        'bio',
    ];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
