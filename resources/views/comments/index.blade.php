@extends('layouts.app')

@section('content')
    <h2>Comments</h2>

    <div id="root">
        <p>@{{ comment }}</p>
        <ul>
            <li v-for="comment in comments">@{{ comment }}</li>
        </ul>
    </div>

    <script>
        var app = new Vue({
            el: "#root",
            data: {
                comments: ['Comment 1', 'Comment 2'],
            },
        });
    </script>
@endsection