@extends('layout')

@section('content')
    @foreach($songs as $song)
        <div class="entry">
            <div class="author">
                <div class="avatar">
                    <img src="/images/avatar.png" alt="avatar">
                </div>
                <p>{{ $song->sharer->name }}</p>
            </div>
            <div class="bubble">
                <a class="play-button" href="#"><span></span></a>
                <div class="song">
                    <p class="artist">{{ $song->artist }}</p>
                    <p class="title">{{ $song->title }}</p>
                </div>
            </div>
        </div>
    @endforeach
@endsection