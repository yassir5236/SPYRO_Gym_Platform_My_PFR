@extends('layout')

@section('content')
<div class="container mx-auto p-4">
    <div class="max-w-md mx-auto bg-gray-900 rounded-lg overflow-hidden shadow-lg mt-16">
        <div class="py-4 px-6">
            <h1 class="text-3xl font-bold text-white text-center">Update Product</h1>
        </div>
        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" class="px-8 py-6">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-bold text-white mb-2">Name:</label>
                <input type="text" name="name" id="name" class="form-input w-full bg-gray-800 border border-gray-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-blue-500" value="{{ $product->name }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-bold text-white mb-2">Description:</label>
                <textarea name="description" id="description" class="form-textarea w-full bg-gray-800 border border-gray-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-blue-500" rows="4" required>{{ $product->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-bold text-white mb-2">Price:</label>
                <input type="number" step="0.01" name="price" id="price" class="form-input w-full bg-gray-800 border border-gray-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-blue-500" value="{{ $product->price }}" required>
            </div>

            <div class="mb-4">
                <label for="quantity" class="block text-sm font-bold text-white mb-2">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-input w-full bg-gray-800 border border-gray-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-blue-500" value="{{ $product->quantity }}" required>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block text-sm font-bold text-white mb-2">Category:</label>
                <select name="category_id" id="category_id" class="form-select w-full bg-gray-800 border border-gray-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-blue-500" required>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="image_path" class="block text-sm font-bold text-white mb-2">Image:</label>
                <input type="file" name="image_path" id="image_path" class="form-input w-full bg-gray-800 border border-gray-600 rounded-md py-2 px-3 text-white focus:outline-none focus:border-blue-500" accept="image/*">
                <p class="text-sm text-gray-500 mt-2">Leave blank if you don't want to change the image.</p>
            </div>

            <div class="flex justify-center">
                <button type="submit" class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
