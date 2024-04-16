@extends('layout')

@section('content')
    <div class="container mx-auto py-8">
        <div class="bg-white shadow-lg overflow-hidden">
            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
            <div class="p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $product->name }}</h3>
                <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                <p class="text-gray-800 font-semibold">Price: ${{ number_format($product->price, 2) }}</p>
                <p class="text-gray-800">Quantity Available: {{ $product->quantity }}</p>
            

                {{-- <form action="{{ route('cart.add', $product->id) }}" method="POST">
                    @csrf
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" value="1" min="1">
                    <button type="submit">Add to Cart</button>
                </form> --}}

                <form action="{{ route('cart.add', $product->id) }}" method="POST" id="add-to-cart-form">
                    @csrf
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" value="1" min="1">
                    <button type="submit" id="add-to-cart-btn">Add to Cart</button>
                </form>
            </div>
        </div>
    </div>


@endsection
