@extends('layout')
@section('content')



<div class="background-image" style=" background-image: url('{{ asset("storage/images/client_home.png") }}');
background-size: cover;
background-position: center;">

    {{-- <img loading="lazy" src="{{ asset('storage/images/Rectangle 13.png') }}"> --}}

    <div class="flex flex-between flex-wrap justify-center gap-x-6 mt-20">
        <section class="flex flex-col justify-center antialiased text-gray-600 min-h-screen p-4  w-96 ">
            <div class="h-full">
                <!-- Card -->
                <div class="max-w-xs mx-auto">
                    <div class="relative w-96 flex flex-col h-full shadow-lg rounded-lg p-5 border border-solid border-gray-300"
                        style="background-color:rgb(49, 33, 30)">
                        <!-- Popular badge -->
                        <div class="absolute top-0 right-5">
                            <div class="text-xs inline-flex font-semibold bg-green-100 text-white rounded-full text-center px-3 py-1.5 shadow-sm transform -translate-y-1/2"
                                style="background-color:rgb(215, 50, 4)">
                                Pro</div>
                        </div>
                        <!-- Card header -->
                        <header class="pb-4 mb-4 border-b border-indigo-200 border-opacity-30">
                            <!-- Logo -->

                            <!-- Product name -->
                            <h3 class="text-xl font-extrabold text-indigo-50 leading-snug mb-2">Small Business</h3>
                            <!-- Price -->
                            <div class="font-extrabold mb-1"><span class="text-2xl text-indigo-200">$</span><span
                                    class="text-4xl text-indigo-50">179</span></div>
                            <!-- Description -->
                            <div class="text-indigo-200">Billed Yearly. Perfect for small businesses</div>
                        </header>
                        <!-- Features list -->
                        <ul class="text-indigo-200 text-sm space-y-2 flex-grow mb-6">
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                        </ul>
                        <button
                            class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-300 ease-in-out w-full bg-red-600 hover:bg-red-400 text-white focus:outline-none focus-visible:ring-2">
                            Call To Action
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex flex-col justify-center antialiased text-gray-600 min-h-screen p-4  w-96">
            <div class="h-full">
                <!-- Card -->
                <div class="max-w-xs mx-auto">
                    <div class="relative flex flex-col h-full w-96  shadow-lg rounded-lg p-5 border border-solid border-gray-300"
                        style="background-color:rgb(81, 63, 59)">
                        <!-- Popular badge -->
                        <div class="absolute top-0 right-5">
                            <div class="text-xs inline-flex font-semibold bg-green-100 text-white rounded-full text-center px-3 py-1.5 shadow-sm transform -translate-y-1/2"
                                style="background-color:rgb(215, 50, 4)">
                                Most Popular</div>
                        </div>
                        <!-- Card header -->
                        <header class="pb-4 mb-4 border-b border-indigo-200 border-opacity-30">
                            <!-- Logo -->

                            <!-- Product name -->
                            <h3 class="text-xl font-extrabold text-indigo-50 leading-snug mb-2">Small Business</h3>
                            <!-- Price -->
                            <div class="font-extrabold mb-1"><span class="text-2xl text-indigo-200">$</span><span
                                    class="text-4xl text-indigo-50">179</span></div>
                            <!-- Description -->
                            <div class="text-indigo-200">Billed Yearly. Perfect for small businesses</div>
                        </header>
                        <!-- Features list -->
                        <ul class="text-indigo-200 text-sm space-y-2 flex-grow mb-6">
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                        </ul>
                        <button
                            class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-300 ease-in-out w-full bg-red-600 hover:bg-red-400 text-white focus:outline-none focus-visible:ring-2">
                            Call To Action
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="flex flex-col justify-center antialiased text-gray-600 min-h-screen p-4  w-96">
            <div class="h-full">
                <!-- Card -->
                <div class="max-w-xs mx-auto">
                    <div class="relative flex flex-col w-96 h-full  shadow-lg rounded-lg p-5 border border-solid border-gray-300"
                        style="background-color:rgb(28, 13, 10)">
                        <!-- Popular badge -->
                        <div class="absolute top-0 right-5">
                            <div class="text-xs inline-flex font-semibold bg-green-100 text-white rounded-full text-center px-3 py-1.5 shadow-sm transform -translate-y-1/2"
                                style="background-color:rgb(215, 50, 4)">
                                Vip</div>
                        </div>
                        <!-- Card header -->
                        <header class="pb-4 mb-4 border-b border-indigo-200 border-opacity-30">
                            <!-- Logo -->

                            <!-- Product name -->
                            <h3 class="text-xl font-extrabold text-indigo-50 leading-snug mb-2">Small Business</h3>
                            <!-- Price -->
                            <div class="font-extrabold mb-1"><span class="text-2xl text-indigo-200">$</span><span
                                    class="text-4xl text-indigo-50">179</span></div>
                            <!-- Description -->
                            <div class="text-indigo-200">Billed Yearly. Perfect for small businesses</div>
                        </header>
                        <!-- Features list -->
                        <ul class="text-indigo-200 text-sm space-y-2 flex-grow mb-6">
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                </svg>
                                <span>Lorem ipsum dolor sit amet consecte.</span>
                            </li>
                        </ul>
                        <button
                            class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-300 ease-in-out w-full bg-red-600 hover:bg-red-400 text-white focus:outline-none focus-visible:ring-2">
                            Call To Action
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>



    <div class="shrink-0 self-stretch mt-10 h-px bg-white border border-white border-solid max-md:max-w-full">
    </div>
    <div class="flex overflow-hidden relative flex-col items-center px-16 pt-16 pb-6  min-h-[411px] max-md:px-5">
        <img loading="lazy" srcset="..." class="object-cover absolute inset-0 size-full" />
        <div class="flex relative flex-col items-center w-full max-w-[1200px] max-md:max-w-full">
            <div
                class="text-4xl font-extrabold bg-clip-text text-red-600  bg-[linear-gradient(90deg,#FF4300_-6.33%,#FF6400_103.92%)]">
                SPYRO
            </div>
            <div
                class="mt-12 text-xl font-medium leading-8 text-center text-white text-opacity-80 w-[876px] max-md:mt-10 max-md:max-w-full">
                Join us today and experience the transformative power of our fitness
                classes. Don't wait to start your fitness journey. Take the first step
                towards a healthier, stronger you. Let's sweat, have fun, and make fitness
                a way of life together!
            </div>
            <div class="flex gap-4 mt-9">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/3aca9be230183a2a6898520776404b0331eb1332818a1bc2f8239136694eedc1?"
                    class="shrink-0 aspect-square w-[35px]" />
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/9b20cd0d4b798f46fd0632946f2b31333a4503105cc5cce8baefe56247ab9b0a?"
                    class="shrink-0 aspect-square w-[35px]" />
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/a21e7ea4312026044cd9da9b1b10040d65a9d22e1ddc94a9aa112719b65e5ddd?"
                    class="shrink-0 aspect-square w-[35px]" />
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/3e285806a368101f59320414abc2af9fa0ed975c2ebf6502617b0f19a4440da3?"
                    class="shrink-0 aspect-square w-[35px]" />
            </div>
            <div class="shrink-0 self-stretch mt-10 h-px bg-white border border-white border-solid max-md:max-w-full">
            </div>
            <div class="flex gap-1.5 mt-6 text-base font-medium leading-7 text-center text-white text-opacity-70">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/09dac7e45971ed66cf6243472a0faf4ad3d3654a6c3924264c222493411c2cea?"
                    class="shrink-0 w-5 aspect-square" />
                <div class="flex-auto my-auto">SPYRO 2023. All rights reserved.</div>
            </div>
        </div>
    </div>
@endsection
