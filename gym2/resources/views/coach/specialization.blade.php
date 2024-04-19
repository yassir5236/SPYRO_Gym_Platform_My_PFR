@extends('layout')

@section('content')
    <div class="bg-gray-900 text-white py-12">
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
                    <input type="text" name="specialization" id="specialization" class="form-input mt-1 block w-full bg-gray-800 text-white border border-gray-700 focus:outline-none focus:border-blue-500 rounded-md py-3 px-4" 
                           value="{{ auth()->user()->coach ? auth()->user()->coach->specialization : '' }}" required>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold mt-4 py-3 px-6 rounded-md">Save</button>
            </form>
        </div>
    </div>


 
@endsection
