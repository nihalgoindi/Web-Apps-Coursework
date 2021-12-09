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

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-1.5 border-b
    border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/07/09/19/32/dog-838281__340.jpg" width=700 alt="">
        </div>

        <div class="m=auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Finding it difficult to catch your tail?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Ipsum, ad animi iure commodi enim saepe necessitatibus quo hic. 
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Ipsum, ad animi iure commodi enim saepe necessitatibus quo hic. 
            </p>

            <a href="/blog"
            class="uppercase bg-blue-500 text-gray-100 text-xl
            font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Error debitis adipisci provident exercitationem, perspiciatis ut dolore quibusdam aliquam qui est voluptatum, incidunt eveniet? 
            Nostrum fugiat quibusdam facilis fugit voluptates reiciendis.
        </p>
    </div>

       <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-blue-500 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    TREATS
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Esse aliquid ipsum, nemo id laboriosam nulla et consequatur anecessitatibus quod, 
                    est alias ea nam fuga molestiae sapiente earum itaque nesciunt!
                </h3>

                <a  href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2015/09/29/14/23/dog-963970_960_720.jpg" width="700" alt="">
        </div>
    </div>
@endsection