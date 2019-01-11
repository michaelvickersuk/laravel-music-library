@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="row justify-content-center">
            @foreach ($albums as $album)
                <div class="col-sm-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $album->artwork }}" alt="{{ $album->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $album->name }}</h5>
                            <p class="card-text">{{ $album->release_date->format('F Y') }}</p>
                            <a href="{{ route('album.songs', [$album->id]) }}" class="btn btn-primary">View Songs</a>
                            <form method="POST" action="{{ route('library.album.store') }}">
                                @csrf
                                <input type="hidden" name="album_id" value="{{ $album->id }}">
                                <button type="submit" 
                                    class="btn btn-sm btn-outline-secondary mt-1"
                                    title="Add to library">
                                    +
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
