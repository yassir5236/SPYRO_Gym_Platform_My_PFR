@extends('layout')

@section('content')
  

    @auth
        @if (auth()->user()->role === 'admin')
            <div class="flex justify-start mb-4">
                <a href="{{ route('gallery-images.create') }}"
                    class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Ajouter une nouvelle image</a>
            </div>
        @endif
    @endauth

    <div class="container mx-auto p-4">
        <h2 class="text-5xl text-gray-400 flex justify-center font-semibold mb-4">Galerie d'images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-3 gap-4">
            @foreach ($galleryImages as $image)
                <div>
                    <img src="{{ asset('storage/' . $image->path) }}" alt="Image" class="w-full h-auto rounded-lg">
                    <div class="flex justify-between mt-2">
                        @auth
                            @if (auth()->user()->role === 'admin')
                                <form action="{{ route('gallery-images.destroy', $image->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill="#fa7900" d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z">
                                                </path>
                                            </g>
                                        </svg>
                                    </button>
                                </form>
                            @endif
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    


    
@endsection
