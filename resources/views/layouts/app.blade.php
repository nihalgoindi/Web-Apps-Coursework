<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blogs for Dogs</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-800 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <p class="text-lg font-semibold text-gray-100 no-underline">
                        Blogs for Dogs
                    </p>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/home">Home</a>
                    <a class="no-underline hover:underline" href="/blog">Blog</a>
                    <a class="no-underline hover:underline" href="/tags">Tags</a>
                    @guest
                    <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <span>{{ Auth::user()->account->username }}</span>

                    <a href="{{ route('logout') }}" class="no-underline hover:underline" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                    @endguest
                </nav>
            </div>
        </header>


        @yield('content')
        

        <div>
            <footer class="bg-gray-800 py-20 mt-20">
                <div class="sm:grid grid-cols-3 w-4/5 pb-10 m-auto border-b-2
                border-gray-700">
                    <div>
                        <h3 class="text-l sm:font-bold text-gray-100">
                            Pages
                        </h3>

                        <ul class="py-4 sm:text-s pt-4 text-gray-400">
                            <li class="pb-1">
                                <a href="/">
                                    Home
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/blog">
                                    Blog
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/login">
                                    Login
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/register">
                                    Register
                                </a>
                            </li>
                        </ul>
                    </div>


                    <div>
                        <h3 class="text-l sm:font-bold text-gray-100">
                            Find Us
                        </h3>

                        <ul class="py-4 sm:text-s pt-4 text-gray-400">
                            <li class="pb-1">
                                <a href="/">
                                    What we do
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/blog">
                                    Address
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/">
                                    Phone
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-l sm:font-bold text-gray-100">
                            Recent Posts
                        </h3>

                        <ul class="py-4 sm:text-s pt-4 text-gray-400">
                            <li class="pb-1">
                                <a href="/">
                                    Why we love dogs
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/blog">
                                    Why we love treats
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/">
                                    Why you should get a dog
                                </a>
                            </li>
                            <li class="pb-1">
                                <a href="/">
                                    Why dogs are the best
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="w-25 w-4/5 pb-3 m-auto text-xs text-gray-100 pt-6">
                    Copyright 2021 Blogs for Dogs. All rights reserved.
                </p>
            </footer>
        </div>
    </div>
</body>

</html>