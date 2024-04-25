@extends('layout')
@section('content')

<div class="background-image" style="background-image: url('{{ asset('storage/images/client_home.png') }}'); background-size: cover; background-position: center;">

    <div class="flex flex-wrap justify-center gap-x-6 mt-20">
        @foreach ($subscriptions as $subscription)
            <section class="flex flex-col justify-center antialiased text-gray-600 p-4 sm:w-full md:w-1/2 lg:w-1/3 xl:xl:w-96
            ">
                <div class="">
                    <!-- Card -->
                    <div class="max-w-xs mx-auto">
                        <div class="relative w-full flex flex-col shadow-lg rounded-lg p-5 border border-solid border-gray-300" style="background-color:rgb(49, 33, 30)">
                            <!-- Popular badge -->
                            <div class="absolute top-0 right-5">
                                <div class="text-xs inline-flex font-semibold bg-green-100 text-white rounded-full text-center px-3 py-1.5 shadow-sm transform -translate-y-1/2" style="background-color:rgb(215, 50, 4)">
                                    {{ $subscription->type }}
                                </div>
                            </div>
                            <!-- Card header -->
                            <header class="pb-4 mb-4 border-b border-indigo-200 border-opacity-30">
                                <!-- Product name -->
                                <h3 class="text-xl font-extrabold text-indigo-50 leading-snug mb-2">{{ $subscription->title }}</h3>
                                <!-- Price -->
                                <div class="font-extrabold mb-1">
                                    <span class="text-2xl text-indigo-200">$</span>
                                    <span class="text-4xl text-indigo-50">{{ $subscription->price }}</span>
                                </div>
                                <!-- Description -->
                                <div class="text-indigo-200">{{ $subscription->duration }}. Perfect for small businesses</div>
                            </header>
                            <!-- Features list -->
                            <ul class="text-indigo-200 text-sm space-y-2 flex-grow mb-6">
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>{{ $subscription->advantage_1 }}</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>{{ $subscription->advantage_2 }}</span>
                                </li>
                            </ul>

                            <a href="{{ route('register') }}" class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-300 ease-in-out w-full bg-red-600 hover:bg-red-400 text-white focus:outline-none focus-visible:ring-2">Register Now</a>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>

</div>





















   
@endsection
