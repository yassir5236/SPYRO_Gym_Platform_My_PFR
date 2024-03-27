
@extends('layout')

{{-- @section('content')
<div class="flex justify-center items-center h-screen">
    <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" placeholder="Email" required autofocus>
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Mot de passe
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="******************" required>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Connexion
            </button>
            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                Mot de passe oublié ?
            </a>
        </div>
    </form>
</div> --}}







@section('content')
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-1/2 hidden bg-gray-500 bg-no-repeat bg-cover relative items-center"
            style="background-image: url('{{ asset('storage/images/pexels-cottonbro-studio-4115031.jpg') }}');">

            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-left tracking-wide">Keep it special</h1>
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


                <form method="POST" action="{{ route('login') }}" class="sm:w-2/3 w-full px-4 lg:px-0 mx-auto">
                    @csrf
                    <div class="pb-2 pt-4">
                        <input type="email" name="email" id="email" placeholder="Email"
                            class="block w-full p-4 text-lg rounded-sm bg-black">
                    </div>
                    <div class="pb-2 pt-4">
                        <input class="block w-full p-4 text-lg rounded-sm bg-black" type="password" name="password"
                            id="password" placeholder="Password">
                    </div>
                    <div class="text-right text-gray-400 hover:underline hover:text-gray-100">
                        <a href="{{ route('password.request') }}">Forgot your password?</a>
                    </div>
                    <div class="px-4 pb-2 pt-4">
                        <button
                            class="uppercase block w-full p-4 text-lg rounded-full bg-red-800 hover:bg-red-600 focus:outline-none">sign
                            in</button>
                    </div>


                </form>
            </div>
        </div>
    </section>
@endsection








