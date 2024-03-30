<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>

<body class="font-sans antialiased bg-black  m-0 p-0">



    <div class="flex flex-col px-5 text-xl font-medium">
        <nav>
            <div class="flex content-end gap-5 items-center w-full max-md:flex-wrap max-md:max-w-full mt-5 ">
                <div class="flex-auto self-stretch my-auto text-3xl font-extrabold bg-clip-text text-red-600">
                    SPYRO
                </div>
                <div class=" flex gap-5 justify-between self-stretch my-auto mt-2 text-white text-opacity-90 ">



                    @guest
                    <div class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">Classes</div>
                    <div class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">Coaches</div>
                    <div class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105"><a href="{{ route('about') }}" class="p-2">About Us</a></div>
                    <div class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105">Gallery</div>
                    <div class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105"><a href="{{ route('login') }}" class="p-2">Login</a></div>
                    <div class="pt-2 transition duration-300 ease-in-out hover:text-red-500 transform hover:scale-105"><a href="{{ route('register') }}" class="p-2">Register</a></div>
                    {{-- <div class="pt-2 transition duration-300 ease-in-out hover:text-blue-500 transform hover:scale-105"><a href="{{ route('showContact') }}" class="p-2">Contact</a></div> --}}
                @endguest
                
                


                    @auth

                        {{-- <div class="pt-2" >Classes</div> --}}
                        <div class="pt-2">Community</div>
                        <div class="pt-2">Subscription</div>
                        <div class="pt-2">Program</div>
                        <div class="pt-2">Market place</div>
                        <div class="pt-2"><a href="{{ route('about') }}" class="p-2">About Us</a></div>
                        <div class="bg-red-800 p-2 px-8 rounded-md ">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class=" ">Logout</button>
                            </form>
                        </div>


                    </div>



                @endauth




            </div>
            @guest
            <div  style="background-color: rgb(194 65 12);" class=" text-white p-2 px-8 rounded-md " 
>
                <form action="#" method="">
                    @csrf
                    <button type="submit" class=" transition duration-300 ease-in-out hover:text-red-100 transform hover:scale-105 ">Contact Us </button>
                </form>
            </div>
            @endguest
        </nav>
    </div>





    <div id="burger-menu-overlay" class="hidden lg:hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-50">
        <div class="container mx-auto flex items-center justify-center h-full ">
            <div class="text-white text-2xl">

                <button id="close-burger-menu-btn" class="text-white focus:outline-none">
                    <i class="fas fa-times text-3xl"></i>
                </button>


                <div class="mt-8">
                    <a href=""
                        class="block py-2 text-xl hover:text-gray-300 transition duration-300 ease-in-out">Services</a>
                    @guest
                        <a href=""
                            class="block py-2 text-xl hover:text-gray-300 transition duration-300 ease-in-out">Login</a>
                        <a href=""
                            class="block py-2 text-xl hover:text-gray-300 transition duration-300 ease-in-out">Register</a>
                    @endguest
                    @auth
                        <a href=""
                            class="block py-2 text-xl hover:text-gray-300 transition duration-300 ease-in-out">Add
                            Service</a>
                        <form action="" method="post">
                            @csrf
                            <button type="submit"
                                class="block py-2 text-xl hover:text-gray-300 transition duration-300 ease-in-out">Déconnexion</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('burger-menu-btn').addEventListener('click', function() {
            document.getElementById('burger-menu-overlay').classList.toggle('hidden');
        });


        document.getElementById('close-burger-menu-btn').addEventListener('click', function() {
            document.getElementById('burger-menu-overlay').classList.add('hidden');
        });
    </script>



    <div class="container mx-auto flex-1 mt-8">
        @yield('content')
    </div>






</body>

</html>
