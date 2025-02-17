@extends('layout')
@section('content')
    <div class="background-image "
        style=" background-image: url('{{ asset('storage/images/client_home.png') }}');
                background-size: cover;
                background-position: center;">

        <a href="{{ route('subscriptions.create') }}" class="bg-red-800 rounded-md text-white px-4 py-2 ">Add
            Subscription</a>


        <div class = "flex justify-center">
            <div class="grid grid-cols-1 lg:grid-cols-3 w-fit lg:w-full items-center mt-8 gap-6">
                @foreach ($subscriptions as $subscription)
                    <div class="md:w-1/2 ">
                        <!-- Card -->
                        <div class="relative w-96 flex flex-col  shadow-lg rounded-lg p-5 border border-solid border-gray-300"
                            style="background-color:rgb(49, 33, 30)">
                            <!-- Popular badge -->
                            <div class="absolute top-0 right-5">
                                <div class="text-xs inline-flex font-semibold bg-green-100 text-white rounded-full text-center px-3 py-1.5 shadow-sm transform -translate-y-1/2"
                                    style="background-color:rgb(215, 50, 4)">
                                    {{ $subscription->type }}
                                </div>
                            </div>
                            {{-- @endif --}}
                            <!-- Card header -->
                            <header class="pb-4 mb-4 border-b border-indigo-200 border-opacity-30">
                                <!-- Product name -->
                                <h3 class="text-xl font-extrabold text-indigo-50 leading-snug mb-2">
                                    {{ $subscription->title }}</h3>
                                <!-- Price -->
                                <div class="font-extrabold mb-1">
                                    <span class="text-2xl text-indigo-200">$</span>
                                    <span class="text-4xl text-indigo-50">{{ $subscription->price }}</span>
                                </div>
                                <!-- Description -->
                                <div class="text-indigo-200">{{ $subscription->duration }}. Perfect for small
                                    businesses
                                </div>
                            </header>
                            <!-- Features list -->
                            <ul class="text-indigo-200 text-sm space-y-2 flex-grow mb-6">
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>{{ $subscription->advantage_1 }}</span>
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-3 h-3 fill-current text-green-500 mr-3 flex-shrink-0" viewBox="0 0 12 12"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.28 2.28L3.989 8.575 1.695 6.28A1 1 0 00.28 7.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 2.28z" />
                                    </svg>
                                    <span>{{ $subscription->advantage_2 }}</span>
                                </li>
                            </ul>
                            @if (auth()->user()->role === 'admin')
                                <div class="flex justify-between ">
                                    {{-- <button class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-300 ease-in-out w-full bg-red-600 hover:bg-red-400 text-white focus:outline-none focus-visible:ring-2"> --}}
                                    <form action="{{ route('subscriptions.destroy', $subscription->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <svg width="20px" height="20px" viewBox="0 0 1024 1024"
                                                xmlns="http://www.w3.org/2000/svg" fill="#000000">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                                </g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path fill="#fa7900"
                                                        d="M160 256H96a32 32 0 0 1 0-64h256V95.936a32 32 0 0 1 32-32h256a32 32 0 0 1 32 32V192h256a32 32 0 1 1 0 64h-64v672a32 32 0 0 1-32 32H192a32 32 0 0 1-32-32V256zm448-64v-64H416v64h192zM224 896h576V256H224v640zm192-128a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32zm192 0a32 32 0 0 1-32-32V416a32 32 0 0 1 64 0v320a32 32 0 0 1-32 32z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </button>
                                    </form>
                                    <a href="{{ route('subscriptions.edit', $subscription->id) }}">
                                        <svg width="20px" height="20px" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M1.90321 7.29677C1.90321 10.341 4.11041 12.4147 6.58893 12.8439C6.87255 12.893 7.06266 13.1627 7.01355 13.4464C6.96444 13.73 6.69471 13.9201 6.41109 13.871C3.49942 13.3668 0.86084 10.9127 0.86084 7.29677C0.860839 5.76009 1.55996 4.55245 2.37639 3.63377C2.96124 2.97568 3.63034 2.44135 4.16846 2.03202L2.53205 2.03202C2.25591 2.03202 2.03205 1.80816 2.03205 1.53202C2.03205 1.25588 2.25591 1.03202 2.53205 1.03202L5.53205 1.03202C5.80819 1.03202 6.03205 1.25588 6.03205 1.53202L6.03205 4.53202C6.03205 4.80816 5.80819 5.03202 5.53205 5.03202C5.25591 5.03202 5.03205 4.80816 5.03205 4.53202L5.03205 2.68645L5.03054 2.68759L5.03045 2.68766L5.03044 2.68767L5.03043 2.68767C4.45896 3.11868 3.76059 3.64538 3.15554 4.3262C2.44102 5.13021 1.90321 6.10154 1.90321 7.29677ZM13.0109 7.70321C13.0109 4.69115 10.8505 2.6296 8.40384 2.17029C8.12093 2.11718 7.93465 1.84479 7.98776 1.56188C8.04087 1.27898 8.31326 1.0927 8.59616 1.14581C11.4704 1.68541 14.0532 4.12605 14.0532 7.70321C14.0532 9.23988 13.3541 10.4475 12.5377 11.3662C11.9528 12.0243 11.2837 12.5586 10.7456 12.968L12.3821 12.968C12.6582 12.968 12.8821 13.1918 12.8821 13.468C12.8821 13.7441 12.6582 13.968 12.3821 13.968L9.38205 13.968C9.10591 13.968 8.88205 13.7441 8.88205 13.468L8.88205 10.468C8.88205 10.1918 9.10591 9.96796 9.38205 9.96796C9.65819 9.96796 9.88205 10.1918 9.88205 10.468L9.88205 12.3135L9.88362 12.3123C10.4551 11.8813 11.1535 11.3546 11.7585 10.6738C12.4731 9.86976 13.0109 8.89844 13.0109 7.70321Z"
                                                    fill="#ff7605"></path>
                                            </g>
                                        </svg>
                                    </a>
    
    
                                </div>
                            @endif
                            @if (auth()->user()->role === 'user')
                                {{-- @if ($subscriptionRequested->count() > 0) --}}
                                @if (isset($subscriptionRequested) && $subscriptionRequested->contains('subscription_type', $subscription->type))
                                    <button type="button" disabled
                                        class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-300 ease-in-out w-full bg-gray-400 text-white cursor-not-allowed focus:outline-none focus-visible:ring-2">
                                        Déjà demandé
                                    </button>
                                @else
                                    <form action="{{ route('subscription-requests.storeRequest') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="subscription_type" value="{{ $subscription->type }}">
                                        <button type="submit"
                                            class="font-semibold text-sm inline-flex items-center justify-center px-3 py-2 border border-transparent rounded leading-5 shadow transition duration-300 ease-in-out w-full bg-red-600 hover:bg-red-400 text-white focus:outline-none focus-visible:ring-2">
                                            Subscribe
                                        </button>
                                    </form>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
@endsection
