@extends('layouts.app')

@section('title', 'Animal Details')


@section('content')
    <ul>
        <li>Title: {{$post->title}}</li>
        <li>Caption: {{$post->caption}}</li>
        <li>Is Deleted: {{$post->is_deleted ?? '0'}}</li>
        <li>Account: {{$post->account->username}}</li> 
        
    </ul>

    <a href="{{ route('posts.index') }}">Back</a>
    
@endsection