@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <p>The Posts within this Community!</p>
    <ul>
        @foreach ($posts as $post)
            <li> <a href="{{ route('posts.show', [ 'id' => $post->id ] )}}">{{$post->name}}</a></li>
        @endforeach
    </ul>

    <a href="{{ route('posts.create') }}">Create Post</a>
@endsection

@if (session('message'))
    <p><b>{{ session('message') }}</b></p>
@endif