@extends('layout')

@section('content')
    <div class="container mx-auto py-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="lg:col-span-1 bg-gray-300 rounded-lg shadow-lg p-6">
            <!-- Admin Statistics -->
            <h2 class="text-xl font-semibold mb-4">Admin Statistics</h2>
            <!-- Add your admin statistics here -->
        </div>

        {{-- <div class="lg:col-span-1">
            <!-- Subscription Requests -->
            <h1 class="text-3xl font-semibold text-white mb-8">Demandes d'abonnement en attente</h1>
            @foreach ($subscriptionRequests as $request)
                <!-- Sample Card -->
                <div class="relative bg-gray-600 py-6 px-6 rounded-3xl text-gray-400 w-64 my-4 shadow-xl">
                    <div class="w-full lg:w-1/3 px-4 mb-8"> <!-- Utilisation de w-full pour prendre toute la largeur sur les petits écrans et w-1/3 pour diviser en 3 colonnes sur les écrans larges -->

                    <div
                        class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-yellow-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                    </div>
                    <div class="mt-8">
                        <p class="text-xl font-semibold text-white my-2">{{ $request->user->name }}</p>
                        <div class="flex space-x-2  text-sm">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="text-gray-400">Type: {{ $request->subscription_type }}</p>
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="text-gray-400">Price: {{ $request->subscription->price }} $</p>
                        </div>
                        <div class="border-t-2"></div>

                        <div class="flex justify-between ">
                            <div class="my-2">
                                <p class="font-semibold text-base mb-2 text-gray-400">Reject</p>
                                <div class="text-base text-gray-400 font-semibold">
                                    <form action="{{ route('subscription-requests.reject', $request->id) }}" method="POST"
                                        class="ml-2">
                                        @csrf
                                        <button type="submit">
                                            <svg width="37px" height="37px" viewBox="0 0 15 15" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M2.5 2.5L12.5 12.5M7.5 14.5C3.63401 14.5 0.5 11.366 0.5 7.5C0.5 3.63401 3.63401 0.5 7.5 0.5C11.366 0.5 14.5 3.63401 14.5 7.5C14.5 11.366 11.366 14.5 7.5 14.5Z"
                                                        stroke="#f5a314"></path>
                                                </g>
                                            </svg>
                                        </button>

                                    </form>
                                </div>
                            </div>
                            <div class="my-2">
                                <p class="font-semibold text-base mb-2 text-gray-400">Approve</p>
                                <div class="flex space-x-2 ml-2">
                                    <form action="{{ route('subscription-requests.approve', $request->id) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit">


                                            <svg width="40px" height="40px" viewBox="0 0 64 64"
                                                xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: none;
                                                                stroke: #e6b505;
                                                                stroke-linecap: round;
                                                                stroke-linejoin: round;
                                                                stroke-width: 2px;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <title></title>
                                                    <g data-name="Layer 37" id="Layer_37">
                                                        <path class="cls-1"
                                                            d="M61.62,14.43a47.56,47.56,0,0,1-29.26,47.9h0l-.45-.17A47.57,47.57,0,0,1,2.23,14.08L31.92,1.58Z">
                                                        </path>
                                                        <polygon class="cls-1"
                                                            points="13.92 28.32 21.84 43.99 53.75 20.49 22.09 36.07 13.92 28.32">
                                                        </polygon>
                                                    </g>
                                                </g>
                                            </svg>

                                        </button>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}

        <div class="lg:col-span-1">
            <!-- Subscription Requests -->
            <h1 class="text-3xl font-semibold text-white mb-8">Demandes d'abonnement en attente</h1>
            <div class="flex flex-wrap"> <!-- Ajout de la classe flex-wrap pour que les cartes s'enroulent -->
                @foreach ($subscriptionRequests as $request)
                <!-- Sample Card -->
                <div class="w-full lg:w-1/2 px-4 mb-8"> <!-- Utilisation de w-full pour prendre toute la largeur sur les petits écrans et w-1/3 pour diviser en 3 colonnes sur les écrans larges -->
                    <div class="relative bg-gray-600 py-6 px-6 rounded-3xl text-gray-400 my-4 shadow-xl">
                        <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-yellow-500 left-4 -top-6">
                            <!-- svg  -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                        </div>
                        <div class="mt-8">
                            <p class="text-xl font-semibold text-white my-2">{{ $request->user->name }}</p>
                            <div class="flex space-x-2  text-sm">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p class="text-gray-400">Type: {{ $request->subscription_type }}</p>
                            </div>
                            <div class="flex space-x-2 text-gray-400 text-sm my-3">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-gray-400">Price: {{ $request->subscription->price }} $</p>
                            </div>
                            <div class="border-t-2"></div>
        
                            <div class="flex justify-between ">
                                <div class="my-2">
                                    <p class="font-semibold text-base mb-2 text-gray-400">Reject</p>
                                    <div class="text-base text-gray-400 font-semibold">
                                        <form action="{{ route('subscription-requests.reject', $request->id) }}" method="POST"
                                            class="ml-2">
                                            @csrf
                                            <button type="submit">
                                                <svg width="37px" height="37px" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M2.5 2.5L12.5 12.5M7.5 14.5C3.63401 14.5 0.5 11.366 0.5 7.5C0.5 3.63401 3.63401 0.5 7.5 0.5C11.366 0.5 14.5 3.63401 14.5 7.5C14.5 11.366 11.366 14.5 7.5 14.5Z"
                                                            stroke="#f5a314"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p class="font-semibold text-base mb-2 text-gray-400">Approve</p>
                                    <div class="flex space-x-2 ml-2">
                                        <form action="{{ route('subscription-requests.approve', $request->id) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit">
                                                <svg width="40px" height="40px" viewBox="0 0 64 64"
                                                    xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: none;
                                                                    stroke: #e6b505;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 2px;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <title></title>
                                                        <g data-name="Layer 37" id="Layer_37">
                                                            <path class="cls-1"
                                                                d="M61.62,14.43a47.56,47.56,0,0,1-29.26,47.9h0l-.45-.17A47.57,47.57,0,0,1,2.23,14.08L31.92,1.58Z">
                                                            </path>
                                                            <polygon class="cls-1"
                                                                points="13.92 28.32 21.84 43.99 53.75 20.49 22.09 36.07 13.92 28.32">
                                                            </polygon>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
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
