@extends('layout')



@section('content')
    <a href="{{ route('categories.create') }}"
        class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Créer un nouveau category</a>

    <div class="container ">
        <div class="flex justify-center	 gap-7 items-center h-[70vh]">
            @foreach ($categories as $category)
                <div class="relative w-full max-w-[300px] mb-4 shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <div
                        class="!z-5 relative flex flex-col rounded-[20px] bg-gray-600 bg-clip-border shadow-3xl shadow-shadow-500 flex flex-col w-full !p-4 3xl:p-![18px] bg-gray-100  undefined">
                        <div class="h-full w-full">
                            <div class="relative w-full">
                                <img src="{{ asset('storage/' . $category->image_url) }}"
                                    class="mb-3 h-full w-full rounded-xl 3xl:h-full 3xl:w-full "
                                    alt="{{ $category->name }} ">
                          
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
                                <a href="{{ route('categories.edit', $category->id) }}">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M20.1497 7.93997L8.27971 19.81C7.21971 20.88 4.04971 21.3699 3.27971 20.6599C2.50971 19.9499 3.06969 16.78 4.12969 15.71L15.9997 3.84C16.5478 3.31801 17.2783 3.03097 18.0351 3.04019C18.7919 3.04942 19.5151 3.35418 20.0503 3.88938C20.5855 4.42457 20.8903 5.14781 20.8995 5.90463C20.9088 6.66146 20.6217 7.39189 20.0997 7.93997H20.1497Z"
                                                stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M21 21H12" stroke="#909090" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
