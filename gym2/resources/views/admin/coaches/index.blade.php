@extends('layout')

@section('content')
    {{-- <h1 class="text-5xl text-gray-400 text-center">Coaches</h1> --}}
    <br>
    <div class="flex flex-wrap mt-20 gap-8  mb-10  justify-center ">

        @foreach ($coaches as $coache)
            <div class="w-80 overflow-hidden transform hover:scale-105 transition duration-300 ">
                <!-- Largeur fixe de 64 Tailwind units -->
                <div class="max-w-xs bg-gray-800 shadow-lg  rounded-lg overflow-hidden">
                    <div class="px-4 py-2">
                        <h1 class="text-gray-900 font-bold text-3xl text-gray-100 uppercase">{{ $coache->name }}</h1>
                        <p class="text-gray-600 text-sm mt-1 text-gray-400">{{ $coache->email }}</p>
                    </div>

                    <img class="h-56 w-full object-cover mt-2" src="{{ asset('storage/' . $coache->image) }}"
                        alt="Image de l'utilisateur">


                    <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                        <h1 class="px-3 py-1 bg-green-600 text-sm text-gray-100 hover:bg-green-600 font-semibold rounded">
                            COACH</h1>
                        <button
                            class="px-3 py-1 bg-green-600 text-sm text-gray-100 hover:bg-green-600 font-semibold rounded"></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>







    <div class="shrink-0 self-stretch mt-10 h-px bg-white border border-white border-solid max-md:max-w-full">
    </div>



    {{-- <h1 class="text-5xl text-white">SubUsers</h1> --}}
    <br>
    <div class="flex flex-wrap mt-20 gap-8   justify-center  mb-10">
        @foreach ($subscribedUsers as $user)
            <div class="w-80 overflow-hidden transform hover:scale-105 transition duration-300 ">
                <!-- Largeur fixe de 64 Tailwind units -->
                <div class="max-w-xs bg-gray-800 shadow-lg  rounded-lg overflow-hidden">
                    <div class="px-4 py-2">
                        <h1 class="text-gray-900 font-bold text-3xl text-gray-100 uppercase">{{ $user->name }}</h1>
                        <p class="text-gray-600 text-sm mt-1 text-gray-400">{{ $user->email }}</p>
                        <p class="px-3 py-1 bg-red-600 text-sm text-white hover:bg-green-600  rounded m-5 ">
                            <strong>Experience:</strong>
                            @if (isset($user->client->experience_level))
                                {{ $user->client->experience_level }}
                            @endif
                        </p>
                        <p class="px-3 py-1 bg-yellow-600 text-sm text-white hover:bg-green-600  rounded m-5">
                            <strong>fitness_goal:</strong>
                            @if (isset($user->client->fitness_goal))
                                {{ $user->client->fitness_goal }}
                            @endif
                        </p>


                    </div>

                    <img class="h-56 w-full object-cover mt-2" src="{{ asset('storage/' . $user->image) }}"
                        alt="Image de l'utilisateur">



                    <div class="border border-gray-300 shadow-md rounded-lg p-4 mb-4">
                        <form action="{{ route('admin.assignCoach') }}" method="POST" class="flex items-center">
                            @csrf

                            <input type="hidden" name="client"
                                value="@if (isset($user->client->id)) {{ $user->client->id }} @endif">
                            <select name="coach_id"
                                class="mr-4 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-md py-2 px-4">
                                @foreach ($coaches as $coach)
                                    <option value="{{ $coach->id }}">{{ $coach->name }}</option>
                                @endforeach
                            </select>
                          

                            <!-- Condition pour afficher le bouton "Assign Coach" ou "Modifier Coach" -->
                            @if (isset($user->client->coach_id))
                                <button type="submit"
                                    class="bg-green-700 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-md">Modifier
                                    Coach</button>
                            @else
                                <button type="submit"
                                    class="bg-yellow-700 hover:bg-yellow-500 text-white font-semibold py-2 px-6 rounded-md">Assign
                                    Coach</button>
                            @endif
                        </form>
                    </div>


                    <div class="flex items-center justify-between px-4 py-2 bg-gray-900">
                        <h1 class="px-3 py-1 bg-red-600 text-sm text-gray-100 hover:bg-green-600 font-semibold rounded">
                            TRAINER</h1>
                        <button
                            class="px-3 py-1 bg-red-600 text-sm text-gray-100 hover:bg-green-600 font-semibold rounded"></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
