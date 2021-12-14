@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->account->username }}</span>
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->body }}
    </p>
</div>

<h2>Comments</h2>

<div id="root">
    <ul>
        <li>

        </li>
    </ul>
    <h3>New Comment</h3>
    Comment: <input type="text" id="input" v-model="newComment">
    <button @click="createComment">
        Create
    </button>
</div>

<script>
    var app = new Vue({
        el: "#root",
        data: {
            comments: [],
            newComment: '',
        },
        methods: {
            createEnclosure: function(){
                axios.post("{{ route ('api.comments.store') }}",
                {
                    name: this.newComment    
                })
                .then(response => {
                    this.comments.push(response.data);
                    this.newComment = '';
                })
                .catch(response => {
                    console.log(response);
                })
            }
        },
        mounted() {
            axios.get("{{ route ('api.enclosures.index') }}")
            .then(response => {
                this.comments = response.data;
            })
            .catch(response => {
                console.log(response);
            })
        },
    });
</script>


@endsection()