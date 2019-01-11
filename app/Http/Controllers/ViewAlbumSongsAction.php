<?php

namespace App\Http\Controllers;

use App\Entities\Album;
use Illuminate\Http\Request;

class ViewAlbumSongsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $albumId)
    {
        $album = Album::findOrFail($albumId);

        return view('album.songs', [
            'songs' => $album->songs()->orderBy('track_number', 'asc')->get(),
        ]);
    }
}
