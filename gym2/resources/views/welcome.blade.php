@extends('layout')

@section('content')
    <div class="flex items-center justify-center h-screen">
        <div class="min-w-screen h-full bg-cover"
            style="background-image: url('{{ asset('storage/images/wHhJHkN4ZL01PhZrny5v5MxUDmMsPaMC99c9O5eV.png') }}');">
            <div
                class="self-start mt-96 text-6xl font-bold text-white border border-black border-solid leading-[109px] tracking-[2.56px] max-md:mt-10 max-md:max-w-full max-md:text-4xl max-md:leading-[75px]">
                <span class="text-red-600">unleash</span> your
                <br />
                Inner Athlete
            </div>

            <div class="mt-16 w-full text-lg tracking-wide leading-8 text-white max-md:mt-10 max-md:max-w-full">
                Get ready to sweat it out and achieve your fitness goals with our
                high-energy fitness classes! Our classes are designed to cater to all
                fitness levels and provide a fun and motivating environment to help you
                reach your peak performance.
            </div>

            <div
                class="overflow-hidden relative flex-col justify-center self-start px-7 py-4 mt-8 bg-red-600 text-white aspect-[4.11] rounded-md w-40 max-md:px-5">
                <a href="{{ route('register') }}">Start free trial</a>

            </div>
        </div>
    </div>

    <div class="flex justify-center items-center mt-5 px-16 py-16 bg-stone-950 max-md:px-5">
        <div class="flex flex-col mt-9 w-full max-w-[1200px] max-md:max-w-full">
            <div
                class="self-center text-5xl font-semibold tracking-wider leading-[82.03200000000001px] text-white text-opacity-90 max-md:max-w-full max-md:text-4xl">
                Find what moves you
            </div>
            <div class="mt-12 max-md:mt-10 max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                    <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col grow text-white text-opacity-80 max-md:mt-10 max-md:max-w-full">
                            <img loading="lazy" src="{{ asset('storage/images/Mask group (1).png') }}"
                                class="w-full aspect-[1.69] max-md:max-w-full" />
                            <div class="flex gap-5 mt-9 max-md:flex-wrap max-md:max-w-full">
                                <div class="my-auto text-4xl tracking-wider leading-[61.52400000000001px]">
                                    GYM
                                </div>
                                <div class="flex-auto text-base font-light leading-6">
                                    Expect a heart-pumping workout that will leave you feeling
                                    energized and accomplished. Our supportive community of
                                    like-minded individuals.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[17%] max-md:ml-0 max-md:w-full">
                        <div
                            class="overflow-hidden relative flex-col grow items-start px-5 pt-72 pb-7 text-3xl tracking-wider whitespace-nowrap aspect-[0.42] leading-[55px] text-black  text-opacity-80 w-[170px] max-md:pt-10 max-md:mt-10">

                            <img loading="lazy" src="{{ asset('storage/images/Group 2035.png') }}"
                                class="object-cover absolute inset-0 size-full" />
                            Zumbaa
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[17%] max-md:ml-0 max-md:w-full">
                        <div
                            class="overflow-hidden relative flex-col grow items-start px-5 pt-72 pb-7 text-3xl tracking-wider whitespace-nowrap aspect-[0.42] leading-[55px] text-black text-opacity-80 w-[170px]  max-md:pt-10 max-md:mt-10">
                            <img loading="lazy" src="{{ asset('storage/images/Group 2034.png') }}"
                                class="object-cover absolute inset-0 size-full" />
                            youga
                            y
                        </div>
                    </div>
                    <div class="flex flex-col ml-5 w-[17%] max-md:ml-0 max-md:w-full">
                        <div
                            class="overflow-hidden relative flex-col grow items-start px-5 pt-72 pb-7 text-3xl tracking-wider whitespace-nowrap aspect-[0.42] leading-[55px] text-white text-opacity-80 w-[170px] max-md:pt-10 max-md:mt-10">
                            <img loading="lazy" src="{{ asset('storage/images/Mask group.png') }}"
                                class="object-cover absolute inset-0 size-full" />
                            Martial
                            <br />
                            Arts
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="flex flex-col items-center mt-20 px-5 w-full">
        <div
            class="text-5xl font-semibold tracking-wider leading-[82.03200000000001px] text-white text-opacity-90 max-md:max-w-full max-md:text-4xl">
            Fit for your lifestyle
        </div>
        <div
            class="self-stretch mt-14 w-full text-xl tracking-wide leading-9 text-center text-white max-md:mt-10 max-md:max-w-full">
            Wake up with a sunrise meditation, sweat it out with lunchtime HIIT, or
            unwind with an evening flow. You’ll find movement for every mood with
            classes sorted by time, style, and skill level.
        </div>
        <img loading="lazy" src="{{ asset('storage/images/Rectangle 10.png') }}"
            class="mt-12 rounded-md aspect-[1.52] w-3/4  max-md:mt-10 max-md:max-w-full " />
    </div>




    <div class="flex overflow-hidden relative flex-col items-center px-20 pt-16 mb-20  pb-9 min-h-[820px] max-md:px-5">
        <img loading="lazy" srcset="..." class="object-cover absolute inset-0 size-full" />
        <div class="relative w-full max-w-[1237px] max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col max-md:gap-0">
                <div class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                    <div
                        class="flex relative flex-col grow items-start mt-24 text-base font-medium tracking-wide leading-7 text-white text-opacity-80 max-md:mt-10">
                        <img loading="lazy" src="{{ asset('storage/images/Rectangle 13.png') }}"
                            class="self-stretch w-full aspect-[1.43]" />
                        <div class="flex gap-2.5 mt-7 whitespace-nowrap">
                            <div
                                class="shrink-0 my-auto w-2 h-2 rounded-full bg-[linear-gradient(90deg,#FF4300_-6.33%,#FF6400_103.92%)]">
                            </div>
                            <div>Yoga</div>
                        </div>
                        <div class="self-stretch mt-7 text-2xl font-semibold tracking-wide text-white text-opacity-90">
                            Bootcamp Challenge
                        </div>
                        <div class="flex gap-2 mt-6 text-white text-opacity-90">
                            <div class="grow">Instructor:</div>
                            <div>Robert Fox</div>
                        </div>
                        <div class="flex gap-2 mt-6">
                            <div class="shrink-0 self-start w-2 h-2 bg-white rounded-full"></div>
                            <div class="flex-auto">No. of Classes:</div>
                            <div>52</div>
                        </div>
                        <div class="flex gap-2 mt-5 whitespace-nowrap">
                            <div class="shrink-0 my-auto w-2 h-2 bg-white rounded-full"></div>
                            <div>Difficulty:</div>
                            <div>Hard</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                    <div
                        class="flex relative flex-col grow items-start text-base font-medium tracking-wide leading-7 text-white text-opacity-90 max-md:mt-10">
                        <div class="self-center text-5xl font-semibold tracking-wider max-md:text-4xl">
                            Classes
                        </div>
                        <img loading="lazy" src="{{ asset('storage/images/Rectangle 13.png') }}"
                            class="self-stretch mt-14 w-full aspect-[1.43] max-md:mt-10" />
                        <div class="flex gap-2.5 mt-7 whitespace-nowrap text-white text-opacity-80">
                            <div
                                class="shrink-0 my-auto w-2 h-2 rounded-full bg-[linear-gradient(90deg,#FF4300_-6.33%,#FF6400_103.92%)]">
                            </div>
                            <div>Yoga</div>
                        </div>
                        <div class="self-stretch mt-7 text-2xl font-semibold tracking-wide">
                            Bootcamp Challenge
                        </div>
                        <div class="flex gap-2 mt-6">
                            <div class="grow">Instructor:</div>
                            <div>Robert Fox</div>
                        </div>
                        <div class="flex gap-2 mt-6 text-white text-opacity-80">
                            <div class="shrink-0 self-start w-2 h-2 bg-white rounded-full"></div>
                            <div class="flex-auto">No. of Classes:</div>
                            <div>52</div>
                        </div>
                        <div class="flex gap-2 mt-5 whitespace-nowrap text-white text-opacity-80">
                            <div class="shrink-0 my-auto w-2 h-2 bg-white rounded-full"></div>
                            <div>Difficulty:</div>
                            <div>Hard</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col ml-5 w-[33%] max-md:ml-0 max-md:w-full">
                    <div
                        class="flex relative flex-col grow items-start mt-24 text-base font-medium tracking-wide leading-7 text-white text-opacity-80 max-md:mt-10">
                        <img loading="lazy" src="{{ asset('storage/images/Rectangle 13.png') }}"
                            class="self-stretch w-full aspect-[1.43]" />
                        <div class="flex gap-2.5 mt-7 whitespace-nowrap">
                            <div
                                class="shrink-0 my-auto w-2 h-2 rounded-full bg-[linear-gradient(90deg,#FF4300_-6.33%,#FF6400_103.92%)]">
                            </div>
                            <div>Yoga</div>
                        </div>
                        <div class="self-stretch mt-7 text-2xl font-semibold tracking-wide text-white text-opacity-90">
                            Bootcamp Challenge
                        </div>
                        <div class="flex gap-2 mt-6 text-white text-opacity-90">
                            <div class="grow">Instructor:</div>
                            <div>Robert Fox</div>
                        </div>
                        <div class="flex gap-2 mt-6">
                            <div class="shrink-0 self-start w-2 h-2 bg-white rounded-full"></div>
                            <div class="flex-auto">No. of Classes:</div>
                            <div>52</div>
                        </div>
                        <div class="flex gap-2 mt-5 whitespace-nowrap">
                            <div class="shrink-0 my-auto w-2 h-2 bg-white rounded-full"></div>
                            <div>Difficulty:</div>
                            <div>Hard</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="flex relative gap-5 mt-6 w-full text-lg font-medium tracking-wide leading-8 text-white max-w-[1237px] max-md:flex-wrap max-md:max-w-full">
            <div class="flex flex-1 gap-5 px-0.5">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/f06f74cfc12ff06c4b6afdbdc21e7bbbaf82a85a6ba846b5c8d4bebdb35d1227?"
                    class="shrink-0 max-w-full aspect-[3.13] w-[140px]" />

            </div>
            <div class="flex flex-1 gap-5 px-px">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/7277ec5705ec252be19ce5f077dad266f14bffe8ad9148247333175b9f30cf11?"
                    class="shrink-0 max-w-full aspect-[3.13] w-[140px]" />

            </div>
            <div class="flex flex-1 gap-5 px-0.5">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/1f4ba67cea7fef52b7dc87b70230c6b7af4d84a899648926621961f91b9d7aeb?"
                    class="shrink-0 max-w-full aspect-[3.13] w-[140px]" />

            </div>
        </div>

    </div>










    {{-- <div class="flex flex-col px-5 text-2xl font-semibold leading-10 text-white mb-40 text-opacity-90 ">
        <div class="self-center text-4xl leading-[72px] text-white  text-opacity-70 max-md:max-w-full">
            Frequently Asked Question
        </div>
        <div class="self-start mt-20 tracking-wide text-center text-white text-opacity-70 max-md:mt-10 max-md:max-w-full">
            What are your focus areas as a UI/UX agency?
        </div>
        <div
            class="overflow-hidden relative flex-col justify-center px-14 py-12 mt-5 w-full text-lg tracking-wide leading-8 text-white min-h-[208px] max-md:pr-8 max-md:pl-5 max-md:max-w-full">
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/ec66f2ec0b6e71449154f993f228a9e347bf4b40d2eb730ad578aa28250a9bc0?"
                class="object-cover absolute inset-0 size-full" />
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also.

        </div>
        <div class="flex gap-5  mt-6 tracking-wide  max-md:flex-wrap max-md:max-w-full">
            <div class="flex-auto my-auto max-md:max-w-full">
                Why is UI/UX design important for your business growth?
            </div>
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/f56b8b7a76f7dbb80fae378a845df6b972679eaeefeb9edc27b620782f7b8681?"
                class="shrink-0 w-10 aspect-square" />
        </div>
        <div
            class="mt-3.5 w-full border border-solid bg-white bg-opacity-70 border-white border-opacity-70 min-h-[1px] max-md:max-w-full">
        </div>
        <div class="flex gap-5  mt-10 tracking-wide  max-md:flex-wrap max-md:max-w-full">
            <div class="flex-auto my-auto max-md:max-w-full">
                Can your UX design agency help us with web design?
            </div>
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/f56b8b7a76f7dbb80fae378a845df6b972679eaeefeb9edc27b620782f7b8681?"
                class="shrink-0 w-10 aspect-square" />
        </div>
        <div
            class="mt-3.5 w-full border border-solid bg-white bg-opacity-70 border-white border-opacity-70 min-h-[1px] max-md:max-w-full">
        </div>
        <div class="flex gap-5  mt-10 tracking-wide  max-md:flex-wrap max-md:max-w-full">
            <div class="flex-auto my-auto max-md:max-w-full">
                How much does a UI/UX design project cost?
            </div>
            <img loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/f56b8b7a76f7dbb80fae378a845df6b972679eaeefeb9edc27b620782f7b8681?"
                class="shrink-0 w-10 aspect-square" />
        </div>
        <div
            class="mt-3.5 w-full border border-solid bg-white bg-opacity-70 border-white   border-opacity-70 min-h-[1px] max-md:max-w-full">
        </div>
    </div> --}}






    <body class="bg-gray-100">
        <div class="max-w-3xl mx-auto p-6">
            <div
                class="text-center text-4xl font-semibold text-white mb-10 bg-gradient-to-r from-red-700 to-red-400 py-3 rounded-lg shadow-md">
                Frequently Asked Questions
            </div>

            <div class="mt-8">
                <div class="py-3 px-6 bg-black text-white border  rounded-lg flex items-center justify-between cursor-pointer"
                    onclick="toggleAnswer(1)">
                    <div class="text-lg font-semibold">Why is UI/UX design important for your business growth?</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 transform transition-transform"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 6.293a1 1 0 0 1 1.414 0L10 9.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414zM10 14a1 1 0 0 1-1-1V4a1 1 0 1 1 2 0v9a1 1 0 0 1-1 1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div id="answer-1" class="hidden py-3 px-6 bg-gray-500 text-white rounded-lg mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget velit rutrum, varius velit at,
                    lobortis lectus. Phasellus vel lectus odio. Nulla facilisi. Suspendisse potenti. Vivamus sagittis
                    semper enim, et euismod sem pretium eu. Morbi eu scelerisque orci. Nulla facilisi. Donec tempor,
                    dolor id volutpat tincidunt, lorem ipsum semper arcu, nec vestibulum ex sapien vel metus. Integer et
                    leo eget justo blandit consectetur. Nam malesuada congue ex sit amet faucibus. Cras sit amet ante
                    vitae quam ultricies suscipit. Integer nec eros id quam malesuada vehicula. Aliquam efficitur arcu
                    nec tincidunt vulputate. Sed ut velit eu est pharetra tincidunt nec ut orci.
                </div>
            </div>

            <div class="mt-8">
                <div class="py-3 px-6 bg-black text-white border  rounded-lg flex items-center justify-between cursor-pointer"
                    onclick="toggleAnswer(2)">
                    <div class="text-lg font-semibold">Can your UX design agency help us with web design?</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 transform transition-transform"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 6.293a1 1 0 0 1 1.414 0L10 9.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414zM10 14a1 1 0 0 1-1-1V4a1 1 0 1 1 2 0v9a1 1 0 0 1-1 1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div id="answer-2" class="hidden py-3 px-6 bg-gray-500 text-white rounded-lg mt-2">
                    Sed eget velit rutrum, varius velit at, lobortis lectus. Phasellus vel lectus odio. Nulla facilisi.
                    Suspendisse potenti. Vivamus sagittis semper enim, et euismod sem pretium eu. Morbi eu scelerisque
                    orci. Nulla facilisi. Donec tempor, dolor id volutpat tincidunt, lorem ipsum semper arcu, nec
                    vestibulum ex sapien vel metus. Integer et leo eget justo blandit consectetur. Nam malesuada congue
                    ex sit amet faucibus. Cras sit amet ante vitae quam ultricies suscipit. Integer nec eros id quam
                    malesuada vehicula. Aliquam efficitur arcu nec tincidunt vulputate. Sed ut velit eu est pharetra
                    tincidunt nec ut orci.
                </div>
            </div>

            <div class="mt-8">
                <div class="py-3 px-6 bg-black text-white border  rounded-lg flex items-center justify-between cursor-pointer"
                    onclick="toggleAnswer(3)">
                    <div class="text-lg font-semibold">How much does a UI/UX design project cost?</div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 transform transition-transform"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 6.293a1 1 0 0 1 1.414 0L10 9.586l3.293-3.293a1 1 0 1 1 1.414 1.414l-4 4a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 0-1.414zM10 14a1 1 0 0 1-1-1V4a1 1 0 1 1 2 0v9a1 1 0 0 1-1 1z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div id="answer-3" class="hidden py-3 px-6 bg-gray-500 text-white rounded-lg mt-2">
                    Nulla facilisi. Suspendisse potenti. Vivamus sagittis semper enim, et euismod sem pretium eu. Morbi eu
                    scelerisque orci. Nulla facilisi. Donec tempor, dolor id volutpat tincidunt, lorem ipsum semper arcu,
                    nec vestibulum ex sapien vel metus. Integer et leo eget justo blandit consectetur. Nam malesuada congue
                    ex sit amet faucibus. Cras sit amet ante vitae quam ultricies suscipit. Integer nec eros id quam
                    malesuada vehicula. Aliquam efficitur arcu nec tincidunt vulputate. Sed ut velit eu est pharetra
                    tincidunt nec ut orci.
                </div>
            </div>
        </div>

        <script>
            // Function to toggle the visibility of answers
            function toggleAnswer(index) {
                const answer = document.getElementById(`answer-${index}`);
                answer.classList.toggle('hidden');
                const icon = document.querySelector(`#answer-${index} + svg`);
                icon.classList.toggle('rotate');
            }
        </script>









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
