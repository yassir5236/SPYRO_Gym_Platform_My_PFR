@extends('layout')

{{-- 
@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-4">Shopping Cart</h1>

        <div class="flex flex-col md:flex-row md:space-x-6">
            <div class="w-full md:w-3/4">
                @if (session('cart'))
                    @php
                        $totalPrice = 0;
                    @endphp

                    @foreach (session('cart') as $id => $item)
                        @php
                            $totalPrice += $item['price'] * $item['quantity'];
                        @endphp
                        <div class="bg-white rounded shadow-md mb-4">
                            <div class="p-4">
                                <h5 class="text-lg font-semibold">{{ $item['name'] }}</h5>
                                <p class="text-gray-600">Price: ${{ $item['price'] }}</p>
                                <div class="flex items-center">
                                    <form action="{{ route('cart.update', $id) }}" method="POST" class="mr-4">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="quantity" value="{{ $item['quantity'] - 1 }}">
                                        <button type="submit"
                                            class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-2 py-1 rounded-l">
                                            -
                                        </button>
                                    </form>
                                    <p class="text-gray-600">Quantity: {{ $item['quantity'] }}</p>
                                    <form action="{{ route('cart.update', $id) }}" method="POST" class="ml-4">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="quantity" value="{{ $item['quantity'] + 1 }}">
                                        <button type="submit"
                                            class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold px-2 py-1 rounded-r">
                                            +
                                        </button>
                                    </form>
                                </div>
                                <p class="text-gray-600">Total: ${{ $item['price'] * $item['quantity'] }}</p>
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 mt-2 rounded">Remove</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-gray-600">Your cart is empty</p>
                @endif
            </div>

            <div class="w-full md:w-1/4">
                @if (session('cart'))
                    <div class="bg-white rounded shadow-md p-4">
                        <h5 class="text-lg font-semibold mb-4">Total</h5>
                        <p class="text-gray-600">Total Price: ${{ $totalPrice }}</p>
                        <a href="{{ route('cart.checkout') }}"
                            class="block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 mt-4 rounded">Proceed
                            to Checkout</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection --}}


{{-- @extends('layout') --}}

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-4">Shopping Cart</h1>

        <div class="flex justify-between md:space-x-6">
            <div class=" flex   w-full md:w-3/4">
                @if (session('cart'))
                    @php
                        $totalPrice = 0;
                    @endphp
                    @foreach (session('cart') as $id => $item)
                        <div class=" mb-10 max-w-2xl mx-auto">
                            <div class="bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">

                                <img src="{{ asset('storage/' . $item['image_path']) }}" alt="{{ $item['name'] }}"
                                    class="my-2">
                                <div class="px-5 mb-10 pb-5">
                                    <h5 class="text-lg font-semibold">{{ $item['name'] }}</h5>

                                    <p class="text-gray-600">Price: ${{ $item['price'] }}</p>


                                    <div class="flex items-center">
                                        <button
                                            class="px-4 py-2 bg-gray-300 text-white rounded-l-md focus:outline-none focus:ring focus:ring-blue-400 btn-decrease"
                                            data-id="{{ $id }}">-</button>
                                        <p class="text-gray-600 px-4">{{ $item['quantity'] }}</p>
                                        <button
                                            class="px-4 py-2 bg-gray-300 text-white rounded-r-md focus:outline-none focus:ring focus:ring-blue-400 btn-increase"
                                            data-id="{{ $id }}">+</button>
                                    </div>
                                    <p class="text-gray-600 totalprice text-3xl font-bold text-gray-900 dark:text-white">
                                        ${{ $item['price'] * $item['quantity'] }}</p>
                                    <form action="{{ route('cart.remove', $id) }}" method="POST">
                                        @csrf
                                        <button type="submit" style="background-color: coral"
                                            class=" text-white font-semibold px-4 py-2 mt-2 rounded">Remove</button>
                                    </form>
                                </div>
                            </div>
                    @endforeach
                @else
                    <p class="text-gray-600">Your cart is empty</p>
                @endif
            </div>
        </div>
        <div class="w-full md:w-1/4 ">
            @if (session('cart'))
                <div class="bg-white rounded shadow-md mt-2 p-4 ">
                    <h5 class="text-lg  font-semibold mb-4">Total</h5>
                    <p class="text-gray-600  text-2xl" id="finalPrice">Final Price: ${{ $totalPrice }}</p>
                    <a href="{{ route('cart.checkout') }}"
                        class="block bg-red-700 hover:bg-red-600 text-white font-semibold px-4 py-2 mt-4 rounded">Proceed
                        to Checkout</a>
                </div>
            @endif
        </div>
    </div>





    {{-- <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            const increaseButtons = document.querySelectorAll('.btn-increase');
            const decreaseButtons = document.querySelectorAll('.btn-decrease');

            increaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    updateQuantity(id, 'increase');
                });
            });

            decreaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    updateQuantity(id, 'decrease');
                });
            });

            function updateQuantity(id, action) {
                const quantityElement = document.querySelector(`[data-id="${id}"]`).nextElementSibling;
                let newQuantity = parseInt(quantityElement.textContent);
                if (action === 'increase') {
                    newQuantity += 1;
                } else if (action === 'decrease' && newQuantity > 1) {
                    newQuantity -= 1;
                } else {
                    return;
                }

                // Envoi de la requête AJAX pour mettre à jour la quantité
                fetch(`/cart/update/${id}`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            quantity: newQuantity
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            quantityElement.textContent = newQuantity;




                            const totalPriceElement = quantityElement.parentElement.nextElementSibling;

                            const priceElement = quantityElement.parentElement.previousElementSibling;
                            const price = parseFloat(priceElement.textContent.trim().replace('Price: $', ''));
                            const totalPrice = parseFloat(price * newQuantity);
                            totalPriceElement.textContent = '$' + totalPrice.toFixed(2);

                            // const totalprice = document.querySelectorAll('.totalprice');
                            // totalprice.forEach(price => {
                            //     console.log(price);
                            //     price.some;
                            // });



                            const totalprices = document.querySelectorAll('.totalprice');

                            let x = 0;
                            totalprices.forEach(totalprice => {
                                x+= parseFloat(totalprice.textContent.replace('$', ''));


                            });

                            const finalPrice=document.querySelectorAll('.finalprice');
                            
                            console.log("Total Price Sum:", x);
                            document.querySelector('#finalPrice').textContent=x;

                            



                        } else {
                            console.error(data.message);
                        }
                    })
                    .catch(error => console.error(error));
            }
        });
    </script> --}}


    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const increaseButtons = document.querySelectorAll('.btn-increase');
            const decreaseButtons = document.querySelectorAll('.btn-decrease');

            increaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    updateQuantity(id, 'increase');
                });
            });

            decreaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    updateQuantity(id, 'decrease');
                });
            });

            function updateQuantity(id, action) {
                const quantityElement = document.querySelector(`[data-id="${id}"]`).nextElementSibling;
                let newQuantity = parseInt(quantityElement.textContent);
                if (action === 'increase') {
                    newQuantity += 1;
                } else if (action === 'decrease' && newQuantity > 1) {
                    newQuantity -= 1;
                } else {
                    return;
                }

                // Sending AJAX request to update quantity
                fetch(`/cart/update/${id}`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            quantity: newQuantity
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            quantityElement.textContent = newQuantity;

                            const totalPriceElement = quantityElement.parentElement.nextElementSibling;
                            const priceElement = quantityElement.parentElement.previousElementSibling;
                            const price = parseFloat(priceElement.textContent.trim().replace('Price: $', ''));
                            const totalPrice = parseFloat(price * newQuantity);
                            totalPriceElement.textContent = '$' + totalPrice.toFixed(2);

                            const totalPrices = document.querySelectorAll('.totalprice');
                            let totalPriceSum = 0;
                            totalPrices.forEach(totalPrice => {
                                totalPriceSum += parseFloat(totalPrice.textContent.replace('$', ''));
                            });

                            // Update the final price element
                            const finalPriceElement = document.querySelector('#finalPrice');
                            finalPriceElement.textContent = 'Final Price: $' + totalPriceSum.toFixed(2);

                            document.addEventListener('DOMContentLoaded', function() {

                                const finalPriceElement = document.querySelector('#finalPrice');
                                finalPriceElement.textContent = 'Final Price: $' + totalPriceSum
                                    .toFixed(2);
                            })

                        } else {
                            console.error(data.message);
                        }
                    })
                    .catch(error => console.error(error));
            }
        });
    </script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const increaseButtons = document.querySelectorAll('.btn-increase');
            const decreaseButtons = document.querySelectorAll('.btn-decrease');

            increaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    updateQuantity(id, 'increase');
                });
            });

            decreaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    updateQuantity(id, 'decrease');
                });
            });

            // Fonction pour calculer et afficher le prix total
            function updateTotalPrice() {
                const totalPrices = document.querySelectorAll('.totalprice');
                let totalPriceSum = 0;
                totalPrices.forEach(totalPrice => {
                    totalPriceSum += parseFloat(totalPrice.textContent.replace('$', ''));
                });

                const finalPriceElement = document.querySelector('#finalPrice');
                finalPriceElement.textContent = '$' + totalPriceSum.toFixed(2);
            }

            // Appeler la fonction pour calculer et afficher le prix total une fois la page chargée
            updateTotalPrice();

            function updateQuantity(id, action) {
                const quantityElement = document.querySelector(`[data-id="${id}"]`).nextElementSibling;
                let newQuantity = parseInt(quantityElement.textContent);
                if (action === 'increase') {
                    newQuantity += 1;
                } else if (action === 'decrease' && newQuantity > 1) {
                    newQuantity -= 1;
                } else {
                    return;
                }

                fetch(`/cart/update/${id}`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            quantity: newQuantity
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            quantityElement.textContent = newQuantity;

                            const totalPriceElement = quantityElement.parentElement.nextElementSibling;
                            const priceElement = quantityElement.parentElement.previousElementSibling;
                            const price = parseFloat(priceElement.textContent.trim().replace('Price: $', ''));
                            const totalPrice = parseFloat(price * newQuantity);
                            totalPriceElement.textContent = '$' + totalPrice.toFixed(2);

                            // Mettre à jour le prix total
                            updateTotalPrice();
                        } else {
                            console.error(data.message);
                        }
                    })
                    .catch(error => console.error(error));
            }
        });
    </script>
@endsection
