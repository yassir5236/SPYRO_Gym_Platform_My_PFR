@extends('layout')

@section('content')
    <div class="min-h-screen bg-black py-6 flex flex-col justify-center sm:py-12 p-4">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-orange-800 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="text-white relative px-4 py-10 bg-gray-900 shadow-lg sm:rounded-3xl sm:p-20">

                <div class="text-center pb-6">
                    <h1 class="text-3xl text-white">Modifier la catégorie "{{ $category->name }}"</h1>
                </div>

                <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    @method('PUT') <!-- Utilisez la méthode PUT pour la mise à jour -->

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Nom de la catégorie :</label>
                        <input type="text" name="name" id="name" class="shadow form-input rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $category->name }}" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Image de la catégorie :</label>
                        <input type="file" name="image" id="image" class="shadow form-input rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" accept="image/*">
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="shadow bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">Mettre à jour la catégorie</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
