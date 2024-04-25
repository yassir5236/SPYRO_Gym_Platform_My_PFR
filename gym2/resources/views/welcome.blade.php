@extends('layout')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-cover"
        style="background-image: url('{{ asset('storage/images/wHhJHkN4ZL01PhZrny5v5MxUDmMsPaMC99c9O5eV.png') }}');">
        <div class="max-w-6xl mx-auto px-6 sm:px-10 lg:px-16">
            <div class="mt-24 md:mt-48 text-6xl md:text-8xl font-bold text-white text-center">
                <span class="text-red-600">unleash</span> your<br />
                Inner Athlete
            </div>
            <div class="mt-16 md:mt-24 text-lg md:text-xl text-white text-center">
                Get ready to sweat it out and achieve your fitness goals with our high-energy fitness classes! Our classes
                are designed to cater to all fitness levels and provide a fun and motivating environment to help you reach
                your peak performance.
            </div>
            <div class="mt-12 md:mt-16 flex justify-center">
                <a href="{{ route('register') }}"
                    class="py-3 px-8 bg-red-600 text-white text-lg md:text-xl font-semibold rounded-md">Start free trial</a>
            </div>
        </div>
    </div>




    <div class="flex justify-center items-center mt-5 px-6 md:px-16 py-8 md:py-16 bg-stone-950">
        <div class="flex flex-col w-full max-w-4xl md:max-w-full">
            <div
                class="text-center text-3xl md:text-5xl font-semibold tracking-wider text-white text-opacity-90 md:max-w-full md:text-4xl">
                Find what moves you
            </div>
            <div class="mt-8 md:mt-12">
                <div class="flex flex-col md:flex-row md:gap-6">
                    <div class="flex flex-col w-full md:w-6/12">
                        <div class="flex flex-col text-white text-opacity-80">
                            <img loading="lazy" src="{{ asset('storage/images/Mask group (1).png') }}"
                                class="w-full aspect-w-16/9 md:max-w-full" />
                            <div class="mt-6">
                                <div class="text-2xl md:text-4xl font-semibold leading-tight">
                                    GYM
                                </div>
                                <div class="mt-3 text-base font-light leading-normal">
                                    Expect a heart-pumping workout that will leave you feeling energized and accomplished.
                                    Our supportive community of like-minded individuals.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col mt-6 md:mt-0 w-full md:w-1/3">
                        <div
                            class="overflow-hidden relative flex flex-col items-start px-5 pt-10 pb-7 text-3xl md:text-4xl tracking-wider whitespace-nowrap leading-[55px] text-black text-opacity-80">
                            <img loading="lazy" src="{{ asset('storage/images/Group 2035.png') }}"
                                class="object-cover w-full h-full" />
                            <span
                                class="absolute bottom-0 left-0 right-0 px-5 py-3 text-white bg-black bg-opacity-50">Zumba</span>
                        </div>
                    </div>
                    <div class="flex flex-col mt-6 md:mt-0 w-full md:w-1/3">
                        <div
                            class="overflow-hidden relative flex flex-col items-start px-5 pt-10 pb-7 text-3xl md:text-4xl tracking-wider whitespace-nowrap leading-[55px] text-black text-opacity-80">
                            <img loading="lazy" src="{{ asset('storage/images/Group 2034.png') }}"
                                class="object-cover w-full h-full" />
                            <span
                                class="absolute bottom-0 left-0 right-0 px-5 py-3 text-white bg-black bg-opacity-50">Yoga</span>
                        </div>
                    </div>
                    <div class="flex flex-col mt-6 md:mt-0 w-full md:w-1/3">
                        <div
                            class="overflow-hidden relative flex flex-col items-start px-5 pt-10 pb-7 text-3xl md:text-4xl tracking-wider whitespace-nowrap leading-[55px] text-white text-opacity-80">
                            <img loading="lazy" src="{{ asset('storage/images/Mask group.png') }}"
                                class="object-cover w-full h-full" />
                            <span
                                class="absolute bottom-0 left-0 right-0 px-5 py-3 text-black bg-white bg-opacity-50">Martial
                                Arts</span>
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






    


    <div class="flex overflow-hidden relative flex-col items-center px-6 pt-16 pb-9 md:px-4 lg:px-20 lg:pt-20 lg:pb-16 min-h-[820px]">
        <div class="relative w-full max-w-[1237px]">
            <div class="flex flex-col md:flex-row md:gap-5">
                <div class="flex flex-col w-full md:w-[33%]">
                    <div class="flex relative flex-col grow items-start mt-14 md:mt-0 text-base font-medium tracking-wide leading-7 text-white text-opacity-80">
                        <img loading="lazy" src="{{ asset('storage/images/Rectangle 13.png') }}" class="w-full aspect-w-16/9" />
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r from-[#FF4300] to-[#FF6400]"></div>
                            <div class="ml-2">Yoga</div>
                        </div>
                        <div class="mt-4 text-2xl font-semibold tracking-wide text-white text-opacity-90">
                            Bootcamp Challenge
                        </div>
                        <div class="flex mt-4 text-white text-opacity-90">
                            <div class="flex-grow">Instructor:</div>
                            <div>Robert Fox</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full md:w-[33%]">
                    <div class="flex relative flex-col grow items-start mt-14 md:mt-0 text-base font-medium tracking-wide leading-7 text-white text-opacity-80">
                        <img loading="lazy" src="{{ asset('storage/images/Rectangle 13.png') }}" class="w-full aspect-w-16/9" />
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r from-[#FF4300] to-[#FF6400]"></div>
                            <div class="ml-2">Yoga</div>
                        </div>
                        <div class="mt-4 text-2xl font-semibold tracking-wide text-white text-opacity-90">
                            Bootcamp Challenge
                        </div>
                        <div class="flex mt-4 text-white text-opacity-90">
                            <div class="flex-grow">Instructor:</div>
                            <div>Robert Fox</div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full md:w-[33%]">
                    <div class="flex relative flex-col grow items-start mt-14 md:mt-0 text-base font-medium tracking-wide leading-7 text-white text-opacity-80">
                        <img loading="lazy" src="{{ asset('storage/images/Rectangle 13.png') }}" class="w-full aspect-w-16/9" />
                        <div class="flex items-center mt-4">
                            <div class="w-2 h-2 rounded-full bg-gradient-to-r from-[#FF4300] to-[#FF6400]"></div>
                            <div class="ml-2">Yoga</div>
                        </div>
                        <div class="mt-4 text-2xl font-semibold tracking-wide text-white text-opacity-90">
                            Bootcamp Challenge
                        </div>
                        <div class="flex mt-4 text-white text-opacity-90">
                            <div class="flex-grow">Instructor:</div>
                            <div>Robert Fox</div>
                        </div>
                    </div>
                </div>
                <!-- Repeat the above div structure for the remaining two sections -->
            </div>
            <div class="flex flex-col mt-6 md:mt-8 md:flex-row md:gap-5 w-full text-lg font-medium tracking-wide leading-8 text-white">
                <div class="flex flex-1 px-0.5">
                    <a href="{{ route('register') }}">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/f06f74cfc12ff06c4b6afdbdc21e7bbbaf82a85a6ba846b5c8d4bebdb35d1227?" class="w-full h-auto" />
                    </a>
                </div>
                
            </div>
        </div>
    </div>


  
    



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










@endsection
