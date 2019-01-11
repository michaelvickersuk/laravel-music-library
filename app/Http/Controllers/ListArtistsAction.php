<?php

namespace App\Http\Controllers;

use App\Entities\Artist;
use Illuminate\Http\Request;

class ListArtistsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('artist.list', [
            'artists' => Artist::all(),
        ]);
    }
}
