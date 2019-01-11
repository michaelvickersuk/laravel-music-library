<?php

namespace App\Http\Controllers;

use App\Entities\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewLibraryAlbumSongsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Album $albumId)
    {
        $usersSongs = Auth::user()->songs->pluck('id');
        
        $songs = $albumId->load(['songs' => function ($query) use ($usersSongs) {
               $query->whereIn('id', $usersSongs);
            }])
            ->songs;
        
        return view('library.album.songs', [
            'songs' => $songs
        ]);
    }
}
