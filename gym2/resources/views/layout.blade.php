<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />

</head>

<body class="font-sans antialiased bg-black  m-0 p-0">



    <div class="flex flex-col px-5 text-xl font-medium">
        <nav>
            <div class="flex content-end gap-5 items-center w-full max-md:flex-wrap max-md:max-w-full mt-5 ">
                <div class="flex-auto self-stretch my-auto text-3xl font-extrabold bg-clip-text text-red-600">
                    SPYRO
                </div>


                    <div class=" flex gap-5 justify-between self-stretch my-auto mt-2 text-white text-opacity-90 ">



                <!-- Burger Menu -->
                <div class="lg:hidden">
                    <button id="burger-menu" class="focus:outline-none">
                        <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>




                <div id="burger-menu-list" class="hidden lg:flex gap-5 justify-between">


                        @guest
                            <div
                                class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                <a href="{{ route('showWelcome') }}" class="p-2">Home</a>
                            </div>
                            <div
                                class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                <a href="{{ route('gallery-images.index') }}" class="p-2">Gallery</a>
                            </div>

                            <div
                                class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                <a href="{{ route('subscription') }}">Subscription</a>
                            </div>


                            <div
                                class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                <a href="{{ route('about') }}" class="p-2">About Us</a>
                            </div>

                            <div
                                class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                <a href="{{ route('login') }}" class="p-2">Login</a>
                            </div>
                            <div
                                class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                <a href="{{ route('register') }}" class="p-2">Register</a>
                            </div>


                        @endguest












                        @auth
                            @if (auth()->user()->role === 'admin')
                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('admin.getStatistics') }}" class="p-2">Dashboard</a>
                                </div>
                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('gallery-images.index') }}" class="p-2">Gallery</a>
                                </div>
                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    Community</div>
                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('admin.subscriptions.index') }}">Subscription</a>
                                </div>
                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('adminCoaches') }}">Users</a>
                                </div>
                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('products.index') }}">Market place</a>
                                </div>
                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('categories.index') }}">Category_Product</a>
                                </div>
                                <div class="bg-red-800 p-2 px-8 rounded-md ">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class=" ">Logout</button>
                                    </form>
                                </div>
                            @endif


                            @if (auth()->user()->role === 'user')

                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('clients.showProfileForm') }}">Profile</a>
                                </div>

                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    Community</div>
                                {{-- <div class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105"><a href="{{route('admin.subscriptions.index')}}">Subscription</a></div> --}}
                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('subscriptions.index') }}">Subscription</a>
                                </div>

                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('indexProductClient') }}">Market place</a>
                                </div>



                                <div
                                    class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                    <a href="{{ route('showContact') }}">Contact
                                        Us
                                    </a>
                                </div>

                                <div
                                    class=" transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">

                                    <a href="{{ route('clients.product.panier') }}" class="py-1">
                                        <svg width="40px" height="40px" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ffa200">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill="#ff9b29" d="M18 15H7L5.5 6H21l-3 9z"></path>
                                                <path stroke="#ff9b29" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="M3 3h2l.5 3m0 0L7 15h11l3-9H5.5z"></path>
                                                <circle cx="8" cy="20" r="1" stroke="#ff9b29"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                </circle>
                                                <circle cx="17" cy="20" r="1" stroke="#ff9b29"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                </circle>
                                            </g>
                                        </svg>
                                    </a>
                                </div>

                                <div class="bg-red-800 p-2 px-8 rounded-md ">
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" class=" ">Logout</button>
                                    </form>
                                </div>
                            @endif
                            @endif

                            @auth
                                @if (auth()->user()->role === 'coach')
                                    <div
                                        class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                        <a href="{{ route('coach.dashboard_coach') }}">Dashboard</a>
                                    </div>

                                    <div
                                        class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                        <a href="{{ route('showtrainers') }}">Trainers</a>
                                    </div>

                                    <div
                                        class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                        Community
                                    </div>

                                    <div
                                        class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">
                                        <a href="{{ route('coach.specialization.form') }}">specialization</a>
                                    </div>



                                    <div class="bg-red-800 p-2 px-8 rounded-md ">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class=" ">Logout</button>
                                        </form>
                                    </div>
                                @endif
                            @endauth





                        </div>
                        @guest
                            <div style="background-color: rgb(194 65 12);" class=" text-white p-2 px-8 rounded-md ">
                                <a href="{{ route('showContact') }}"
                                    class=" transition duration-300 ease-in-out hover:text-red-100 transform hover:scale-105 ">Contact
                                    Us
                                </a>
                            </div>
                        @endguest
            </nav>
        </div>

        </div>




        @if (session('success'))
            <div class="  mt-5 bg-gray-200 border  border-green-600 text-green-700 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold text-green-600">Succès!</strong>
                <span class="block sm:inline text-green-600 ">{{ session('success') }}</span>
            </div>
        @endif
        @if (session('error'))
            <div class="bg-red-100 border  text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Erreur!</strong>
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <div class="container mx-auto flex-1 mt-8">
            @yield('content')
        </div>



        <script>
            const burgerMenuBtn = document.getElementById('burger-menu');
            const burgerMenuList = document.getElementById('burger-menu-list');

            burgerMenuBtn.addEventListener('click', () => {
                burgerMenuList.classList.toggle('hidden');
            });
        </script>


    </body>

    </html>
