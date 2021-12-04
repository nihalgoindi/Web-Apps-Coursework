@extends('layouts.app')

@section('title')
    Create Post
@endsection

@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <p>Title: <input type="text" name="title"
            value="{{ old('title') }}"></p>

        <p>Caption: <input type="text" name="caption"
            value="{{ old('caption') }}"></p>

        <p>Is Deleted: <input type="text" name="is_deleted"
            value="{{ old('is_deleted') }}"></p>

        <p>Account Id: <input type="text" name="account_id"
            value="{{ old('account_id') }}"></p>

        <input type="submit" value="Submit">

        <a href="{{ route('posts.index') }}">Cancel</a>
      
    </form>
@endsection