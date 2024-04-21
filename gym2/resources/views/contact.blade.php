@extends('layout')

@section('content')



<div class="min-h-screen bg-black py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div
            class="absolute inset-0 bg-gradient-to-r from-red-600 to-orange-800 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="text-white relative px-4 py-10 bg-gray-900 shadow-lg sm:rounded-3xl sm:p-20">
            <div class="text-center pb-6">
                <h1 class="text-3xl text-white">Contact Us!</h1>
                <p class="text-gray-300">
                    Fill up the form below to send us a message.
                </p>
            </div>
            <form method="POST" action="{{ route('contact.send') }}">
                @csrf <!-- CSRF Token -->
                <input class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Name" name="name">
                <input class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="email" placeholder="Email" name="email">
                <input class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Subject" name="_subject">
                <textarea class="shadow mb-4 min-h-0 appearance-none border rounded h-64 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Type your message here..." name="message" style="height: 121px;"></textarea>
                <div class="flex justify-center">
                    <input class="shadow bg-red-600 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                        type="submit" value="Send ➤">
                </div>
            </form>
        </div>
    </div>
</div>



<div class="shrink-0 self-stretch mt-10 h-px bg-white border border-white border-solid max-md:max-w-full">
</div>
<div class="flex overflow-hidden relative flex-col items-center px-16 pt-16 pb-6  min-h-[411px] max-md:px-5">
    <img loading="lazy" srcset="..." class="object-cover absolute inset-0 size-full" />
    <div class="flex relative flex-col items-center w-full max-w-[1200px] max-md:max-w-full">
        <div class="text-4xl font-extrabold bg-clip-text text-red-600  bg-[linear-gradient(90deg,#FF4300_-6.33%,#FF6400_103.92%)]">
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
