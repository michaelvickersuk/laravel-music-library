<?php

namespace App\Http\Controllers;

use App\Entities\Artist;
use Illuminate\Http\Request;

class ListArtistAlbumsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $artistId)
    {
        $artist = Artist::findOrFail($artistId);

        return view('artist.albums', [
            'albums' => $artist->albums()->orderBy('release_date', 'desc')->get(),
        ]);
    }
}
