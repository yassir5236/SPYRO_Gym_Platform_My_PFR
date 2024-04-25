@extends('layout')

@section('content')
<div class="mt-10 relative">
    <img loading="lazy" src="{{ asset('storage/images/about2.jpg') }}" class="object-cover w-full h-60 md:h-full" style="object-fit: cover;" />
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center rounded-lg bg-black bg-opacity-75 p-4">
        <p class="text-white text-2xl md:text-4xl">About page</p>
    </div>
</div>

<div class="mt-28 w-full max-w-[1265px] max-md:mt-10 max-md:max-w-full">
    <div class="flex gap-5  flex-col md:flex-row max-md:gap-0  items-center">
        <div class="flex flex-col w-full max-w-xl max-md:w-full">
            <div class="flex flex-col grow px-5 mt-16 font-medium text-white leading-[170.9%] max-md:mt-10 max-md:max-w-full">
                <div class="text-3xl tracking-wider text-red-600 max-md:max-w-full">
                    __WHO WE ARE
                </div>
                <div class="mt-28 text-2xl font-bold tracking-widest border border-black border-solid leading-[79px] max-md:mt-10 max-md:max-w-full max-md:text-4xl max-md:leading-[77px]">
                    TO TRUST US? GET KNOWN WITH US
                </div>
                <div class="mt-14 text-lg tracking-wide leading-8 max-md:mt-10 max-md:max-w-full">
                    Get ready to sweat it out and achieve your fitness goals with our
                    high-energy fitness classes! Our classes are designed to cater to all
                    fitness levels and provide a fun and motivating environment to help
                    you reach your peak performance ...
                </div>
                <div class="flex gap-5 mt-16 text-lg tracking-wide max-md:flex-wrap max-md:pr-5 max-md:mt-10">
                    <div class="overflow-hidden relative flex-col justify-center px-14 py-4 border border-white border-solid aspect-[4.58] stroke-[1px] stroke-white max-md:px-5">
                        <a href="{{route('register')}}">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f06f74cfc12ff06c4b6afdbdc21e7bbbaf82a85a6ba846b5c8d4bebdb35d1227?" class="shrink-0 max-w-full aspect-[3.13] w-[140px]" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full hidden md:block max-w-xl max-md:w-full">
            <img loading="lazy" src="{{ asset('storage/images/wHhJHkN4ZL01PhZrny5v5MxUDmMsPaMC99c9O5eV.png') }}" class="w-full aspect-[0.93] max-md:mt-10 max-md:max-w-full " />
        </div>
    </div>
</div>

<div class="flex flex-col items-center mt-10 px-4 pb-20"> <!-- Ajouté une marge inférieure pour l'espace -->
    <div class="text-3xl tracking-wider text-red-600 max-w-full md:max-w-none">
        __COACHES
    </div>
    <div class="mt-8 md:mt-10 text-3xl font-bold tracking-widest text-center text-white leading-10 md:leading-[79px] md:text-4xl"> <!-- Modifié la classe mt pour plus d'espace -->
        BUILD YOUR BODY WITH OUR BEST TRAINERS
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8 md:mt-10 max-w-[1265px]"> <!-- Utilisé une grille pour organiser les coachs -->
        <div class="flex flex-col w-full overflow-hidden transform hover:scale-105 transition duration-300">
            <div class="flex flex-col items-center leading-[170.9%]">
                <img loading="lazy" src="{{ asset('storage/images/Rectangle 17.png') }}" class="w-full h-auto max-w-full" />
                <div class="mt-4 text-2xl font-medium tracking-wide text-white text-opacity-80">
                    Jacob Jones
                </div>
                <div class="mt-2 text-base tracking-wide text-white">Gym trainer</div>
            </div>
        </div>
        <div class="flex flex-col overflow-hidden transform hover:scale-105 transition duration-300">
            <div class="flex flex-col items-center leading-[170.9%]">
                <img loading="lazy" src="{{ asset('storage/images/Rectangle 18.png') }}" class="w-full h-auto max-w-full" />
                <div class="mt-4 text-2xl font-medium tracking-wide text-white text-opacity-80">
                    Leslie Alexander
                </div>
                <div class="mt-2 text-base tracking-wide text-white">Gym trainer</div>
            </div>
        </div>
        <div class="flex flex-col overflow-hidden transform hover:scale-105 transition duration-300">
            <div class="flex flex-col items-center leading-[170.9%]">
                <img loading="lazy" src="{{ asset('storage/images/Rectangle 20.png') }}" class="w-full h-auto max-w-full" />
                <div class="mt-4 text-2xl font-medium tracking-wide text-white text-opacity-80">
                    Jane Cooper
                </div>
                <div class="mt-2 text-base tracking-wide text-white">Gym trainer</div>
            </div>
        </div>
    </div>
</div>


@endsection
