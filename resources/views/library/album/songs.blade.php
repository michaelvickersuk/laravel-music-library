@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <dl>
            @foreach ($songs as $song)
                <dt>{{ $song->track_number }} {{ $song->name }}</dt>
                <dd>{{ $song->duration }} seconds</dd>
            @endforeach
            </dl>
        </div>
    </div>
@endsection
