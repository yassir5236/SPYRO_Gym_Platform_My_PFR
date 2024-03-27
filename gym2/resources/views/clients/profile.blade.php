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
<div class="min-h-screen bg-cover bg-no-repeat bg-right rounded-lg overflow-hidden"
    style="background-image: url('{{ asset('storage/images/3eWVfZUEAUBaUkwKVlVQxt7NDK3L16fsG1TjHQEV.jpg') }}'); background-size: 50% auto;">




    <div class="container mx-auto ">
    <div class="max-w-md my-10 bg-gradient-to-r from-gray-900 to-gray-800   p-5 ml-20 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold text-white text-center mb-5">Compléter votre profil</h2>

        <form method="POST" action="{{ route('profile.store') }}" class="space-y-4 ">
            @csrf

            <!-- Champs pour les informations supplémentaires -->
            <div class="flex flex-col">
                <label class="text-gray-500 text-sm font-bold mb-2" for="age">Age</label>
                <input id="age" type="number" class="form-input bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
                    name="age" value="{{ $client->age ?? '' }}" required autofocus>
            </div>

            <div class="flex flex-col">
                <label class="text-gray-500 text-sm font-bold mb-2" for="weight">Poids (kg)</label>
                <input id="weight" type="number" class="form-input bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
                    name="weight" value="{{ $client->weight ?? '' }}" required>
            </div>

            <div class="flex flex-col">
                <label class="text-gray-500 text-sm font-bold mb-2" for="height">Taille (cm)</label>
                <input id="height" type="number" class="form-input bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
                    name="height" value="{{ $client->height ?? '' }}">
            </div>

            <div class="flex flex-col">
                <label class="text-gray-500 text-sm font-bold mb-2" for="fitness_goal">Fitness goals</label>
                <select id="fitness_goal" class="form-select bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
                    name="fitness_goal">
                    <option value="perte_de_poids">Perte de poids</option>
                    <option value="prise_de_masse">Prise de masse</option>
                    <option value="amélioration_de_la_condition_physique">Amélioration de la condition physique</option>
                </select>
            </div>

            <div class="flex flex-col">
                <label class="text-gray-500 text-sm font-bold mb-2" for="experience_level">Experience</label>
                <select id="experience_level" class="form-select bg-gray-800 text-white w-full px-4 py-2 rounded focus:outline-none focus:ring focus:border-blue-500 transition duration-300"
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
@endsection
