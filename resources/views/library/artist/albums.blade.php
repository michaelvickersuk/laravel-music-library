@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <dl>
            @foreach ($albums as $album)
                <dt>{{ $album->name }}</dt>
                <dd>{{ $album->release_date }}</dd>
            @endforeach
            </dl>
        </div>
    </div>
@endsection
