<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewLibraryArtistsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $artists = Auth::user()
            ->songs()
            ->with('album.artist')
            ->get()
            ->unique('album.artist')
            ->pluck('album.artist');
        
        return view('library.artists', [
            'artists' => $artists
        ]);
    }
}
