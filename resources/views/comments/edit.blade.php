@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="pb-10 ">
        <h1 class="text-6xl">
            Edit Comment
        </h1>
    </div>
</div>

<!-- Errors -->

@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-2/6 mb-4 text-gray-50 bg-red-700 rounded-2xl
                py-4">
                    {{ $error }}
                </li>     
            @endforeach
        </ul>
    </div>
@endif


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