@extends('layouts.app')

@section('content')
    <div
        style=
            "background-image: url('https://cdn.pixabay.com/photo/2018/03/31/06/31/dog-3277416_960_720.jpg');
            background-position: center center;
            background-repear: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            height: 600px;"
        class="grid grif-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:margin.auto w-4/5 block
            text-center">
                <h1 class="sm-text-white text-5xl uppercase font-bold
                text-shadow-md pb-14">
                   Are you looking for blogs posted by other dogs?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold
                    text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
@endsection