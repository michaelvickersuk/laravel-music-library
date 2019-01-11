@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="row justify-content-center">

                @foreach ($artists as $artist)
                    <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ $artist->image }}" alt="{{ $artist->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $artist->name }}</h5>
                                <p class="card-text">{{ $artist->bio }}</p>
                                <a href="{{ route('artist.albums', [$artist->id]) }}" class="btn btn-primary">View Albums</a>
                                <form method="POST" action="{{ route('library.artist.store') }}">
                                @csrf
                                <input type="hidden" name="artist_id" value="{{ $artist->id }}">
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
