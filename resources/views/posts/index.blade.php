@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="pb-10 py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

<div class="pt-16 w-4/5 m-auto">
    <a href="/posts/create" class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
        Create Post
    </a>   
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto pt-5 py-15 border-b border-gray-200">
    <div class="pt-8 pb-10 pl-20">
        <img src="https://cdn.pixabay.com/photo/2015/09/29/14/23/dog-963970_960_720.jpg" width="500" height="500" alt="">
    </div>

    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            My favourite treats
        </h2>
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">ReggieTheRussell
            </span>, 1 day ago
        </span>
        
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, porro facilis beatae eos veritatis odio iure excepturi fuga d
            olorum suscipit possimus, obcaecati earum explicabo, quos doloremque fugiat officiis voluptatibus eveniet!
            Lorem ipsum dolor sit amet consectetur adipisicing elit.Eos nesciunt temporibus nam mollitia aspernatur dicta aliquid! 
            Voluptatibus soluta accusantium aliquam molestiae laborum commodi, est praesentium! 
        </p>

        <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Keep Reading
        </a>

    </div>
</div>

<div>
    <ul>
        @foreach ($posts as $post)
            <li> <a href="{{ route('posts.show', [ 'id' => $post->id ] )}}">{{$post->title}}</a></li>
        @endforeach
    </ul>
</div>

@endsection
