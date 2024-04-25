@extends('layout')

@section('content')
    <div class=" flex justify-center  w-full bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-semibold mb-6">Add or modify Specialization</h1>
            {{-- <form action="{{ route('coach.specialization.submit') }}" method="POST" class="max-w-md mx-auto">
                @csrf
                <div class="mb-6">
                    <label for="specialization" class="block text-white">Specialization</label>
                    <input type="text" name="specialization" id="specialization" class="form-input mt-1 block w-full bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-blue-500 rounded-md py-3 px-4">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-md">Submit</button>
            </form> --}}

            <form action="{{ route('coach.specialization.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    {{-- <label for="specialization" class="block text-white">Specialization</label> --}}
                    <input type="text" name="specialization" id="specialization"
                        class="form-input mt-1 block w-full bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-blue-500 rounded-md py-3 px-4"
                        value="{{ auth()->user()->coach ? auth()->user()->coach->specialization : '' }}" required>
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold mt-4 py-3 px-6 rounded-md">Save</button>
            </form>
        </div>
    </div>

    <h2 class="text-5xl mt-5 mb-5 text-gray-400 text-center">Your Clients</h2>

    <div class="flex flex-beetwen gap-8  justify-center flex-wrap">
        @foreach($users as $user)

        <div class=" gap-6 flex items-center justify-center">
            <div
                class="bg-gray-800 dark:bg-gray-700 relative shadow-xl overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
               

                    <div class="flex items-center gap-4">
                        <img  src="{{ asset('storage/' . $user['image']) }}"
                            class="w-32 group-hover:w-36 group-hover:h-36 h-32 object-center object-cover rounded-full transition-all duration-500 delay-500 transform" />
                        <div class="w-fit transition-all transform duration-500">
                            <h1 class="text-gray-600 text-2xl dark:text-gray-200 font-bold">{{ $user['name'] }}</h1>

                            <p class="text-gray-400">Client</p>
                            <a
                                class="text-xs text-gray-500 dark:text-gray-200 group-hover:opacity-100 opacity-0 transform transition-all delay-300 duration-500">
                                {{ $user['email']  }}
                            </a>
                        </div>
                    </div>
                 
            </div>
        </div>
        @endforeach

    </div>
@endsection
