
@extends('layout')


@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold mb-4 text-white">Shopping Cart</h1>

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


                                    {{-- <div class="flex items-center">
                                        <button
                                            class="px-4 py-2 bg-gray-300 text-white rounded-l-md focus:outline-none focus:ring focus:ring-blue-400 btn-decrease"
                                            data-id="{{ $id }}">-</button>
                                        <p class="text-gray-600 px-4">{{ $item['quantity'] }}</p>
                                        <button
                                            class="px-4 py-2 bg-gray-300 text-white rounded-r-md focus:outline-none focus:ring focus:ring-blue-400 btn-increase"
                                            data-id="{{ $id }}">+</button>
                                    </div> --}}



                                    <div class="flex items-center">
                                        <button
                                            class="px-4 py-2 bg-gray-300 text-white rounded-l-md focus:outline-none focus:ring focus:ring-blue-400 btn-decrease"
                                            data-id="{{ $id }}">-</button>
                                        {{-- @dd($item); --}}
                                        <p class="text-gray-600 px-4" data-quantity="{{ $item['quantity'] }}">
                                            {{ $item['quantity'] }}</p>
                                        <button
                                            class="px-4 py-2 bg-gray-300 text-white rounded-r-md focus:outline-none focus:ring focus:ring-blue-400 btn-increase"
                                            data-id="{{ $id }}" data-max="{{ $item['max_quantity'] }}">+</button>
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
                    <p class="text-white">Your cart is empty</p>
                @endif
            </div>
        </div>
        <div class="w-full md:w-1/4 ">
            @if (session('cart'))
                <div class="bg-white rounded shadow-md mt-2 p-4 ">
                    <h5 class="text-lg  font-semibold mb-4">Total</h5>
                    <p class="text-gray-600  text-2xl" id="finalPrice">Final Price: ${{ $totalPrice }}</p>
                    <a href="{{ route('cart.checkout') }}"
                        class="block bg-red-700 hover:bg-red-600 text-white font-semibold px-4 py-2 mt-4 rounded">
                        Voir le devis </a>
                </div>
            @endif
        </div>
    </div>






    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const increaseButtons = document.querySelectorAll('.btn-increase');
            const decreaseButtons = document.querySelectorAll('.btn-decrease');

            increaseButtons.forEach(button => {

                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    let maxQuantity = parseInt(button.dataset.max);
                    updateQuantity(id, 'increase', maxQuantity);
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

            function updateQuantity(id, action, maxQuantity) {
                const quantityElement = document.querySelector(`[data-id="${id}"]`).nextElementSibling;
                let newQuantity = parseInt(quantityElement.textContent);
                // let newQuantity = parseInt(quantityElement.textContent);
                if (action === 'increase' && newQuantity < maxQuantity) {
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
