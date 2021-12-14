@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="pb-10 py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

<div class="pt-16 w-4/5 m-auto">
    <a href="/posts/create" class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        Create Post
    </a>   
</div>


@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto pt-5 py-15 border-b border-gray-200">
        <div class="pt-8 pb-10 pl-20">
            <img src="{{ asset('post_images/' . $post->image_path) }}" width="500" height="500" alt="">
        </div>

        <div>
            <h2 class="text-gray-700 font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>
            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->account->username }}
                </span>
            </span>
            
            <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                {{ $post->body }}
            </p>

            <a href={{ route('posts.show', [ 'id' => $post->id ] ) }} class="uppercase bg-blue-500 hover:bg-blue-600 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

            @if((isset(Auth::user()->id)) && (Auth::user()->account->id == $post->account_id))
                <span class="float-right">
                    <a href={{ route('posts.edit', [ 'id' => $post->id ] ) }} 
                       class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                        Edit Post
                    </a>
                </span>
                
                <span class="float-right">
                    <form method="POST" action="{{ route('posts.delete', ['id' => $post->id ] ) }}">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500 pr-3" type="submit">
                            Delete Post
                        </button>
                    </form>
                </span>
            @endif
        </div>
    </div>

@endforeach

{{ $posts->links() }}


@endsection
