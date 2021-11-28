@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <p>Posts within this community!</p>
    <ul>
        @foreach ($posts as $post)
            <li> <a href="{{ route('posts.show', [ 'id' => $post->id ] )}}">{{$post->title}} by 
            {{$post->account->username}}</a></li>
        @endforeach
    </ul>

    <a href="{{ route('posts.create') }}">Create Post</a>
@endsection

@if (session('message'))
    <p><b>{{ session('message') }}</b></p>
@endif