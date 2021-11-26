extends('layouts.app')

@section('title', 'Post Details')


@section('content')
    <ul>
        <li>Caption: {{$post->name}}</li>
        <li>Number of Likes: {{$post->number_of_likes}}</li>
        <li>Number of Comments: {{$post->number_of_comments}}</li>
        <li>Posted by: {{$post->account->username}}</li>   
    </ul>
@endsection