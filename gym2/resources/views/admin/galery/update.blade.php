@extends('layout')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-xl font-semibold mb-4">Modifier l'image</h2>
        <form action="{{ route('gallery-images.update', $galleryImage->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Image</label>
                <input id="image" type="file" name="image" class="form-input w-full">
            </div>
            <!-- Afficher l'image existante -->
            <div class="mb-4">
                <img src="{{ asset('images/'.$galleryImage->image_path) }}" alt="Image" class="max-w-lg mx-auto">
            </div>
            <!-- Ajoutez d'autres champs de formulaire pré-remplis avec les données existantes au besoin -->
            <div class="flex justify-center">
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">Mettre à jour l'image</button>
            </div>
        </form>
    </div>
@endsection

