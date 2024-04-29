@extends('layout')

@section('content')
    <div class="container mx-auto py-8">

            <h2 class="text-3xl pl-4 font-semibold text-white mb-8">Admin Statistics</h2>

                    <div class=" mb-4 pb-10 px-8 mx-4 rounded-3xl bg-black border-4 border-red-400">


                                <div class=" mt-8 ">
                                
                                    <div class="grid grid-cols-12 gap-6 mt-5 ">
                                        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3  bg-white"
                                            href="#">
                                            <div class="p-5">
                                                <div class="flex justify-between">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                                    </svg>
                                                    <div
                                                        class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                        <span class="flex items-center"></span>
                                                    </div>
                                                </div>
                                                <div class="ml-2 w-full flex-1">
                                                    <div>
                                                        <div class="mt-3 text-3xl font-bold leading-8">
                                                            {{ $subscribedUsersCount }}</div>
                                                        <div class="mt-1 text-base text-gray-600">Subscribed Users</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                            href="#">
                                            <div class="p-5">
                                                <div class="flex justify-between">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                                    </svg>
                                                    <div
                                                        class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                        <span class="flex items-center"></span>
                                                    </div>
                                                </div>
                                                <div class="ml-2 w-full flex-1">
                                                    <div>
                                                        <div class="mt-3 text-3xl font-bold leading-8">
                                                            {{ $usersWithoutSubscriptionCount }}</div>
                                                        <div class="mt-1 text-base text-gray-600">All users ( Coach and
                                                            clients)</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                            href="#">
                                            <div class="p-5">
                                                <div class="flex justify-between">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                                    </svg>
                                                    <div
                                                        class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                        <span class="flex items-center"></span>
                                                    </div>
                                                </div>
                                                <div class="ml-2 w-full flex-1">
                                                    <div>
                                                        <div class="mt-3 text-3xl font-bold leading-8">
                                                            {{ $coachesCount }}</div>


                                                        <div class="mt-1 text-base text-gray-600">Coaches</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="transform  hover:scale-105 transition duration-300 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white"
                                            href="#">
                                            <div class="p-5">
                                                <div class="flex justify-between">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                                    </svg>
                                                    <div
                                                        class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                        <span class="flex items-center"></span>
                                                    </div>
                                                </div>
                                                <div class="ml-2 w-full flex-1">
                                                    <div>
                                                        <div class="mt-3 text-3xl font-bold leading-8">
                                                            {{ $productsCount }}</div>
                                                        <div class="mt-1 text-base text-gray-600">Products</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                </div>

                                <div class=" mt-5 ">
                                    <div class="grid gap-2 grid-cols-1 lg:grid-cols-2 	">
                                        <div class="bg-white shadow-lg" id="chartpie"></div>
                                    </div>
                                </div>

                    </div>


        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    </div>



    <div class="lg:col-span-1 p-4">

        <h1 class="text-3xl text-center font-semibold text-white mb-8">Demandes d'abonnement en attente</h1>
        <div class="flex flex-wrap">
            @foreach ($subscriptionRequests as $request)
                <div class="w-full lg:w-1/2 px-4 mb-8">

                    <div class="relative bg-gray-600 py-6 px-6 rounded-3xl text-gray-400 my-4 shadow-xl">
                        <div
                            class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-yellow-500 left-4 -top-6">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                        </div>
                        <div class="mt-8">
                            <p class="text-xl font-semibold text-white my-2">{{ $request->user->name }}</p>
                            <div class="flex space-x-2  text-sm">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p class="text-gray-400">Type: {{ $request->subscription_type }}</p>
                            </div>
                            <div class="flex space-x-2 text-gray-400 text-sm my-3">
                                <!-- svg  -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="text-gray-400">Price: {{ $request->subscription->price }} $</p>
                            </div>
                            <div class="border-t-2"></div>

                            <div class="flex justify-between ">
                                <div class="my-2">
                                    <p class="font-semibold text-base mb-2 text-gray-400">Reject</p>
                                    <div class="text-base text-gray-400 font-semibold">
                                        <form action="{{ route('subscription-requests.reject', $request->id) }}"
                                            method="POST" class="ml-2">
                                            @csrf
                                            <button type="submit">
                                                <svg width="37px" height="37px" viewBox="0 0 15 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M2.5 2.5L12.5 12.5M7.5 14.5C3.63401 14.5 0.5 11.366 0.5 7.5C0.5 3.63401 3.63401 0.5 7.5 0.5C11.366 0.5 14.5 3.63401 14.5 7.5C14.5 11.366 11.366 14.5 7.5 14.5Z"
                                                            stroke="#f5a314"></path>
                                                    </g>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="my-2">
                                    <p class="font-semibold text-base mb-2 text-gray-400">Approve</p>
                                    <div class="flex space-x-2 ml-2">
                                        <form action="{{ route('subscription-requests.approve', $request->id) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit">
                                                <svg width="40px" height="40px" viewBox="0 0 64 64"
                                                    xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                    </g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <defs>
                                                            <style>
                                                                .cls-1 {
                                                                    fill: none;
                                                                    stroke: #e6b505;
                                                                    stroke-linecap: round;
                                                                    stroke-linejoin: round;
                                                                    stroke-width: 2px;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <title></title>
                                                        <g data-name="Layer 37" id="Layer_37">
                                                            <path class="cls-1"
                                                                d="M61.62,14.43a47.56,47.56,0,0,1-29.26,47.9h0l-.45-.17A47.57,47.57,0,0,1,2.23,14.08L31.92,1.58Z">
                                                            </path>
                                                            <polygon class="cls-1"
                                                                points="13.92 28.32 21.84 43.99 53.75 20.49 22.09 36.07 13.92 28.32">
                                                            </polygon>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>















    <script>
        var subscribedUsersCount = {{ $subscribedUsersCount }};
        var usersWithoutSubscriptionCount = {{ $usersWithoutSubscriptionCount }};
        var coachesCount = {{ $coachesCount }};
        var productsCount = {{ $productsCount }};

        var chart = document.querySelector('#chartpie');
        var options = {
            series: [subscribedUsersCount, usersWithoutSubscriptionCount, coachesCount, productsCount],
            chart: {
                height: 350,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    dataLabels: {
                        name: {
                            fontSize: '22px',
                        },
                        value: {
                            fontSize: '16px',
                        },
                        total: {
                            show: true,
                            label: 'Total',
                            formatter: function(w) {
                                return w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                            }
                        }
                    }
                }
            },
            labels: ['Subscribed Users', 'Users Without Subscription', 'Coaches', 'Products'],
        };
        var chart = new ApexCharts(chart, options);
        chart.render();
    </script>
@endsection
