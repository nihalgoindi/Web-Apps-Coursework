@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="pb-10 ">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>

<div class="w-4/5  m-auto pt-20">
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <label class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-lg 
        font-extrabold py-3.5 px-5 rounded-3xl">
            <span class="mt-2 text-base leading-normal">
                Upload a file
            </span>
            <input type="file" name="image" class="hidden">
        </label>
        
        <input type="text" name="title" placeholder="Title..." 
        class="bg-transparent block border-none w-full h-20 text-gray-700 text-6xl p-8">

        <textarea name="Body" placeholder=" Body"
        class="py-20 bg-transparent block border-none w-full h-60 text-gray-700 text-xl"></textarea>

        <div class="bg-grey-lighter pt-15">
            <button type="button" class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-lg 
            font-extrabold py-3 px-11 rounded-3xl">
                Cancel
            </button>
            <button type="submit" class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-lg 
            font-extrabold py-3 px-5 rounded-3xl">
                Submit Post
            </button>
            
        </div>
        
       

    
    </form>
</div>

@endsection()