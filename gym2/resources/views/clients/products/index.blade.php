@extends('layout')



@section('content')
 

    <div class="w-full flex justify-between">
        <form action="{{ route('indexProductClient') }}" method="GET" class="flex items-center justify-center">
            <select name="category_id" id="category_id"
                class="appearance-none bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded-md leading-tight focus:outline-none focus:border-blue-500 transition duration-300 ease-in-out">
                <option value="">Select category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <button type="submit"
                class="ml-2 bg-red-700 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-md shadow-md transition duration-300 ease-in-out">Filter</button>
        </form>

        <form id="searchForm" class="flex items-center justify-center">
            <input type="text" id="searchInput" placeholder="Search by title..."
                class="border border-gray-300 py-2 px-4 rounded-md leading-tight focus:outline-none focus:border-blue-500 transition duration-300 ease-in-out">
        </form>
    </div>



    <div id="productsContainer" class="grid grid-cols-1 md:grid-cols-3 gap-8">

    </div>



    <div  id="existingProducts" class="container mx-auto py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse ($products as $product)
                <div class="bg-white  shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                    <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}"
                        class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $product->name }}</h3>
                        <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-800 font-semibold">Price: ${{ number_format($product->price, 2) }}</p>
                                {{-- <p class="text-gray-800">Quantity: {{ $product->quantity }}</p>
                                <p class="text-gray-800">Category: {{ $product->category->name }}</p> --}}
                            </div>
                            <div class="flex space-x-4">


                                <a href="{{ route('products.show', $product->id) }}">
                                    <svg fill="#ffae00" width="30px" height="30px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path
                                                d="M19,14a1,1,0,0,0,.949-.684l2-6A1,1,0,0,0,21,6H7V2A1,1,0,0,0,6,1H3A1,1,0,0,0,3,3H5V17a1,1,0,0,0,1,1H18a1,1,0,0,0,0-2H7V14ZM7,8H19.613l-1.334,4H7ZM6.5,19A1.5,1.5,0,1,1,5,20.5,1.5,1.5,0,0,1,6.5,19Zm10,0A1.5,1.5,0,1,1,15,20.5,1.5,1.5,0,0,1,16.5,19Z">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="text-center col-span-3">
                    <p class="text-gray-600">No products found.</p>
                </div>
            @endforelse
        </div>
    </div>


    <div id="noProductsMessage" class="text-center col-span-3" style="display: none;">
        <p class="text-gray-600">No products found.</p>
    </div>

















    <script>
        // Function to handle search input
        function handleSearchInput() {
            let searchInput = document.getElementById('searchInput').value;
    
            // Check if search input is not empty
            if (searchInput.trim() !== '') {
                let xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('searchProductClient') }}', true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.setRequestHeader('X-CSRF-TOKEN', document.head.querySelector('meta[name="csrf-token"]').content);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            let data = JSON.parse(xhr.responseText);
                            console.log(data);
                            if (data.products && data.products.length > 0) {
                                let productsContainer = document.getElementById('productsContainer');
                                productsContainer.innerHTML = '';
    
                                data.products.forEach(product => {
                                    let price = parseFloat(product.price);
                                    let productCard = `
                                    <div class="bg-white shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                                        <img src="{{ asset('storage/') }}/${product.image_path}" alt="${product.name}" class="w-full h-64 object-cover">
                                        <div class="p-6">
                                            <h3 class="text-xl font-semibold text-gray-900 mb-2">${product.name}</h3>
                                            <p class="text-gray-700 mb-4">${product.description}</p>
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    <p class="text-gray-800 font-semibold">Price: $${price.toFixed(2)}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    `;
                                    productsContainer.insertAdjacentHTML('beforeend', productCard);
                                });
    
                                // Hide the section for existing products
                                document.getElementById('existingProducts').style.display = 'none';
                            } else {
                                // Show a message if no products are found
                                document.getElementById('noProductsMessage').style.display = 'block';
                                // Show the section for existing products
                                document.getElementById('existingProducts').style.display = 'block';
                            }
                        } else {
                            console.error('Error: ' + xhr.status);
                        }
                    }
                };
    
                xhr.send('search=' + encodeURIComponent(searchInput));
    
            } else {
                // If the search input is empty, hide the search results
                let productsContainer = document.getElementById('productsContainer');
                productsContainer.innerHTML = '';
                // Show the section for existing products
                document.getElementById('existingProducts').style.display = 'block';
                // Hide the message for no products found
                document.getElementById('noProductsMessage').style.display = 'none';
            }
        }
    
        // Listen for input event on search input
        document.getElementById('searchInput').addEventListener('input', handleSearchInput);
    
        // Call handleSearchInput initially to handle the initial state of the search input
        handleSearchInput();
    </script>
    

@endsection
