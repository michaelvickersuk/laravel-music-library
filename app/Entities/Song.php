<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Song
 * @package App
 * @property int    $id
 * @property string $name
 * @property int    $duration
 * @property int    $album_id
 * @property int    $track_number
 */
class Song extends Model
{
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User')
            ->as('library')
            ->withPivot('loved');
    }
}
