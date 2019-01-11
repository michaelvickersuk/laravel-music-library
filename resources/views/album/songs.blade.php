@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
            
        <div class="row justify-content-center">
            <dl>
            @foreach ($songs as $song)
                <dt>{{ $song->track_number }} {{ $song->name }}</dt>
                <dd>{{ $song->duration }} seconds</dd>
                <dd>
                    <form method="POST" action="{{ route('library.song.store') }}">
                        @csrf
                        <input type="hidden" name="song_id" value="{{ $song->id }}">
                        <button type="submit" 
                            class="btn btn-sm btn-outline-secondary"
                            title="Add to library">
                            +
                        </button>
                    </form>
                </dd>
            @endforeach
            </dl>
        </div>
    </div>
@endsection
