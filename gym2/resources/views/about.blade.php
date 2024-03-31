@extends('layout')

@section('content')
<div class="mt-10" style="position: relative; display: flex; justify-content: center; align-items: center; height: 100vh;">
    <img loading="lazy" src="{{ asset('storage/images/about2.jpg') }}" style="object-fit: cover; width: 100%; height: 100%;" />
    <div style="position: absolute; top: 60%; left: 65%; transform: translate(-50%, -50%); text-align: center; border-radius: 25px;">
        <p style="font-size: 40px; color: white;">About page</p>
    </div>
</div>

    



    <div class="mt-28 w-full max-w-[1265px] max-md:mt-10 max-md:max-w-full">
        <div class="flex gap-5 max-md:flex-col max-md:gap-0  items-center">
            <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                <div
                    class="flex flex-col grow px-5 mt-16 font-medium text-white leading-[170.9%] max-md:mt-10 max-md:max-w-full">
                    <div class="text-3xl tracking-wider text-red-600 max-md:max-w-full">
                        __WHO WE ARE
                    </div>
                    <div
                        class="mt-28 text-5xl font-bold tracking-widest  border border-black border-solid leading-[79px] max-md:mt-10 max-md:max-w-full max-md:text-4xl max-md:leading-[77px]">
                    TO TRUST US? GET KNOWN WITH US
                    </div>
                    <div class="mt-14 text-lg tracking-wide leading-8 max-md:mt-10 max-md:max-w-full">
                        Get ready to sweat it out and achieve your fitness goals with our
                        high-energy fitness classes! Our classes are designed to cater to all
                        fitness levels and provide a fun and motivating environment to help
                        you reach your peak performance.
                    </div>
                    <div
                        class="flex gap-2.5 self-start mt-14 text-xl tracking-wide text-white text-opacity-80 max-md:mt-10">
                        <div
                            class="shrink-0 self-start w-2 h-2 rounded-full bg-[linear-gradient(90deg,#FF4300_-6.33%,#FF6400_103.92%)]">
                        </div>
                        <div class="flex-auto">Fitness performance</div>
                    </div>
                    <div class="flex gap-2.5 self-start mt-4 text-xl tracking-wide text-white text-opacity-80">
                        <div
                            class="shrink-0 self-start w-2 h-2 rounded-full bg-[linear-gradient(90deg,#FF4300_-6.33%,#FF6400_103.92%)]">
                        </div>
                        <div class="flex-auto">Fitness performance</div>
                    </div>
                    <div class="flex gap-5 mt-16 text-lg tracking-wide max-md:flex-wrap max-md:pr-5 max-md:mt-10">
                        <div
                            class="overflow-hidden relative flex-col justify-center items-start px-16 py-4 border border-white border-solid aspect-[4.58] stroke-[1px] stroke-white w-[206px] max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c28b64c35deacfd1455b8f3c5b2490cef85d83efc3064aa8822fdb49a9fad336?"
                                class="object-cover absolute inset-0 size-full" />
                            CALL US
                        </div>
                        <div
                            class="overflow-hidden relative flex-col justify-center px-14 py-4 border border-white border-solid aspect-[4.58] stroke-[1px] stroke-white max-md:px-5">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/c28b64c35deacfd1455b8f3c5b2490cef85d83efc3064aa8822fdb49a9fad336?"
                                class="object-cover absolute inset-0 size-full" />
                            LEARN MORE
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col h-full ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                <img loading="lazy" src="{{ asset('storage/images/wHhJHkN4ZL01PhZrny5v5MxUDmMsPaMC99c9O5eV.png') }}"
                    class="w-full aspect-[0.93] max-md:mt-10 max-md:max-w-full " />

            </div>
        </div>
    </div>








    <div class="flex flex-col items-center  mt-80  px-auto pb-20">
        <div class="text-3xl tracking-wider text-red-600 max-md:max-w-full">
            __COACHES
        </div>
        <div
            class="mt-24 text-5xl font-bold tracking-widest text-white leading-[79px] max-md:mt-10 max-md:max-w-full max-md:text-4xl max-md:leading-[77px]">
            BUILD YOUR BODY WITH   OUR BEST TRAINERS
        </div>
        <div class="self-stretch mt-48 w-full max-md:mt-10 max-md:max-w-full">
            <div class="flex gap-x-10 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-full max-md:ml-0 max-md:w-full">
                    <div class="flex flex-col grow items-center leading-[170.9%] max-md:mt-10">
                        <img loading="lazy" src="{{ asset('storage/images/Rectangle 17.png') }}"
                            class="self-stretch w-full h-auto max-w-full" />
                        <div class="mt-8 text-2xl font-medium tracking-wide text-white text-opacity-80">
                            Jacob Jones
                        </div>
                        <div class="mt-6 text-base tracking-wide text-white">Gym trainer</div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-full max-md:ml-0 max-md:w-full">
                    <div class="flex flex-col items-center leading-[170.9%] max-md:mt-10">
                        <img loading="lazy" src="{{ asset('storage/images/Rectangle 18.png') }}"
                            class="self-stretch w-full h-auto max-w-full" />
                        <div class="mt-8 text-2xl font-medium tracking-wide text-white text-opacity-80">
                            Leslie Alexander
                        </div>
                        <div class="mt-5 text-base tracking-wide text-white">Gym trainer</div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-full max-md:ml-0 max-md:w-full">
                    <div class="flex flex-col grow items-center leading-[170.9%] max-md:mt-10">
                        <img loading="lazy" src="{{ asset('storage/images/Rectangle 20.png') }}"
                            class="self-stretch w-full h-auto max-w-full" />
                        <div class="mt-8 text-2xl font-medium tracking-wide text-white text-opacity-80">
                            Jane Cooper
                        </div>
                        <div class="mt-5 text-base tracking-wide text-white">Gym trainer</div>
                    </div>
                </div>
            </div>
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
