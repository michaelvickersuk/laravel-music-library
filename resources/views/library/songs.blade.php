@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link active" href="{{ route('library') }}">Songs</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('library.artists') }}">Artists</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('library.albums') }}">Albums</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('library.loved') }}">Loved</a></li>
        </ul>
        
        <div class="row justify-content-center">
            <dl>
            @foreach ($songs as $song)
                <dt>{{ $song->name }}</dt>
                <dt>{{ $song->album->artist->name }}</dt>
                <dd>{{ $song->album->name }}</dd>
                <dd>
                    <form method="POST" action="{{ route('library.song.loved', ['songId' => $song->id]) }}">
                        @method('patch')
                        @csrf
                        <button type="submit" 
                            class="btn btn-sm {{ $song->library->loved ? 'btn-danger' : 'btn-outline-secondary' }}"
                            title="{{ $song->library->loved ? 'Don\'t love it' : 'Love it' }}">
                            &hearts;
                        </button>
                    </form>
                </dd>
            @endforeach
            </dl>
        </div>
    </div>
@endsection
