@extends('layout')

@section('content')
    <div class="container mx-auto px-4 py-8 max-w-xl">
        <div class="bg-white shadow-lg overflow-hidden rounded-lg">
            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover object-center">
            <div class="p-6">
                <h3 class="text-2xl font-semibold text-gray-900 mb-2">{{ $product->name }}</h3>
                <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                <p class="text-gray-800 font-semibold">Price: ${{ number_format($product->price, 2) }}</p>
                <p class="text-gray-800">Quantity Available: {{ $product->quantity }}</p>

                <form action="{{ route('cart.add', $product->id) }}" method="POST" id="add-to-cart-form" class="flex items-center mt-4">
                    @csrf
                    <label for="quantity" class="mr-2">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" value="1" min="1" class="w-16 px-2 py-1 border border-gray-300 rounded">
                    <button type="submit" id="add-to-cart-btn" class="ml-2 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>
@endsection

