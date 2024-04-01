<!-- resources/views/auth/register.blade.php -->

@extends('layout')



{{-- @section('content')
<div class="min-h-screen flex justify-center items-center bg-gray-100">
    <div class="max-w-md w-full bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Inscription</h2>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nom:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 @error('name') border-red-500 @enderror">
                @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">E-mail:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 @error('email') border-red-500 @enderror">
                @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe:</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 @error('password') border-red-500 @enderror">
                @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image de profil:</label>
                <input type="file" id="image" name="image"
                    class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500 @error('image') border-red-500 @enderror">
                @error('image')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    S'inscrire
                </button>
            </div>
        </form>
    </div>
</div> --}}






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
            <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center"
                style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
                <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            </div>
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
