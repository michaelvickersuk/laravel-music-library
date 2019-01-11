<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewLovedSongsAction extends Controller
{
    public function __invoke(Request $request)
    {
        return view('library.loved', [
            'songs' => Auth::user()->lovedSongs->load('album.artist')
        ]);
    }
}
