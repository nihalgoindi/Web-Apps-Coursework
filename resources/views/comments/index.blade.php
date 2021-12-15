@extends('layouts.app')

@section('content')
    <h2>Comments</h2>

    <div id="root">
        <p>@{{ message }}</p>
    </div>

    <script>
        var app = new Vue({
            el: "#root",
            data: {
                message: "It works",
            },
        });
    </script>
@endsection