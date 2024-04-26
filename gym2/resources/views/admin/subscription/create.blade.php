@extends('layout')
@section('content')
    <div class="background-image"
        style=" background-image: url('{{ asset('storage/images/client_home.png') }}');
                background-size: cover;
                background-position: center;">


        <div class="min-h-screen bg-black py-6 flex flex-col justify-center p-4 sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-red-600 to-orange-800 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="text-white relative px-4 py-10 bg-gray-900 shadow-lg sm:rounded-3xl sm:p-20">
                    <h2 class="text-2xl text-white font-semibold mb-4">Ajouter une nouvelle souscription</h2>
                    <form action="{{ route('subscriptions.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input id="title" type="text" name="title"
                                class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Titre de la souscription" required>
                        </div>
                        <div class="mb-4">
                            <input id="price" type="number" name="price"
                                class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Prix de la souscription" required>
                        </div>
                        <div class="mb-4">
                            <input id="duration" type="text" name="duration"
                                class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Durée de la souscription" required>
                        </div>
                        <div class="mb-4">
                            <input id="type" type="text" name="type"
                                class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Type de la souscription" required>
                        </div>
                        <div class="mb-4">
                            <input id="advantage_1" type="text" name="advantage_1"
                                class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Avantage 1 de la souscription" required>
                        </div>
                        <div class="mb-4">
                            <input id="advantage_2" type="text" name="advantage_2"
                                class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Avantage 2 de la souscription" required>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="shadow bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">Ajouter
                                la souscription</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>
@endsection
