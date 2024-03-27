@extends('layout')

@section('content')
<div class="flex justify-center items-center h-screen">
    <form method="POST" action="{{ route('password.update') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Nouveau mot de passe
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                Confirmation du nouveau mot de passe
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        @if ($errors->any())
            <div class="mb-4">
                @foreach ($errors->all() as $error)
                    <p class="text-red-500 text-xs italic">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div class="flex items-center justify-between">
            <button class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Réinitialiser le mot de passe
            </button>
        </div>
    </form>
</div>
@endsection


