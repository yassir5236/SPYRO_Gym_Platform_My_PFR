@extends('layout')




{{-- @section('content')
<div class="  max-w-7xl mx-auto p-6 lg:p-8">
       <div class=" text-black flex justify-center">
            <h1>profile</h1>
        </div>

        <div class="mt-16  flex justify-center text-black">THIS IS THE profile PAGE </div> 


</div>
@endsection --}}



<!-- resources/views/profile.blade.php -->




{{-- @section('content')
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10 bg-gray-900 border-2 border-red-600 p-5 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold text-white text-center mb-5">Compléter votre profil</h2>

            <form method="POST" action="{{ route('profile.store') }}">
                @csrf

                <!-- Champs pour les informations supplémentaires -->
                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="age">Âge</label>
                    <input id="age" type="number" class="form-input w-full" name="age" required autofocus>
                </div>

                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="weight">Poids (en kg)</label>
                    <input id="weight" type="number" class="form-input w-full" name="weight" required>
                </div>

                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="height">Taille (en cm)</label>
                    <input id="height" type="number" class="form-input w-full" name="height">
                </div>

                <div class="mb-4">
                    <label class="block text-white text-sm font-bold mb-2" for="fitness_goal">Objectif de fitness</label>
                    <input id="fitness_goal" type="text" class="form-input w-full" name="fitness_goal">
                </div>

                <!-- Ajoutez d'autres champs si nécessaire -->

                <div class="flex justify-center">
                    <button type="submit" class="px-4 py-2 bg-red-800 text-white rounded hover:bg-red-600">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
@endsection --}}



@section('content')
<h1 class="text-5xl text-gray-200 text-center mt-20">Welcome your profile</h1>
<div class="flex justify-between mt-10 bg-cover bg-no-repeat" style="background-image: url('{{ asset('storage/images/HsFt0OiVv6xU1SGhBQOgKFeRp3RApzhu0IX0igt6.jpg') }}'); background-size: 100% auto;">
    <div class="min-h-screen  bg-right rounded-lg overflow-hidden"
        >
        <div class="container mx-auto ">
            <div class="max-w-md my-10 bg-gradient-to-r from-gray-900 to-gray-800   p-5 ml-20 rounded-md shadow-md">
                <h2 class="text-2xl font-semibold text-white text-center mb-5">Compléter votre profil</h2>

                <form method="POST" action="{{ route('profile.store') }}" class="space-y-4 ">
                    @csrf

                    <!-- Champs pour les informations supplémentaires -->
                    <div class="flex flex-col">
                        <label class="text-gray-500 text-sm font-bold mb-2" for="age">Age</label>
                        <input id="age" type="number"
                            class="form-input bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
                            name="age" value="{{ $client->age ?? '' }}" required autofocus>
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-500 text-sm font-bold mb-2" for="weight">Poids (kg)</label>
                        <input id="weight" type="number"
                            class="form-input bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
                            name="weight" value="{{ $client->weight ?? '' }}" required>
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-500 text-sm font-bold mb-2" for="height">Taille (cm)</label>
                        <input id="height" type="number"
                            class="form-input bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
                            name="height" value="{{ $client->height ?? '' }}">
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-500 text-sm font-bold mb-2" for="fitness_goal">Fitness goals</label>
                        <select id="fitness_goal"
                            class="form-select bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
                            name="fitness_goal">
                            <option value="perte_de_poids">Perte de poids</option>
                            <option value="prise_de_masse">Prise de masse</option>
                            <option value="amélioration_de_la_condition_physique">Amélioration de la condition physique
                            </option>
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label class="text-gray-500 text-sm font-bold mb-2" for="experience_level">Experience</label>
                        <select id="experience_level"
                            class="form-select bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
                            name="experience_level">
                            <option value="débutant">Débutant</option>
                            <option value="intermédiaire">Intermédiaire</option>
                            <option value="avancé">Avancé</option>
                        </select>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="px-4 py-2 bg-red-800 text-white rounded hover:bg-red-600 transition duration-300">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <div class="mt-10">
        <div
            class="max-w-xs container bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl shadow-lg transform transition duration-500 hover:scale-105 hover:shadow-2xl">
            <div>
                <span
                    class="text-gray-200 text-xs font-bold rounded-lg bg-green-500 inline-block mt-4 ml-4 py-1.5 px-4 cursor-pointer">Coach</span>
                <h1
                    class="text-2xl mt-2 ml-4 font-bold text-gray-200 cursor-pointer hover:text-gray-100 transition duration-100">
                    {{ $assignCoach->name }}</h1>
                <p class="ml-4 mt-1 mb-2 text-red-500 font-semibold hover:underline cursor-pointer"># Spyro</p>
            </div>
            <img class="w-full cursor-pointer" src="{{ asset('storage/' . $assignCoach->image) }}" alt="" />
            <div class="flex p-4 justify-between">
                <div class="flex items-center space-x-2">
                    {{-- @dd($client->image) --}}
                    <img class="w-10 rounded-full" src="{{ asset('storage/' . $clientss->image) }}" alt="sara" />
                    <h2 class="text-gray-200 font-bold cursor-pointer">{{ $clientss->name }}</h2>
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

</div>
@endsection
