@extends('layout')

@section('content')
    {{-- <div class="container mx-auto p-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($images as $image)
                <div class="grid gap-4">
                    <div>
                        <img src="{{ asset($image->path) }}" alt="{{ $image->file_name }}"
                            class="h-auto max-w-full rounded-lg" />
                    </div>

                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal15.jpg') }}"
                            alt="" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal5.jpg') }}"
                            alt="" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal9.jpg') }}"
                            alt="" />
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal2.jpg') }}"
                            alt="" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal17.jpg') }}"
                            alt="" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal5.jpg') }}"
                            alt="" />
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal14.jpg') }}"
                            alt="" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal6.jpg') }}"
                            alt="" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal7.jpg') }}"
                            alt="" />
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal8.jpg') }}"
                            alt="" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal16.jpg') }}"
                            alt="" />
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal10.jpg') }}"
                            alt="" />
                    </div>
                </div>
            @endforeach
        </div>

    </div> --}}

    @auth
        @if (auth()->user()->role === 'admin')
            <div class="flex justify-start mb-4">
                <a href="{{ route('gallery-images.create') }}"
                    class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Ajouter une nouvelle image</a>
            </div>
        @endif
    @endauth

    <div class="container mx-auto p-4">
        <h2 class="text-5xl text-gray-400  flex justify-center font-semibold mb-4">Galerie d'images</h2>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($galleryImages as $image)
                <div>
                    {{-- <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/images/gal9.jpg') }}" --}}

                    <img src="{{ asset('storage/' . $image->path) }}" alt="Image" class="w-full h-auto rounded-lg">
                    <div class="flex justify-between mt-2">
                        @auth
                            @if (auth()->user()->role === 'admin')
                                {{-- <a href="{{ route('gallery-images.edit', $image->id) }}"
                                    class="text-blue-600 hover:underline">Modifier</a> --}}
                                <form action="{{ route('gallery-images.destroy', $image->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg width="20px" height="20px" viewBox="0 0 1024 1024"
                                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill="#fa7900"
                                                    d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z">
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
@endsection
