@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link" href="{{ route('library') }}">Songs</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('library.artists') }}">Artists</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{ route('library.albums') }}">Albums</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('library.loved') }}">Loved</a></li>
        </ul>
        
        <div class="row justify-content-center">
            <dl>
            @foreach ($albums as $album)
                <dt><a href="{{ route('library.album.songs', [$album->id]) }}">{{ $album->name }}</a></dt>
                <dd>{{ $album->artist->name }}</dd>
                <dd>{{ $album->release_date }}</dd>
            @endforeach
            </dl>
        </div>
    </div>
@endsection
