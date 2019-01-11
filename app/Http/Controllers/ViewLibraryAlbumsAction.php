<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewLibraryAlbumsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $albums = Auth::user()
            ->songs()
            ->with('album.artist')
            ->get()
            ->unique('album')
            ->pluck('album');

        return view('library.albums', [
            'albums' => $albums
        ]);
    }
}
