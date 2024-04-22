@extends('layout')

@section('content')
    <div class="min-h-screen bg-black py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="absolute inset-0 bg-gradient-to-r from-red-600 to-orange-800 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
            <div class="text-white relative px-4 py-10 bg-gray-900 shadow-lg sm:rounded-3xl sm:p-20">

                <div class="text-center pb-6">
                    <h1 class="text-3xl text-white">Edit Post</h1>
                </div>

                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title :</label>
                        <input type="text" name="title" id="title" value="{{ $post->title }}" class="shadow form-input rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">Your image :</label>
                        <input type="file" name="image" id="image" class="shadow form-input rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" accept="image/*">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="content">Content:</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="shadow form-input rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $post->content }}</textarea>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="shadow bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">Update Post</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection
