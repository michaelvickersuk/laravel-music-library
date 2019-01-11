@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link" href="{{ route('library') }}">Songs</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('library.artists') }}">Artists</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('library.albums') }}">Albums</a></li>
            <li class="nav-item"><a class="nav-link active" href="{{ route('library.loved') }}">Loved</a></li>
        </ul>
        
        <div class="row justify-content-center">
            <dl>
            @foreach ($songs as $song)
                <dt>{{ $song->name }}</dt>
                <dd>{{ $song->album->artist->name }}</dd>
                <dd>{{ $song->album->name }}</dd>
            @endforeach
            </dl>
        </div>
    </div>
@endsection
