<?php

namespace App\Http\Controllers;

use App\Entities\Album;
use Illuminate\Http\Request;

class ListAlbumsAction extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('album.list', [
            'albums' => Album::all(),
        ]);
    }
}
