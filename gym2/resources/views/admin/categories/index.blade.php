@extends('layout')



@section('content')
    <a href="{{ route('categories.create') }}"
        class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Créer un nouveau category</a>

    <div class="container ">
        <div class="flex justify-center	 gap-10 items-center h-[100vh]">


            @foreach ($categories as $category)
                <div class="relative w-full max-w-[300px] mb-4 shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div
                        class="!z-5 relative flex flex-col rounded-[20px] bg-gray-600 bg-clip-border shadow-3xl shadow-shadow-500 flex flex-col w-full !p-4 3xl:p-![18px] bg-gray-100  undefined">
                        <div class="h-full w-full">
                            <div class="relative w-full">
                                <img src="{{ asset('storage/' . $category->image_url) }}"
                                    class="mb-3 h-full w-full rounded-xl 3xl:h-full 3xl:w-full "
                                    alt="{{ $category->name }} ">
                                <button
                                    class="absolute top-3 right-3 flex items-center justify-center rounded-full bg-white p-2 text-brand-500 hover:cursor-pointer">
                                    <div
                                        class="flex h-full w-full items-center justify-center rounded-full text-xl hover:bg-gray-50">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 512 512" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="32"
                                                d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z">
                                            </path>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                            <div class="mb-3 flex items-center justify-between px-1 md:items-start">
                                <div class="mb-2">
                                    <p class="text-lg font-bold text-navy-700">{{ $category->name }}</p>
                                    <!-- Vous pouvez afficher d'autres détails de la catégorie ici -->
                                </div>
                            </div>
                            <div class="flex items-center justify-between md:items-center lg:justify-between">
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="linear rounded-[20px] bg-red-800 px-4 py-2 text-base font-medium text-white transition duration-200 hover:bg-red-600 "
                                        onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')">Supprimer</button>
                                </form>
                                {{-- <button href="" class="linear rounded-[20px] bg-brand-900 px-4 py-2 text-base font-medium text-white transition duration-200 hover:bg-brand-800 active:bg-brand-700">Voir les produits</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
