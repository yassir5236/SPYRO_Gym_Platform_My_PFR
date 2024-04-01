@extends('layout')
@section('content')



    <div class="background-image"
        style=" background-image: url('{{ asset('storage/images/client_home.png') }}');
                background-size: cover;
                background-position: center;">
    <div class="max-w-lg mx-auto bg-white shadow-md rounded px-8 py-6 mt-10">
        <h2 class="text-xl font-semibold mb-4">Ajouter une nouvelle souscription</h2>
        <form action="{{ route('subscriptions.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Titre</label>
                <input id="title" type="text" name="title" class="form-input w-full" placeholder="Titre de la souscription" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">Prix</label>
                <input id="price" type="number" name="price" class="form-input w-full" placeholder="Prix de la souscription" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="duration">Durée</label>
                <input id="duration" type="text" name="duration" class="form-input w-full" placeholder="Durée de la souscription" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="type">Type</label>
                <input id="type" type="text" name="type" class="form-input w-full" placeholder="Type de la souscription" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="advantage_1">Avantage 1</label>
                <input id="advantage_1" type="text" name="advantage_1" class="form-input w-full" placeholder="Avantage 1 de la souscription" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="advantage_2">Avantage 2</label>
                <input id="advantage_2" type="text" name="advantage_2" class="form-input w-full" placeholder="Avantage 2 de la souscription" required>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Ajouter la souscription</button>
            </div>
        </form>
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
    </div>
    @endsection
