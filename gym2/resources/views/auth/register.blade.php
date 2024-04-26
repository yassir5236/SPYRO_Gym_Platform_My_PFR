
@extends('layout')
@section('content')
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center"
            style="background-image: url('{{ asset('storage/images/pexels-cottonbro-studio-4115031.jpg') }}');">

            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl text-white font-bold text-left tracking-wide">Keep it special</h1>
                <p class="text-3xl my-4">Capture your personal memory in unique way, anywhere.</p>
            </div>

        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0"
            style="background-color: #161616;">
          
            <div class="w-full py-6 z-20">
                <h1 class="my-6 text-red-600 text-5xl font-bolt">
                    SPYRO
                </h1>

                <form method="POST" action="{{ route('register') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto"
                    enctype="multipart/form-data">
                    @csrf


                    <div class="pb-2 pt-4">
                        <input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus
                            class="block w-full p-4 text-lg rounded-sm bg-black  @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>



                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" placeholder="Email"
                            class="block w-full p-4 text-lg rounded-sm bg-black  @error('name') border-red-500 @enderror">
                        @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pb-2 pt-4">
                        <input type="password" id="password" name="password" required   placeholder="Password"
                            class="block w-full p-4 text-lg rounded-sm bg-black  @error('password') border-red-500 @enderror">
                        @error('password')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pb-2 pt-4">
                        <input type="file" id="image" name="image"   required placeholder="Your image"
                            class="block w-full p-4 text-lg rounded-sm bg-black @error('image') border-red-500 @enderror">
                        @error('image')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    </div>

                    <div class="px-4 pb-2 pt-4">
                        <button type="submit"
                            class="uppercase block w-full p-4 text-lg rounded-full bg-red-700 hover:bg-red-600 focus:outline-none">
                            Register</button>
                    </div>


                </form>
            </div>
        </div>
    </section>
{{-- @endsection --}}































@endsection
