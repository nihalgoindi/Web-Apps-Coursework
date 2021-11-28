@extends('layouts.app')

@section('title', 'Animal Details')


@section('content')
    <ul>
        <li>Title: {{$post->title}}</li>
        <li>Caption: {{$post->caption}}</li>
        <li>Number of Likes: {{$post->number_of_likes ?? '0'}}</li>
        <li>Number of Comments: {{$post->number_of_comments ?? '0' }}</li>
        <li>Account: {{$post->account->username}}</li> 
        
    </ul>

    <a href="{{ route('posts.index') }}">Back</a>
    
@endsection