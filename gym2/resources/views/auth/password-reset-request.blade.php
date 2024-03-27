@extends('layout')



@section('content')
    <div class="flex justify-center   items-center h-screen">
        <form method="POST" action="{{ route('password.email') }}"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/3">
            @csrf
            <div class="mb-4 ">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    id="email" type="email" name="email" placeholder="Email" required autofocus>
            </div>
            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
            <div class="flex items-center justify-between">
                <button
                    class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Envoyer le lien de réinitialisation
                </button>
            </div>
        </form>
    </div>
@endsection
