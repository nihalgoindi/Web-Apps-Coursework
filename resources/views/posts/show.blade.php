@extends('layouts.app')

@section('title')
<div class="w-4/5 m-auto text-left">
    <div class="pb-10 py-15 border-b border-gray-200">
        <h1 class="text-6xl font-bold">
            {{ $post->title }}
        </h1>
    </div>
</div>
@endsection

@section('content')

<div class="w-4/5 m-auto pt-20">
    <div class="pt-8 pb-10 pl-20">
        <img src="{{ asset('post_images/' . $post->image_path) }}" width="500" height="500" alt="">
    </div>
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->account->username }}</span>
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-20 leading-8 font-light">
        {{ $post->body }}
    </p>


    <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments</h3>

    <div class="w-5/5 m-auto pt-2 overflow-y-auto h-40 pb-4">

        @foreach ($comments as $comment)
        <div class="space-y-4">
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                        src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                        alt="">
                </div>

                <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                    <strong>{{ $comment->account->username }}</strong> <span class="text-xs text-gray-400"></span>
                    <p class="text-sm">
                        {{ $comment->text }}
                    </p>
                    @if((isset(Auth::user()->id)) && (Auth::user()->account->id == $comment->account_id))
                    <span class="float-right">
                        <a href={{ route('comments.edit', ['id'=> $comment->id]) }}
                            class="text-gray-700 italic hover:text-gray-900 pb-1 border-b-2">
                            Edit
                        </a>
                    </span>

                    <span class="float-right">
                        <form method="POST" action="{{ route('comments.delete', ['id' => $comment->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 pr-3" type="submit">
                                Delete
                            </button>
                        </form>
                    </span>
                    @endif
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="w-4/5  m-auto pt-2">
    <form method="POST" action="{{ route('comments.store', ['post_id' => $post->id]) }}" enctype="multipart/form-data"
        class="space-y-5">
        @csrf
        <h3 class="mb-4 text-lg font-semibold text-gray-900">Leave a Comment</h3>
        <div class="mt-3 p-3 w-full">
            <textarea name="text" rows="3" class="border p-2 rounded w-full" placeholder="Write Comment..."
                value="{{ old('text') }}"></textarea>
        </div>
        <div class="bg-grey-lighter pt-15">
            <button type="submit" class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-sm 
            font-extrabold py-3 px-5 rounded-3xl">
                Submit Comment
            </button>
        </div>
    </form>
</div>

@endsection()