@extends('layout')



@section('content')
    <a href="{{ route('products.create') }}" class="bg-red-800 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Créer
        un nouveau product</a>

        <div class="container mx-auto">
            <div class="flex justify-center items-center h-screen">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @forelse ($products as $product)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h3>
                                <p class="text-gray-600 mt-2">{{ $product->description }}</p>
                                <div class="mt-4 flex justify-between items-center">
                                    <div>
                                        <p class="text-gray-700 font-semibold">Price: ${{ number_format($product->price, 2) }}</p>
                                        <p class="text-gray-700">Quantity: {{ $product->quantity }}</p>
                                        <p class="text-gray-700">Category: {{ $product->category->name }}</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <a href="{{ route('products.edit', $product->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">
                            <p class="text-gray-600">No products found.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
        
        
</div>
@endsection
