<?php

namespace App\Http\Controllers;

use App\Entities\Song;
use Illuminate\Http\Request;

class AddLibrarySongAction extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'song_id' => 'required|numeric|exists:songs,id'
        ]);

        $request->user()
            ->songs()
            ->syncWithoutDetaching($request->song_id);
        
        return redirect()->back()
            ->with('status', 'Song added to library');
    }
}
