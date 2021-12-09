@extends('layouts.app')

@section('title')
    Create Post
@endsection()

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <p>Title: <input type="text" name="name"
            value="{{ old('name') }}"></p>

        <p>Body: <input type="text" name="weight"
            value="{{ old('weight') }}"></p>

        <p>Account Id: <input type="text" name="account_id"
            value="{{ old('account_id') }}"></p>

        <input type="submit" value="Submit">

        <a href="{{ route('posts.index') }}">Cancel</a>
      
    </form>
@endsection()