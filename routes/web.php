<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/artists', 'ListArtistsAction')->name('artists');
    Route::get('/artists/{artistId}/albums', 'ListArtistAlbumsAction')->name('artist.albums');
    Route::get('/albums', 'ListAlbumsAction')->name('albums');
    Route::get('/albums/{albumId}/songs', 'ViewAlbumSongsAction')->name('album.songs');
    Route::get('/library', 'ViewLibraryAction')->name('library');
    Route::post('/library/song', 'AddLibrarySongAction')->name('library.song.store');
    Route::post('/library/album', 'AddLibraryAlbumAction')->name('library.album.store');
    Route::post('/library/artist', 'AddLibraryArtistAction')->name('library.artist.store');
    Route::get('/library/artists', 'ViewLibraryArtistsAction')->name('library.artists');
    Route::get('/library/artists/{artistId}/albums', 'ViewLibraryArtistAlbumsAction')->name('library.artist.albums');
    Route::get('/library/albums', 'ViewLibraryAlbumsAction')->name('library.albums');
    Route::get('/library/albums/{albumId}/songs', 'ViewLibraryAlbumSongsAction')->name('library.album.songs');
    Route::patch('/library/loved/{songId}', 'AddLovedSongsAction@update')->name('library.song.loved');
    Route::get('/library/loved', 'ViewLovedSongsAction')->name('library.loved');
});

