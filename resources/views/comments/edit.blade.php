@extends('layouts.app')

@section('title')
<div class="w-4/5 m-auto text-center">
    <div class="pb-10 py-15 border-b border-gray-200">
        <h1 class="text-6xl font-bold">
            Edit Comment
        </h1>
    </div>
</div>
@endsection

@section('content')




<div class="w-4/5  m-auto pt-20">
    <form method="POST" action="{{ route('comments.update', ['id' => $comment->id])}}" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

            <textarea name="text" rows="3" class="border p-2 rounded w-full">
            {{ $comment->text }}
        </textarea>

        <div class="bg-grey-lighter pt-15">
            <form action="{{ route('posts.index') }} method="GET">
                <a href="{{ route('posts.index') }}">
                    <button type="button" class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-lg 
                    font-extrabold py-3 px-11 rounded-3xl">
                        Cancel
                    </button>
                </a>
                
            </form>
            
            <button type="submit" class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-lg 
            font-extrabold py-3 px-5 rounded-3xl">
                Update Comment
            </button>
            
        </div>
    
    </form>
</div>

@endsection()