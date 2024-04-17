@extends('layout')

@section('content')
    <div class="container mx-auto py-6 text-white">
        <h1 class="text-3xl font-bold mb-4 text-red-600">Checkout</h1>

        @if (session('cart'))
            <div id="print-section" class="overflow-hidden border rounded-lg">
                <table class="min-w-full divide-y divide-gray-800">
                    <thead class="bg-gray-900">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Product</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Quantity</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Price</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-800 divide-y divide-gray-900">
                        @foreach (session('cart') as $id => $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['name'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['quantity'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['price'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-8 bg-gray-900 rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 text-red-600">Total</h2>
                <p class="text-2xl font-semibold ">${{ $totalPrice }}</p>
                <button onclick="confirmPurchase()" class="mt-4 bg-green-600 hover:bg-green-500 text-white font-semibold px-4 py-2 rounded">Confirm Purchase</button>
            </div>
        @else
            <p class="text-gray-400 mt-4">Your cart is empty</p>
        @endif
    </div>

    <script>
        function confirmPurchase() {
            if (confirm('Are you sure you want to confirm this purchase?')) {
                printContent();
            }
        }

        function printContent() {
            var printSection = document.getElementById('print-section').innerHTML;
            var originalContent = document.body.innerHTML;
            document.body.innerHTML = printSection;
            window.print();
            document.body.innerHTML = originalContent;
        }
    </script>
@endsection
