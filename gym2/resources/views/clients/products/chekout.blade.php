@extends('layout')

@section('content')
    <h1>Checkout</h1>
    <p>Total Amount: ${{ $total }}</p>
    <form action="{{ route('cart.confirm') }}" method="POST">
        @csrf
        <!-- Formulaire de paiement -->
        <button type="submit">Confirm Purchase</button>
    </form>
@endsection