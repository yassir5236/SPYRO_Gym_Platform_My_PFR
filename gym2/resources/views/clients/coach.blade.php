@extends('layout')
@section('content')
    <!-- Create By Joker Banny -->
    <div class="min-h-screen bg-black flex justify-center items-center">
        <div
            class="max-w-xs container bg-white rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
            <div>
                <span
                    class="text-white text-xs font-bold rounded-lg bg-green-500 inline-block mt-4 ml-4 py-1.5 px-4 cursor-pointer">Coach</span>
                <h1
                    class="text-2xl mt-2 ml-4 font-bold text-gray-800 cursor-pointer hover:text-gray-900 transition duration-100">
                    {{ $assignCoach->name }}</h1>
                <p class="ml-4 mt-1 mb-2 text-red-500 font-semibold hover:underline cursor-pointer"># Spyro</p>
            </div>
            <img class="w-full cursor-pointer" src="{{ asset('storage/' . $assignCoach->image) }}" alt="" />
            <div class="flex p-4 justify-between">
                <div class="flex items-center space-x-2">
                    {{-- @dd($client->image) --}}
                    <img class="w-10 rounded-full" src="{{ asset('storage/' . $client->image) }}" alt="sara" />
                    <h2 class="text-gray-800 font-bold cursor-pointer">{{ $client->name }}</h2>
                </div>
                <div class="flex space-x-2">
                    <div class="flex space-x-1 items-center">

                    </div>
                    <div class="flex space-x-1 items-center">
                        <span>
                            <svg fill="#ffa200" width="50px" height="50px" viewBox="0 0 15 15" id="fitness-centre"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path id="daec40ff-71f5-4432-9d75-dcba7b9c1b89"
                                        d="M14.5,7V8h-1v2h-1v1H11V8H4v3H2.5V10h-1V8H.5V7h1V5h1V4H4V7h7V4h1.5V5h1V7Z"></path>
                                </g>
                            </svg>
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
