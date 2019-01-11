<?php

namespace App\Http\Controllers;

use App\Entities\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewLibraryArtistAlbumsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Artist $artistId)
    {
        $usersSongs = Auth::user()->songs->pluck('id');
        
        $albums = $artistId->load(['albums' => function ($query) use ($usersSongs) {
                $query->whereHas('songs', function ($query) use ($usersSongs) {
                    $query->whereIn('id', $usersSongs);
                });
            }])
            ->albums;
        
        return view('library.artist.albums', [
            'albums' => $albums
        ]);
    }
}
